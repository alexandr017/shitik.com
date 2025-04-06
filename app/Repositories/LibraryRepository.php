<?php

namespace App\Repositories;

class LibraryRepository extends BaseRepository
{
    private string $type;

    public function __construct()
    {
        $typePages = include DOCUMENT_ROOT . '/config/page-types.php';
        $this->type = $typePages['BOOK'];
    }

    final public function getAllEnableBooks(string $lang = null, string $order = 'ASC') : array
    {
        global $PDO;

        $sql = "SELECT br.*, u.url AS url 
                FROM books_reviews br
                JOIN urls u ON u.section_id = br.id 
                WHERE br.status = 1 AND br.lang = '$lang' AND u.section_type = $this->type
                ORDER BY br.id $order
                ";
        $stmt = $PDO->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }


    final public function getAllEnableBookForSitemap(string $lang = null, string $order = 'ASC') : array
    {
        global $PDO;

        $sql = "SELECT br.*, u.url AS url 
                FROM books_reviews br
                JOIN urls u ON u.section_id = br.id 
                WHERE br.status = 1 AND br.lang = '$lang' AND u.section_type = $this->type AND br.is_isset_page = 1
                ORDER BY br.id $order
                ";
        $stmt = $PDO->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    final public function getEnableBookById(int $id, string $lang = null) : array
    {
        global $PDO;

        $sql = "SELECT br.*, u.url AS url 
                FROM books_reviews br
                JOIN urls u ON u.section_id = br.id 
                WHERE br.status = 1 AND br.lang = '$lang' AND br.id = $id AND u.section_type = $this->type
                ";
        $stmt = $PDO->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }

    final public function getAllBooksByIDWithLang(int $id)
    {
        global $PDO;

        $sql = "SELECT br.*, u.url AS url 
                FROM books_reviews br
                JOIN urls u ON u.section_id = br.id 
                WHERE br.status = 1 AND br.book_id = '$id' AND u.section_type = $this->type
                ";

        $stmt = $PDO->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}