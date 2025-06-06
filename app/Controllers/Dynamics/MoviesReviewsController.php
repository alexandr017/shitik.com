<?php

namespace app\Controllers\Dynamics;

use App\Repositories\MoviesRepository;

class MoviesReviewsController
{
    final public function render(int $id)
    {
        $movie = (new MoviesRepository)->getEnableMovieById($id, getLocale());
        if (!$movie) {
            abort(404);
        }

        $movie = (object) $movie;

        $movies = (new MoviesRepository)->getAllMoviesByIDWithLang($movie->movie_id);
        $alternates = [];
        foreach ($movies as $_movie) {
            if ($_movie['id'] !== $id) {
                $alternates [] = (object) [
                    'url' => $_movie['url'],
                    'lang' => $_movie['lang']
                ];
            }
        }

        echo renderView('v3/templates/movies/movie.php', ['movie' => $movie, 'movies' => $movies, 'alternates' => $alternates]);
    }
}