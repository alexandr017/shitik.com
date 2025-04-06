<?php

namespace App\Repositories;

final class StaticPagesRepository extends BaseRepository
{
    final public function getAllEnablePages(string $lang = null, string $order = 'ASC') : array
    {
        global $PDO;

        $typePages = include DOCUMENT_ROOT . '/config/page-types.php';
        $type = $typePages['PAGE'];

        $sql = "SELECT st.*, u.url AS url 
                FROM static_pages st
                JOIN urls u ON u.section_id = st.id 
                WHERE st.status = 1 AND st.lang = '$lang' AND u.section_type = $type
                ORDER BY st.id $order
                ";
        $stmt = $PDO->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}