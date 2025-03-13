<?php

namespace App\Repositories;

class LibraryRepository extends BaseRepository
{
    final public function getAllEnablePages($lang = null) : array
    {
        global $PDO;
        $sql = "SELECT *, alias as url FROM books_reviews where status = 1 and lang = '$lang'";
        $stmt = $PDO->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}