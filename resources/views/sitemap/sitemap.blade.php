<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php foreach( config('app.available_locales') as $k => $lang ): ?>
        <url>
            <loc><?=env('APP_URL')?>/{{ $lang }}</loc>
            <lastmod>2021-05-24T16:05:00+00:00</lastmod>
            <priority>1.00</priority>
        </url>
        <url>
            <loc><?=env('APP_URL')?>/{{ $lang }}/about-us</loc>
            <lastmod>2021-05-24T16:05:00+00:00</lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=env('APP_URL')?>/{{ $lang }}/we-making</loc>
            <lastmod>2021-05-24T16:05:00+00:00</lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=env('APP_URL')?>/{{ $lang }}/development-site-shop</loc>
            <lastmod>2021-05-24T16:05:00+00:00</lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=env('APP_URL')?>/{{ $lang }}/landing-page</loc>
            <lastmod>2021-05-24T16:05:00+00:00</lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=env('APP_URL')?>/{{ $lang }}/online-store</loc>
            <lastmod>2021-05-24T16:05:00+00:00</lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=env('APP_URL')?>/{{ $lang }}/corporate-site</loc>
            <lastmod>2021-05-24T16:05:00+00:00</lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=env('APP_URL')?>/{{ $lang }}/api-service</loc>
            <lastmod>2021-05-24T16:05:00+00:00</lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=env('APP_URL')?>/{{ $lang }}/web-portal</loc>
            <lastmod>2021-05-24T16:05:00+00:00</lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=env('APP_URL')?>/{{ $lang }}/site-system</loc>
            <lastmod>2021-05-24T16:05:00+00:00</lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=env('APP_URL')?>/{{ $lang }}/portfolio</loc>
            <lastmod>2021-05-24T16:05:00+00:00</lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=env('APP_URL')?>/{{ $lang }}/articles</loc>
            <lastmod>2021-05-24T16:05:00+00:00</lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=env('APP_URL')?>/{{ $lang }}/contacts</loc>
            <lastmod>2021-05-24T16:05:00+00:00</lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=env('APP_URL')?>/{{ $lang }}/online-brief</loc>
            <lastmod>2021-05-24T16:05:00+00:00</lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=env('APP_URL')?>/{{ $lang }}/test-php</loc>
            <lastmod>2021-05-24T16:05:00+00:00</lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=env('APP_URL')?>/{{ $lang }}/seo-words</loc>
            <lastmod>2021-05-24T16:05:00+00:00</lastmod>
            <priority>0.80</priority>
        </url>
    <?php endforeach; ?>

    <?php foreach($articles as $key => $item): ?>
        <url>
            <loc><?=env('APP_URL')?>/{{ $item->lang }}/article/<?=$item->slag?></loc>
            <lastmod><?=date('Y-m-d', strtotime($item->created_at))?>T<?=date('H:i:s', strtotime($item->created_at))?>+00:00</lastmod>
            <priority>0.64</priority>
        </url>
    <?php endforeach; ?>
</urlset>
