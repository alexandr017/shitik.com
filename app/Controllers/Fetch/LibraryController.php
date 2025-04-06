<?php

namespace app\Controllers\Fetch;

use App\Repositories\LibraryRepository;

final class LibraryController
{

    final public function loadBook()
    {
        global $PDO;
        if (isset($_POST) && isset($_POST['id']) && isset($_POST['lang'])) {
            $id = (int) $_POST['id'];
            $lang = clearData($_POST['lang']);

            $book = (new LibraryRepository)->getEnableBookById($id, $lang);

            echo renderView('v3/modules/library/_info.php', ['book' => $book]);
            return '';
        }

        abort(404);
    }

    final public function display()
    {
        $display = $_POST['display'] ?? 'list';
        $books = (new LibraryRepository)->getAllEnableBooks(getLocale(), 'DESC');

        $code = match ($display) {
            'list' => renderView('v3/modules/library/list.php', ['books' => $books]),
            'shelf' => renderView('v3/modules/library/shelf.php', ['books' => $books]),
            'grid' => renderView('v3/modules/library/grid.php', ['books' => $books]),
            'remove' => '',
            default => 'nice try',
        };

        echo $code;
        return '';
    }
}