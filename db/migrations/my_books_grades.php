<?php

global $PDO;

$sql = "
    CREATE TABLE IF NOT EXISTS my_books_grades (
        id INT AUTO_INCREMENT PRIMARY KEY,
        book_id INT NOT NULL,
        review_text TEXT NOT NULL,
        grade SMALLINT NOT NULL,
        status BOOLEAN default 0
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;;
";

$PDO->exec($sql);

echo "Table my_books_grades has been created successfully.<br>";
