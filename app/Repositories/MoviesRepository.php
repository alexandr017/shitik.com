<?php

namespace app\Repositories;

class MoviesRepository
{
    private string $type;

    public function __construct()
    {
        $typePages = include DOCUMENT_ROOT . '/config/page-types.php';
        $this->type = $typePages['MOVIE'];
    }

    final public function getAllEnableMovies(string $lang = null, string $order = 'ASC') : array
    {
        global $PDO;

        $sql = "SELECT br.*, u.url AS url 
                FROM movies_reviews br
                JOIN urls u ON u.section_id = br.id 
                WHERE br.status = 1 AND br.lang = '$lang' AND u.section_type = $this->type
                ORDER BY br.id $order
                ";
        $stmt = $PDO->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }


    final public function getAllEnableMoviesForSitemap(string $lang = null, string $order = 'ASC') : array
    {
        global $PDO;

        $sql = "SELECT mr.*, u.url AS url 
                FROM movies_reviews mr
                JOIN urls u ON u.section_id = mr.id 
                WHERE mr.status = 1 AND mr.lang = '$lang' AND u.section_type = $this->type
                ORDER BY mr.id $order
                ";
        $stmt = $PDO->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    final public function getEnableMovieById(int $id, string $lang = null) : array
    {
        global $PDO;

        $sql = "SELECT br.*, u.url AS url 
                FROM movies_reviews br
                JOIN urls u ON u.section_id = br.id 
                WHERE br.status = 1 AND br.lang = '$lang' AND br.id = $id AND u.section_type = $this->type
                ";
        $stmt = $PDO->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }

    final public function getAllMoviesByIDWithLang(int $id)
    {
        global $PDO;

        $sql = "SELECT br.*, u.url AS url 
                FROM movies_reviews br
                JOIN urls u ON u.section_id = br.id 
                WHERE br.status = 1 AND br.movie_id = '$id' AND u.section_type = $this->type
                ";

        $stmt = $PDO->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}