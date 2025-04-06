<?php

namespace app\Controllers\Dynamics;

use App\Repositories\BlogRepository;
use App\Repositories\LibraryRepository;
use App\Repositories\StaticPagesRepository;

final class StaticPagesController implements DynamicsInterface
{

    final public function render(int $id) : ?string
    {
        global $PDO;
        $page = $PDO->query("SELECT * FROM static_pages WHERE id = $id and status = 1;");

        if ($page->rowCount() == 0) {
            abort(404);
        }

        $page = $page->fetch();

        return match ($page['template']) {
            'super-index' => renderView('v3/templates/static-pages/super-index.php', compact('page')),
            'index' => renderView('v3/templates/static-pages/index.php', compact('page')),
            'simple-page' => renderView('v3/templates/static-pages/simple-page.php', compact('page')),
            'blog-index' => $this->blogIndexPage($page),
            'library-index' => $this->libraryIndexPage($page),
            'sitemap' => $this->sitemapIndexPage($page),
            default => abort(404),
        };
    }



    final public function blogIndexPage($page)
    {
        $blogController = new BlogPostController();
        return $blogController->indexPage($page);
    }

    final public function libraryIndexPage($page)
    {
        $books = (new LibraryRepository)->getAllEnableBooks(getLocale(), 'DESC');
        return renderView('v3/templates/library/index.php', compact('page', 'books'));
    }

    final public function sitemapIndexPage($page)
    {
        $items = [];
        $currentLang = getLocale();
        $pages = (new StaticPagesRepository)->getAllEnablePages($currentLang);

        foreach ($pages as $_page) {
            if ($_page["template"] == 'blog-index') {
                $children = [];
                $posts = (new BlogRepository())->getAllEnablePosts($currentLang);
                foreach ($posts as $post) {
                    $children[] = (object) $post;
                }

                $_page['children'] = $children;
            }
            if ($_page["template"] == 'library-index') {
                $children = [];
                $books = (new LibraryRepository)->getAllEnableBookForSitemap($currentLang);
                foreach ($books as $book) {
                    $children[] = (object)$book;
                }

                $_page['children'] = $children;
            }
            $items [] = (object) $_page;
        }

        return renderView('v3/templates/static-pages/sitemap.php', compact('page', 'items'));
    }
}