<?php

namespace App\Observers;

use App\Models\CustomPage;
use App\Services\SitemapService;

class CustomPageObserver
{
    /**
     * Handle the CustomPage "created" event.
     */
    public function created(CustomPage $page): void
    {
        if (empty($page->slug)) {
            return;
        }

        $domain = SitemapService::getDomain();
        $newUrl = $domain . '/' . ltrim($page->slug, '/');
        $lastmod = $page->updated_at ? $page->updated_at->toW3cString() : now()->toW3cString();

        SitemapService::addOrUpdateUrl($newUrl, null, '0.80', $lastmod);
    }

    /**
     * Handle the CustomPage "updating" event.
     * Replaces old page URL with new page URL if slug changes.
     */
    public function updating(CustomPage $page): void
    {
        $domain = SitemapService::getDomain();
        $newSlug = $page->slug;
        $oldSlug = $page->getOriginal('slug');

        if (!empty($newSlug) && !empty($oldSlug) && $newSlug !== $oldSlug) {
            $oldUrl = $domain . '/' . ltrim($oldSlug, '/');
            $newUrl = $domain . '/' . ltrim($newSlug, '/');
            $lastmod = now()->toW3cString();

            SitemapService::addOrUpdateUrl($newUrl, $oldUrl, '0.80', $lastmod);
        }
    }

    /**
     * Handle the CustomPage "updated" event.
     */
    public function updated(CustomPage $page): void
    {
        // If slug did not change, still update lastmod in sitemap
        if (!$page->wasChanged('slug') && !empty($page->slug)) {
            $domain = SitemapService::getDomain();
            $url = $domain . '/' . ltrim($page->slug, '/');
            $lastmod = $page->updated_at ? $page->updated_at->toW3cString() : now()->toW3cString();

            SitemapService::addOrUpdateUrl($url, null, '0.80', $lastmod);
        }
    }

    /**
     * Handle the CustomPage "deleted" event.
     */
    public function deleted(CustomPage $page): void
    {
        if (empty($page->slug)) {
            return;
        }

        $domain = SitemapService::getDomain();
        $url = $domain . '/' . ltrim($page->slug, '/');

        SitemapService::removeUrl($url);
    }
}
