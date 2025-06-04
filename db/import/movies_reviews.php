<?php
global $PDO;

$PDO->exec("DELETE FROM movies_reviews;");
$PDO->exec("ALTER TABLE movies_reviews AUTO_INCREMENT = 1;");

$pagesTypes = include __DIR__ . '/../../config/page-types.php';

// Замените ID и gid на реальные значения
$id = '1wdBMioEvl9XYnOEMenn-ZPOI597B3OxKa9u6ZASGv6M';
$gid = '0';

$csv = file_get_contents('https://docs.google.com/spreadsheets/d/' . $id . '/export?format=csv&gid=' . $gid);
$csv = explode("\r\n", $csv);
$data = array_map('str_getcsv', $csv);

$isFirstLine = true;

$PDO->beginTransaction();

try {
    $sql = "
        INSERT INTO movies_reviews (
            movie_id, lang, movie, director, title, meta_description, h1,
            preview, year_created, year_watching, country, genre, my_rating, imdb_rating, duration,
            review, status
        ) VALUES (
            :movie_id, :lang, :movie, :director, :title, :meta_description, :h1,
            :preview, :year_created, :year_watching, :country, :genre, :by_rating, :imdb_rating, :duration,
            :review, :status
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

    foreach ($data as $row) {
        if ($isFirstLine) {
            $isFirstLine = false;
            continue;
        }

        $stmt->bindParam(':movie_id', $row[1]);
        $stmt->bindParam(':lang', $row[3]);
        $stmt->bindParam(':movie', $row[4]);
        $stmt->bindParam(':director', $row[5]);
        $stmt->bindParam(':title', $row[6]);
        $stmt->bindParam(':meta_description', $row[7]);
        $stmt->bindParam(':h1', $row[8]);
        $stmt->bindParam(':preview', $row[9]);
        $stmt->bindParam(':year_created', $row[10]);
        $stmt->bindParam(':year_watching', $row[11]);
        $stmt->bindParam(':country', $row[12]);
        $stmt->bindParam(':genre', $row[13]);
        $stmt->bindParam(':by_rating', $row[14]);
        $imdbRating = str_replace(',', '.', $row[15]);
        $stmt->bindParam(':imdb_rating', $imdbRating);
        $stmt->bindParam(':duration', $row[16]);
        $review = $row[17] ?? '';
        $stmt->bindParam(':review', $review);
        $stmt->bindParam(':status', $row[18]);

        $stmt->execute();

        $stmt2->bindParam(':url', $row[2]);
        $insertedId = $PDO->lastInsertId();
        $stmt2->bindParam(':section_id', $insertedId);
        $stmt2->bindParam(':section_type', $pagesTypes['MOVIE']);
        $stmt2->execute();
    }

    $PDO->commit();
    echo "Table movies_reviews has been imported successfully.<br>";
} catch (Exception $e) {
    $PDO->rollBack();
    echo "Ошибка: " . $e->getMessage();
}
