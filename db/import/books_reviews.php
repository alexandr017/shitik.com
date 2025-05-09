<?php
global $PDO;;
$PDO->exec("DELETE FROM books_reviews;");
$PDO->exec("ALTER TABLE books_reviews AUTO_INCREMENT = 1;");

$pagesTypes = include __DIR__ . '/../../config/page-types.php';

$id = '1a5lyKgyhFV_m-5jlCswVSIPqmcCbYt05LJZulUtdkOI';
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
        INSERT INTO books_reviews (
            book_id, lang, book, authors, title, meta_description, h1, is_native_lang, is_book_exist,
            grade, categories, cover_big_image, cover_small_image, year_of_publishing,
            year_of_reading, number_of_reads, total_pages, pages_of_summary, review,
            is_unique_review, color, is_isset_page, status
        ) VALUES (
            :book_id, :lang, :book, :authors, :title, :meta_description, :h1, :is_native_lang, :is_book_exist,
            :grade, :categories, :cover_big_image, :cover_small_image, :year_of_publishing,
            :year_of_reading, :number_of_reads, :total_pages, :pages_of_summary, :review,
            :is_unique_review, :color, :is_isset_page, :status
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
        $stmt->bindParam(':book_id', $row[1]);
        $stmt->bindParam(':lang', $row[3]);
        $stmt->bindParam(':book', $row[4]);
        $stmt->bindParam(':authors', $row[5]);
        $stmt->bindParam(':title', $row[6]);
        $stmt->bindParam(':meta_description', $row[7]);
        $stmt->bindParam(':h1', $row[8]);
        $stmt->bindParam(':is_native_lang', $row[9]);
        $stmt->bindParam(':is_book_exist', $row[10]);
        $stmt->bindParam(':grade', $row[11]);
        $stmt->bindParam(':categories', $row[12]);
        $stmt->bindParam(':cover_big_image', $row[13]);
        $stmt->bindParam(':cover_small_image', $row[14]);
        $stmt->bindParam(':year_of_publishing', $row[15]);
        $stmt->bindParam(':year_of_reading', $row[16]);
        $stmt->bindParam(':number_of_reads', $row[17]);
        $stmt->bindParam(':total_pages', $row[18]);
        $stmt->bindParam(':pages_of_summary', $row[19]);
        $review = $row[20] ?? '';
        $stmt->bindParam(':review', $review);
        $stmt->bindParam(':is_unique_review', $row[21]);
        $color = trim($row[22]);
        $stmt->bindParam(':color', $color);
        $stmt->bindParam(':is_isset_page', $row[23]);
        $stmt->bindParam(':status', $row[24]);



        // Выполняем запрос
        $stmt->execute();

        // Привязываем параметры
        $stmt2->bindParam(':url', $row[2]);
        $insertedId = $PDO->lastInsertId();
        $stmt2->bindParam(':section_id', $insertedId);
        $stmt2->bindParam(':section_type', $pagesTypes['BOOK']);

         //Выполняем запрос
        $stmt2->execute();
    }

    // Подтверждаем транзакцию
    $PDO->commit();
    echo "Table books_reviews has been imported successfully.<br>";
} catch (Exception $e) {
    // Если ошибка, откатываем транзакцию
    $PDO->rollBack();
    echo "Ошибка: " . $e->getMessage();
}
