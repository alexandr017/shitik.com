<?php

namespace app\Controllers\Dynamics;

use app\Repositories\CommentRepository;
use App\Repositories\LibraryRepository;

final class BookReviewsController implements DynamicsInterface
{

    final public function render(int $id)
    {
        $book = (new LibraryRepository)->getEnableBookById($id, getLocale());
        if (!$book) {
            abort(404);
        }

        $book = (object) $book;

        $books = (new LibraryRepository)->getAllBooksByIDWithLang($book->book_id);
        $alternates = [];
        foreach ($books as $_book) {
            if ($_book['id'] !== $id) {
                $alternates [] = (object) [
                    'url' => $_book['url'],
                    'lang' => $_book['lang']
                ];
            }
        }

        $comments = (new CommentRepository())->getActiveCommentsByEntity(TYPE_PAGES['BOOK'], $id);

        echo renderView('v3/templates/library/book.php', compact('book',  'books', 'alternates', 'comments'));
    }
}