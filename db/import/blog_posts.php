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
            lang, title, meta_description, h1, preview, h1_on_blog_page, 
            text_on_blog_page, lead_text, content, modules, status, created_at, updated_at
        ) VALUES (
            :lang, :title, :meta_description, :h1, :preview, :h1_on_blog_page, 
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
        $stmt->bindParam(':lang', $row[1]);
        $stmt->bindParam(':title', $row[3]);
        $stmt->bindParam(':meta_description', $row[4]);
        $stmt->bindParam(':h1', $row[5]);
        $stmt->bindParam(':preview', $row[6]);
        $emptyStrToNull = emptyStrToNull($row[7]);
        $stmt->bindParam(':h1_on_blog_page', $emptyStrToNull);
        $emptyStrToNull1 = emptyStrToNull($row[8]);
        $stmt->bindParam(':text_on_blog_page', $emptyStrToNull1);
        $emptyStrToNull2 = emptyStrToNull($row[9]);
        $stmt->bindParam(':lead_text', $emptyStrToNull2);
        $stmt->bindParam(':content', $row[10]);
        $emptyStrToNull3 = emptyStrToNull($row[11]);
        $stmt->bindParam(':modules', $emptyStrToNull3);
        $stmt->bindParam(':status', $row[12]);
        $stmt->bindParam(':created_at', $row[13]);
        $stmt->bindParam(':updated_at', $row[14]);

        // Выполняем запрос
        $stmt->execute();

        // Привязываем параметры
        $stmt2->bindParam(':url', $row[2]);
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

