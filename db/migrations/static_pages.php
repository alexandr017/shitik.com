<?php

global $PDO;

$sql = "CREATE TABLE IF NOT EXISTS static_pages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    template VARCHAR(50),
    lang CHAR(2) NOT NULL,
    title VARCHAR(255) NOT NULL,
    meta_description VARCHAR(500),
    h1 VARCHAR(255),
    lead_text TEXT DEFAULT NULL,
    content TEXT,
    status TINYINT(1) NOT NULL DEFAULT 1
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;";

$PDO->exec($sql);

echo "Table static_pages has been created successfully.<br>";