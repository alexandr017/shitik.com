<?php
global $PDO;

$bookID = 1;

$sql = "SELECT * FROM my_books_grades WHERE book_id = :book_id and status = 0 ORDER BY RAND() LIMIT 1";

$query = $PDO->prepare($sql);
$query->execute(['book_id' => $bookID]);
$result = $query->fetch(PDO::FETCH_ASSOC);

if (!$result) {
    exit();
}

// у текущей записи обновляем статус = 1
$sql = "UPDATE my_books_grades SET status = 1 WHERE id = :id";
$query = $PDO->prepare($sql);
$query->execute(['id' => $result['id']]);

echo '<div class="box">';
echo '<p>ОЦЕНКА:<br> <b>' . $result['grade'] . '</b></p>';

echo '<p>ОТЗЫВ: <br><b id="review">' . $result['review_text'] . '</b></p>';
echo '</div>';
?>
<button id="copyText">Копировать</button>
<br><i>Функиция копирования работает только если вы <br>разрешили использовать буфер обмена вашему браузеру</i>
<script>
    document.getElementById('copyText').addEventListener('click', function () {
        copyToClipboard(document.getElementById('review').innerText);
    });
    function copyToClipboard(text) {
        navigator.clipboard.writeText(text)
            .then(() => {
                console.log('Текст успешно скопирован в буфер обмена!');
            })
            .catch(err => {
            });
    }
</script>
<style>
    .box {
        background: #bef280;
        padding: 15px;
        margin: 0 0 15px;
        line-height: 1.8em;
        border-radius: 9px;
        border: 2px solid #8BC34A;
    }
</style>
