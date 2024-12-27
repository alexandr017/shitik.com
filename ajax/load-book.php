<?php

$id = (int) $_POST['id'];

$books = include '../data/books.php';

// todo для алгоритмической сложноти O(1) положить айдишники в ключи.
foreach ($books as $book) {
    if ($book['id'] == $id) {
        echo json_encode($book);
        exit;
    }
}

echo json_encode([]);