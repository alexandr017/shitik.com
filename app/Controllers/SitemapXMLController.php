<?php

namespace app\Controllers;

use App\Repositories\StaticPagesRepository;
use App\Repositories\BlogRepository;
use App\Repositories\LibraryRepository;

final class SitemapXMLController
{
    final public function index() : void
    {
        $lang = getLocale();
        header('Content-Type: application/xml');
        echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        echo '<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
        echo '  <sitemap>' . "\n";
        echo '    <loc>' . getEnvValue('DOMAIN_NAME') . '/' . $lang . '/sitemap-static-pages-xml</loc>' . "\n";
        echo '  </sitemap>' . "\n";
        echo '  <sitemap>' . "\n";
        echo '    <loc>' . getEnvValue('DOMAIN_NAME') . '/' . $lang . '/sitemap-blog-xml</loc>' . "\n";
        echo '  </sitemap>' . "\n";
//        echo '  <sitemap>' . "\n";
//        echo '    <loc>' . getEnvValue('DOMAIN_NAME') . '/' . $lang . '/sitemap-library-xml</loc>' . "\n";
//        echo '  </sitemap>' . "\n";
        echo '</sitemapindex>';
    }

    final public function staticPages() : void
    {
        header('Content-Type: application/xml');
        $pages = (new StaticPagesRepository)->getAllEnablePages(getLocale());

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
        foreach ($pages as $page) {
            if ($page['url'] === '/') {
                continue;
            }
            $xml .= '  <url>' . "\n";
            $xml .= '    <loc>' . getEnvValue('DOMAIN_NAME') . '/' . $page['url'] . '</loc>' . "\n";
            $xml .= '  </url>' . "\n";
        }
        $xml .= '</urlset>';

        echo $xml;
    }

    final public function blogPosts() : void
    {
        header('Content-Type: application/xml');
        $posts = (new BlogRepository)->getAllEnablePosts(getLocale());

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
        foreach ($posts as $post) {
            if ($post['url'] === '/') {
                continue;
            }
            $xml .= '  <url>' . "\n";
            $xml .= '    <loc>' . getEnvValue('DOMAIN_NAME') . '/' . $post['url'] . '</loc>' . "\n";
            $xml .= '  </url>' . "\n";
        }
        $xml .= '</urlset>';

        echo $xml;
    }

    final public function library() : void
    {
        header('Content-Type: application/xml');
        $books = (new LibraryRepository)->getAllEnablePages(getLocale());

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
        foreach ($books as $book) {
            $xml .= '  <url>' . "\n";
            $xml .= '    <loc>' . getEnvValue('DOMAIN_NAME') . '/' . $book['url'] . '</loc>' . "\n";
            $xml .= '  </url>' . "\n";
        }
        $xml .= '</urlset>';

        echo $xml;
    }

}