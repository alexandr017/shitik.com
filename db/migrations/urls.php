<?php

global $PDO;

$sql = "CREATE TABLE IF NOT EXISTS urls (
    id INT AUTO_INCREMENT PRIMARY KEY,
    url VARCHAR(255) NOT NULL UNIQUE,
    section_id INT UNSIGNED NOT NULL,
    section_type INT UNSIGNED NOT NULL
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;";

$PDO->exec($sql);

echo "Table urls has been created successfully.<br>";
