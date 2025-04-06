<?php
$PDO->exec("DELETE FROM my_books_grades;");
$PDO->exec("ALTER TABLE my_books_grades AUTO_INCREMENT = 1;");


$id = '1Gd-1MmrWCpeCZv2T7tdwgBUB8eUbJXRf99COVj2hcHE';
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
        INSERT INTO my_books_grades (
            book_id, review_text, grade, status 
        ) VALUES (
            :book_id, :review_text, :grade, :status 
        )
    ";
    $stmt = $PDO->prepare($sql);

    // Перебираем строки CSV
    foreach ($data as $row) {
        if ($isFirstLine) {
            $isFirstLine = false;
            continue;
        }

        // Привязываем параметры
        $stmt->bindParam(':book_id', $row[1]);
        $stmt->bindParam(':review_text', $row[2]);
        $stmt->bindParam(':grade', $row[3]);
        $stmt->bindParam(':status', $row[4]);

        // Выполняем запрос
        $stmt->execute();
    }

    // Подтверждаем транзакцию
    $PDO->commit();
    echo "Table my_books_grades has been imported successfully.<br>";
} catch (Exception $e) {
    // Если ошибка, откатываем транзакцию
    $PDO->rollBack();
    echo "Ошибка: " . $e->getMessage();
}