<?php

namespace App\Repositories;

final class BlogRepository extends BaseRepository
{
    final public function getAllEnablePosts($lang = null) : array
    {
        global $PDO;
        $sql = "SELECT *, alias as url FROM blog_posts where status = 1 and lang = '$lang' ORDER BY created_at DESC";
        $stmt = $PDO->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}