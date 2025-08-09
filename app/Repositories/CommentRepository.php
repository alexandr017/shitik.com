<?php

namespace app\Repositories;

class CommentRepository
{
    public function getActiveCommentsByEntity(int $entryType, int $entryId)
    {
        global $PDO;

        $sql = "SELECT * FROM comments WHERE entry_type = :entry_type AND entry_id = :entry_id AND status = 1";

        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(':entry_type', $entryType, \PDO::PARAM_INT);
        $stmt->bindParam(':entry_id', $entryId, \PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);

    }

    public function store($lang, $entryType, $entryId, $name, $comment)
    {
        global $PDO;

        $sql = "INSERT INTO comments (lang, entry_type, entry_id, name, comment, created_at) VALUES (:lang, :entry_type, :entry_id, :name, :comment, NOW())";

        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(':lang', $lang, \PDO::PARAM_STR);
        $stmt->bindParam(':entry_type', $entryType, \PDO::PARAM_INT);
        $stmt->bindParam(':entry_id', $entryId, \PDO::PARAM_INT);
        $stmt->bindParam(':name', $name, \PDO::PARAM_STR);
        $stmt->bindParam(':comment', $comment, \PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $PDO->lastInsertId();
        }

        return false;
    }
}