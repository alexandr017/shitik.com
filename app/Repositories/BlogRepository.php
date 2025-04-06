<?php

namespace App\Repositories;

final class BlogRepository extends BaseRepository
{
    final public function getAllEnablePosts (string $lang = null, string $order = 'ASC') : array
    {
        global $PDO;

        $typePages = include DOCUMENT_ROOT . '/config/page-types.php';
        $type = $typePages['POST'];

        $sql = "SELECT bp.*, u.url AS url 
                FROM blog_posts bp
                JOIN urls u ON u.section_id = bp.id 
                WHERE bp.status = 1 AND bp.lang = '$lang' AND u.section_type = $type
                ORDER BY bp.id $order
                ";
        $stmt = $PDO->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    final public function getPostById(int $id, string $lang) : array
    {
        global $PDO;

        $typePages = include DOCUMENT_ROOT . '/config/page-types.php';
        $type = $typePages['POST'];

        $sql = "SELECT bp.*, u.url AS url 
                FROM blog_posts bp
                JOIN urls u ON u.section_id = bp.id 
                WHERE bp.status = 1 AND bp.lang = '$lang' AND bp.id = $id AND u.section_type = $type
                ";
        $stmt = $PDO->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }
}