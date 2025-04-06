<?php
$PDO->exec("DELETE FROM static_pages;");
$PDO->exec("ALTER TABLE static_pages AUTO_INCREMENT = 1;");

$pagesTypes = include __DIR__ . '/../../config/page-types.php';


$id = '1_R_vnxAIWn0BOWtDUYBKmCzcppeGO-RVdjCp20RDHQQ';
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
        INSERT INTO static_pages (
            template, lang, title, meta_description, h1, lead_text, content, status
        ) VALUES (
            :template,:lang, :title, :meta_description, :h1, :lead_text, :content, :status
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
        $stmt->bindParam(':template', $row[1]);
        $stmt->bindParam(':lang', $row[2]);
        $stmt->bindParam(':title', $row[4]);
        $stmt->bindParam(':meta_description', $row[5]);
        $stmt->bindParam(':h1', $row[6]);
        $emptyStrToNull = emptyStrToNull($row[7]);
        $stmt->bindParam(':lead_text', $emptyStrToNull);
        $emptyStrToNull1 = emptyStrToNull($row[8]);
        $stmt->bindParam(':content', $emptyStrToNull1);
        $stmt->bindParam(':status', $row[9]);

        // Выполняем запрос
        $stmt->execute();

        // Привязываем параметры
        $stmt2->bindParam(':url', $row[3]);
        $insertedId = $PDO->lastInsertId();
        $stmt2->bindParam(':section_id', $insertedId);
        $stmt2->bindParam(':section_type', $pagesTypes['PAGE']);

        // Выполняем запрос
        $stmt2->execute();
    }

    // Подтверждаем транзакцию
    $PDO->commit();
    echo "Table static_pages has been imported successfully.<br>";
} catch (Exception $e) {
    // Если ошибка, откатываем транзакцию
    $PDO->rollBack();
    echo "Ошибка: " . $e->getMessage();
}