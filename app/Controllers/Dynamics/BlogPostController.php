<?php

namespace app\Controllers\Dynamics;

use App\Repositories\BlogRepository;

final class BlogPostController implements DynamicsInterface
{
    final public function indexPage($page) : ?string
    {
        $posts = (new BlogRepository)->getAllEnablePosts(getLocale(), 'DESC');
        return renderView('v3/templates/blog/index.php', compact('page', 'posts'));
    }

    final public function render(int $id) : ?string
    {
        $post = (new BlogRepository)->getPostById($id, getLocale());
        $post = (object) $post;
        if (!$post) {
            abort(404);
        }

        $posts = (new BlogRepository)->getAllPostByIDWithLang($post->post_id);
        $alternates = [];
        foreach ($posts as $_post) {
            if ($_post['id'] !== $id) {
                $alternates [] = (object) [
                    'url' => $_post['url'],
                    'lang' => $_post['lang']
                ];
            }
        }

        return renderView( 'v3/templates/blog/post.php', compact('post', 'alternates') );


    }
}