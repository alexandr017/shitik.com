<?php

namespace App\Repositories;

final class StaticPagesRepository extends BaseRepository
{
    final public function getAllEnablePages($lang = null) : array
    {
        global $PDO;
        $sql = "SELECT *, alias as url FROM static_pages where status = 1 and lang = '$lang'";
        $stmt = $PDO->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}