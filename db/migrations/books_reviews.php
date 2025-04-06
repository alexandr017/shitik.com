<?php
global $PDO;

$sql = "CREATE TABLE IF NOT EXISTS books_reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    book_id INT NOT NULL,
    lang VARCHAR(2) NOT NULL,
    book VARCHAR(500) NOT NULL,
    authors VARCHAR(500) NOT NULL,
    title VARCHAR(255) NOT NULL,
    meta_description VARCHAR(255) NOT NULL,
    h1 VARCHAR(255) NOT NULL,
    is_native_lang BOOLEAN NOT NULL,
    is_book_exist BOOLEAN NOT NULL,
    grade TINYINT NOT NULL,
    categories VARCHAR(500) NOT NULL,
    cover_big_image VARCHAR(255) NOT NULL,
    cover_small_image VARCHAR(255) NOT NULL,
    year_of_publishing YEAR NOT NULL,
    year_of_reading YEAR NOT NULL,
    number_of_reads TINYINT NOT NULL,
    total_pages INT NOT NULL,
    pages_of_summary INT,
    review TEXT,
    is_unique_review BOOLEAN,
    color VARCHAR(7) NOT NULL,
    is_isset_page BOOLEAN NOT NULL,
    status BOOLEAN NOT NULL
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;";


$PDO->exec($sql);
echo "Table books_reviews has been created successfully.<br>";