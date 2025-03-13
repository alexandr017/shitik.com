<?php

namespace app\Controllers\Dynamics;

use function Controllers\Dynamics\renderPage;

final class BookReviewsController implements DynamicsInterface
{

    final public function render(int $id)
    {
        return renderPage('static-pages.php', ['id' => $id]);
    }
}