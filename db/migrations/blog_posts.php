<?php
global $PDO;

$sql = "CREATE TABLE IF NOT EXISTS blog_posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    lang CHAR(2) NOT NULL,
    title VARCHAR(255) NOT NULL,
    meta_description VARCHAR(500),
    h1 VARCHAR(255),
    preview VARCHAR(255),
    h1_on_blog_page VARCHAR(255) DEFAULT NULL,
    text_on_blog_page VARCHAR(500) DEFAULT NULL,
    lead_text TEXT DEFAULT NULL,
    content TEXT,
    modules VARCHAR(255) DEFAULT NULL,
    status TINYINT(1) NOT NULL DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;";

$PDO->exec($sql);
echo "Table blog_posts has been created successfully.<br>";
