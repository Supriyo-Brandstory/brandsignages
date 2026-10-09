<?php

namespace App\Observers;

use App\Models\Blog;
use App\Services\SitemapService;

class BlogObserver
{
    /**
     * Handle the Blog "created" event.
     */
    public function created(Blog $blog): void
    {
        if (empty($blog->slug)) {
            return;
        }

        $domain = SitemapService::getDomain();
        $newUrl = $domain . '/blogs/' . ltrim($blog->slug, '/');
        $lastmod = $blog->updated_at ? $blog->updated_at->toW3cString() : now()->toW3cString();

        SitemapService::addOrUpdateUrl($newUrl, null, '0.80', $lastmod);
    }

    /**
     * Handle the Blog "updating" event.
     * Captures slug change before save and replaces old URL in sitemap.
     */
    public function updating(Blog $blog): void
    {
        $domain = SitemapService::getDomain();
        $newSlug = $blog->slug;
        $oldSlug = $blog->getOriginal('slug');

        if (!empty($newSlug) && !empty($oldSlug) && $newSlug !== $oldSlug) {
            $oldUrl = $domain . '/blogs/' . ltrim($oldSlug, '/');
            $newUrl = $domain . '/blogs/' . ltrim($newSlug, '/');
            $lastmod = now()->toW3cString();

            SitemapService::addOrUpdateUrl($newUrl, $oldUrl, '0.80', $lastmod);
        }
    }

    /**
     * Handle the Blog "updated" event.
     * Updates lastmod if slug was not changed.
     */
    public function updated(Blog $blog): void
    {
        // If slug did not change, still update lastmod for this blog in the sitemap
        if (!$blog->wasChanged('slug') && !empty($blog->slug)) {
            $domain = SitemapService::getDomain();
            $url = $domain . '/blogs/' . ltrim($blog->slug, '/');
            $lastmod = $blog->updated_at ? $blog->updated_at->toW3cString() : now()->toW3cString();

            SitemapService::addOrUpdateUrl($url, null, '0.80', $lastmod);
        }
    }

    /**
     * Handle the Blog "deleted" event.
     */
    public function deleted(Blog $blog): void
    {
        if (empty($blog->slug)) {
            return;
        }

        $domain = SitemapService::getDomain();
        $url = $domain . '/blogs/' . ltrim($blog->slug, '/');

        SitemapService::removeUrl($url);
    }
}
