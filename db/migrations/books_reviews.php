<?php
global $PDO;

$sql = "CREATE TABLE IF NOT EXISTS books_reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    lang VARCHAR(2) NOT NULL,
    alias VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    meta_description VARCHAR(255) NOT NULL,
    h1 VARCHAR(255) NOT NULL,
    book VARCHAR(500) NOT NULL,
    categories VARCHAR(500) NOT NULL,
    authors VARCHAR(500) NOT NULL,
    cover_image VARCHAR(255) NOT NULL,
    year_of_publishing YEAR NOT NULL,
    year_of_reading YEAR NOT NULL,
    my_rating TINYINT,
    author_rating TINYINT,
    number_of_reads TINYINT NOT NULL,
    total_pages INT NOT NULL,
    language VARCHAR(50),
    pages_of_summary INT,
    review TEXT,
    is_unique_review BOOLEAN,
    color VARCHAR(7) NOT NULL,
    status BOOLEAN NOT NULL
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;";

$PDO->exec($sql);
echo "Table books_reviews has been created successfully.<br>";