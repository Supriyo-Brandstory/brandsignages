<?php

namespace App\Services;

use App\Models\Blog;
use App\Models\CustomPage;
use App\Models\Sitemap;
use Illuminate\Support\Facades\File;

class SitemapService
{
    /**
     * Get the base domain for URLs (e.g., https://brandsignages.com).
     */
    public static function getDomain(): string
    {
        // 1. If currently inside a web request with a real domain (not localhost)
        if (request() && request()->getHost() && !str_contains(request()->getHost(), 'localhost') && !str_contains(request()->getHost(), '127.0.0.1')) {
            return rtrim(request()->getSchemeAndHttpHost(), '/');
        }

        // 2. Check APP_URL if set and not localhost
        $appUrl = rtrim((string) config('app.url', ''), '/');
        if (!empty($appUrl) && !str_contains($appUrl, 'localhost') && !str_contains($appUrl, '127.0.0.1')) {
            return $appUrl;
        }

        // 3. Fallback: inspect the domain currently used in existing sitemap
        $record = Sitemap::first();
        if ($record && !empty($record->sitemap) && preg_match('#<loc>(https?://[^/<]+)#i', $record->sitemap, $match)) {
            return rtrim($match[1], '/');
        }

        return 'https://brandsignages.com';
    }

    /**
     * Add or update a URL in the sitemap.
     * If $oldUrl is given, replace $oldUrl's entry with $newUrl.
     *
     * @param string $newUrl
     * @param string|null $oldUrl
     * @param string $priority
     * @param string|null $lastmod
     * @return void
     */
    public static function addOrUpdateUrl(string $newUrl, ?string $oldUrl = null, string $priority = '0.80', ?string $lastmod = null): void
    {
        $newUrl = self::normalizeUrl($newUrl);
        $oldUrl = $oldUrl ? self::normalizeUrl($oldUrl) : null;
        $lastmod = $lastmod ?: now()->toW3cString();

        $record = Sitemap::firstOrCreate(['id' => 1], ['sitemap' => '']);
        $content = $record->sitemap ?? '';

        $newEntry = self::buildUrlEntry($newUrl, $lastmod, $priority);

        // Case 1: An old URL is being replaced by a new URL (slug edit)
        if ($oldUrl && $oldUrl !== $newUrl) {
            $patternOld = self::getUrlBlockPattern($oldUrl);
            if (preg_match($patternOld, $content)) {
                $content = preg_replace($patternOld, $newEntry, $content, 1);
                self::saveSitemap($record, $content);
                return;
            }
        }

        // Case 2: The URL already exists in the sitemap -> update its lastmod and priority
        $patternNew = self::getUrlBlockPattern($newUrl);
        if (preg_match($patternNew, $content)) {
            $content = preg_replace($patternNew, $newEntry, $content, 1);
        } else {
            // Case 3: New entry -> append to sitemap
            $content = rtrim($content) . "\n" . $newEntry;
        }

        self::saveSitemap($record, $content);
    }

    /**
     * Remove a URL block from the sitemap.
     */
    public static function removeUrl(string $url): void
    {
        $url = self::normalizeUrl($url);
        $record = Sitemap::first();
        if (!$record || empty($record->sitemap)) {
            return;
        }

        $pattern = self::getUrlBlockPattern($url);
        $content = preg_replace($pattern, '', $record->sitemap);
        $content = preg_replace("/\n{3,}/", "\n\n", trim($content));

        self::saveSitemap($record, $content);
    }

    /**
     * Sync / auto-generate sitemap by ensuring all existing Blogs and CustomPages are present.
     */
    public static function syncAll(): int
    {
        $domain = self::getDomain();
        $record = Sitemap::firstOrCreate(['id' => 1], ['sitemap' => '']);
        $content = $record->sitemap ?? '';
        $addedOrUpdated = 0;

        // 1. Sync all Blogs
        $blogs = Blog::all();
        foreach ($blogs as $blog) {
            if (empty($blog->slug)) {
                continue;
            }
            $url = $domain . '/blogs/' . ltrim($blog->slug, '/');
            $pattern = self::getUrlBlockPattern($url);

            if (!preg_match($pattern, $content)) {
                $lastmod = $blog->updated_at ? $blog->updated_at->toW3cString() : now()->toW3cString();
                $entry = self::buildUrlEntry($url, $lastmod, '0.80');
                $content = rtrim($content) . "\n" . $entry;
                $addedOrUpdated++;
            }
        }

        // 2. Sync all Custom Pages
        $pages = CustomPage::all();
        foreach ($pages as $page) {
            if (empty($page->slug)) {
                continue;
            }
            $url = $domain . '/' . ltrim($page->slug, '/');
            $pattern = self::getUrlBlockPattern($url);

            if (!preg_match($pattern, $content)) {
                $lastmod = $page->updated_at ? $page->updated_at->toW3cString() : now()->toW3cString();
                $entry = self::buildUrlEntry($url, $lastmod, '0.80');
                $content = rtrim($content) . "\n" . $entry;
                $addedOrUpdated++;
            }
        }

        self::saveSitemap($record, $content);

        return $addedOrUpdated;
    }

    /**
     * Sanitize and format all URL entries, fixing any malformed or missing <url> tags.
     */
    public static function sanitizeContent(string $rawContent): string
    {
        if (empty(trim($rawContent))) {
            return '';
        }

        // Match all loc occurrences, whether properly enclosed in <url> or not
        preg_match_all('#(?:<url>\s*)?<loc>(.*?)</loc>(.*?)</url>#is', $rawContent, $matches, PREG_SET_ORDER);

        $cleanEntries = [];
        foreach ($matches as $m) {
            $loc = trim($m[1]);
            if (empty($loc)) {
                continue;
            }

            $rest = $m[2] ?? '';
            preg_match('#<lastmod>(.*?)</lastmod>#i', $rest, $lm);
            preg_match('#<priority>(.*?)</priority>#i', $rest, $pr);
            preg_match('#<changefreq>(.*?)</changefreq>#i', $rest, $cf);

            $lastmod = !empty($lm[1]) ? trim($lm[1]) : now()->toW3cString();
            $priority = !empty($pr[1]) ? trim($pr[1]) : '0.80';
            $changefreq = !empty($cf[1]) ? trim($cf[1]) : null;

            $entry = "<url>\n"
                . "  <loc>" . htmlspecialchars_decode($loc) . "</loc>\n"
                . "  <lastmod>{$lastmod}</lastmod>\n"
                . "  <priority>{$priority}</priority>";

            if ($changefreq) {
                $entry .= "\n  <changefreq>{$changefreq}</changefreq>";
            }

            $entry .= "\n</url>";

            $cleanEntries[$loc] = $entry;
        }

        return implode("\n", $cleanEntries);
    }

    /**
     * Save sitemap to database and also update public/sitemap.xml if wanted.
     */
    protected static function saveSitemap(Sitemap $record, string $content): void
    {
        $cleaned = self::sanitizeContent($content);
        $record->sitemap = $cleaned;
        $record->save();

        // Also write full XML to public/sitemap.xml so web servers can serve it directly
        try {
            $fullXml = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n"
                . "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"\n"
                . "        xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"\n"
                . "        xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">\n"
                . $cleaned . "\n"
                . "</urlset>\n";

            File::put(public_path('sitemap.xml'), $fullXml);
        } catch (\Throwable $e) {
            // Log or ignore file write failure if permissions deny
        }
    }

    /**
     * Build standard XML <url> entry string.
     */
    protected static function buildUrlEntry(string $url, string $lastmod, string $priority = '0.80'): string
    {
        return "<url>\n"
            . "  <loc>{$url}</loc>\n"
            . "  <lastmod>{$lastmod}</lastmod>\n"
            . "  <priority>{$priority}</priority>\n"
            . "</url>";
    }

    /**
     * Regex pattern to find a <url> block that contains a given loc URL.
     */
    protected static function getUrlBlockPattern(string $url): string
    {
        // Match http or https, or the exact path to be robust against scheme differences
        $escaped = preg_quote($url, '#');
        // Also allow matching if URL had different scheme
        $pathOnly = parse_url($url, PHP_URL_PATH);
        if ($pathOnly) {
            $escapedPath = preg_quote($pathOnly, '#');
            return '#<url>\s*<loc>https?://[^<]+?' . $escapedPath . '/?</loc>.*?</url>\s*#si';
        }

        return '#<url>\s*<loc>' . $escaped . '</loc>.*?</url>\s*#si';
    }

    /**
     * Normalize URL using the canonical domain.
     */
    public static function normalizeUrl(string $url): string
    {
        $url = trim($url);
        if (str_starts_with($url, 'http://') || str_starts_with($url, 'https://')) {
            $path = parse_url($url, PHP_URL_PATH) ?? '/';
            return self::getDomain() . $path;
        }

        return self::getDomain() . '/' . ltrim($url, '/');
    }
}
