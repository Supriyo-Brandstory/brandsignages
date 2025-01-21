<?xml version="1.0" encoding="UTF-8"?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    @if (!empty($sitemap) && !empty($sitemap->sitemap))
        {!! $sitemap->sitemap !!}
    @else
        <url>
            <loc>https://brandsignages.com/</loc>
            <lastmod>{{ now()->toDateString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>1.0</priority>
        </url>
    @endif
</urlset>
