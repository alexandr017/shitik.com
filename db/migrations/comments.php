<?php
global $PDO;

$sql = "CREATE TABLE IF NOT EXISTS comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    lang VARCHAR(2) NOT NULL,
    entry_type TINYINT UNSIGNED NOT NULL,
    entry_id INT UNSIGNED NOT NULL,
    name VARCHAR(255) NOT NULL,
    comment LONGTEXT NOT NULL,
    status TINYINT UNSIGNED NOT NULL DEFAULT 0,
    created_at DATETIME NOT NULL
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;";


$PDO->exec($sql);
echo "Table comments has been created successfully.<br>";