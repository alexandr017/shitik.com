<?php
$PDO->exec("DELETE FROM blog_posts;");
$PDO->exec("ALTER TABLE blog_posts AUTO_INCREMENT = 1;");

$pagesTypes = include __DIR__ . '/../../config/page-types.php';

$id = '1oY1qub8eJ8o21s3UV2D4bScCSWzkENk1j9KDpEuVfQ8';
$gid = '0';

$csv = file_get_contents('https://docs.google.com/spreadsheets/d/' . $id . '/export?format=csv&gid=' . $gid);
$csv = explode("\r\n", $csv);
$data = array_map('str_getcsv', $csv);

$isFirstLine = true;

// Начинаем транзакцию
$PDO->beginTransaction();

try {
    // Подготовка SQL запроса
    $sql = "
        INSERT INTO blog_posts (
            post_id, lang, title, meta_description, h1, preview, h1_on_blog_page, 
            text_on_blog_page, lead_text, content, modules, status, created_at, updated_at
        ) VALUES (
            :post_id, :lang, :title, :meta_description, :h1, :preview, :h1_on_blog_page, 
            :text_on_blog_page, :lead_text, :content, :modules, :status, :created_at, :updated_at
        )
    ";
    $stmt = $PDO->prepare($sql);

    $sql2 = "
        INSERT INTO urls (
            url, section_id, section_type
        ) VALUES (
            :url, :section_id, :section_type
        )
    ";
    $stmt2 = $PDO->prepare($sql2);

    // Перебираем строки CSV
    foreach ($data as $row) {
        if ($isFirstLine) {
            $isFirstLine = false;
            continue;
        }

        // Привязываем параметры
        $stmt->bindParam(':post_id', $row[1]);
        $stmt->bindParam(':lang', $row[2]);
        $stmt->bindParam(':title', $row[4]);
        $stmt->bindParam(':meta_description', $row[5]);
        $stmt->bindParam(':h1', $row[6]);
        $stmt->bindParam(':preview', $row[7]);
        $emptyStrToNull = emptyStrToNull($row[8]);
        $stmt->bindParam(':h1_on_blog_page', $emptyStrToNull);
        $emptyStrToNull1 = emptyStrToNull($row[9]);
        $stmt->bindParam(':text_on_blog_page', $emptyStrToNull1);
        $emptyStrToNull2 = emptyStrToNull($row[10]);
        $stmt->bindParam(':lead_text', $emptyStrToNull2);
        $stmt->bindParam(':content', $row[11]);
        $emptyStrToNull3 = emptyStrToNull($row[12]);
        $stmt->bindParam(':modules', $emptyStrToNull3);
        $stmt->bindParam(':status', $row[13]);
        $stmt->bindParam(':created_at', $row[14]);
        $stmt->bindParam(':updated_at', $row[15]);

        // Выполняем запрос
        $stmt->execute();

        // Привязываем параметры
        $stmt2->bindParam(':url', $row[3]);
        $insertedId = $PDO->lastInsertId();
        $stmt2->bindParam(':section_id', $insertedId);
        $stmt2->bindParam(':section_type', $pagesTypes['POST']);

        // Выполняем запрос
        $stmt2->execute();
    }

    // Подтверждаем транзакцию
    $PDO->commit();
    echo "Table blog_posts has been imported successfully.<br>";
} catch (Exception $e) {
    // Если ошибка, откатываем транзакцию
    $PDO->rollBack();
    echo "Ошибка: " . $e->getMessage();
}

