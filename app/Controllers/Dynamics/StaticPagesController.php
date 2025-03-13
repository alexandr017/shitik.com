<?php

namespace app\Controllers\Dynamics;

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
        $currentLang = getLocale();
//        global $PDO;
//        $sql = "SELECT * FROM book_reviews where status = 1 and lang = '$currentLang' ORDER BY created_at DESC";
//        $stmt = $PDO->prepare($sql);
//        $stmt->execute();
//        $books = $stmt->fetchAll();
        $books = [];
        return renderView('v3/templates/static-pages/library.php', compact('page', 'books'));
    }

    final public function sitemapIndexPage($page)
    {
        $items = [];
        global $PDO;
        $currentLang = getLocale();
        $sql = "SELECT id, h1, template, alias as url FROM static_pages where status = 1 and lang = '$currentLang';";
        $stmt = $PDO->prepare($sql);
        $stmt->execute();
        $pages = $stmt->fetchAll();

        foreach ($pages as $_page) {
            if ($_page["template"] == 'blog-index') {
                $children = [];
                $sql2 = "SELECT id, h1, alias as url FROM blog_posts where status = 1 and lang = '$currentLang';";
                $stmt2 = $PDO->prepare($sql2);
                $stmt2->execute();
                $posts = $stmt2->fetchAll();
                foreach ($posts as $post) {
                    $children[] = (object) $post;
                }

                $_page['children'] = $children;
            }
            $items [] = (object) $_page;
        }

        return renderView('v3/templates/static-pages/sitemap.php', compact('page', 'items'));
    }
}