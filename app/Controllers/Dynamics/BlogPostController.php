<?php

namespace app\Controllers\Dynamics;

use App\Repositories\BlogRepository;

final class BlogPostController implements DynamicsInterface
{
    final public function indexPage($page) : ?string
    {
        $posts = (new BlogRepository)->getAllEnablePosts(getLocale());
        return renderView('v3/templates/blog/index.php', compact('page', 'posts'));
    }

    final public function render(int $id) : ?string
    {
        global $PDO;
        $query = $PDO->prepare("SELECT *, alias as url FROM blog_posts WHERE id = :id LIMIT 1");
        $query->execute(['id' => $id]);
        $post = (object) $query->fetch(\PDO::FETCH_ASSOC);
        if ($post) {
            return renderView( 'v3/templates/blog/post.php', compact('post') );
        }

    }
}