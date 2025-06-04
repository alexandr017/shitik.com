<?php
global $PDO;

$sql = "CREATE TABLE IF NOT EXISTS movies_reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    movie_id INT NOT NULL,
    lang VARCHAR(2) NOT NULL,
    movie VARCHAR(500) NOT NULL,
    director VARCHAR(500) NOT NULL,
    title VARCHAR(255) NOT NULL,
    meta_description VARCHAR(255) NOT NULL,
    h1 VARCHAR(255) NOT NULL,
    preview VARCHAR(255) NOT NULL,
    year_created YEAR NOT NULL,
    year_watching YEAR NOT NULL,
    country VARCHAR(255) NOT NULL,
    genre VARCHAR(255) NOT NULL,
    my_rating TINYINT NOT NULL,
    imdb_rating FLOAT(3,2) NOT NULL,
    duration SMALLINT NOT NULL,
    review LONGTEXT NOT NULL,
    status BOOLEAN NOT NULL
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;";

$PDO->exec($sql);
echo "Table movies_reviews has been created successfully.<br>";
