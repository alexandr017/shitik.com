<?php if (isset($movie)) : ?>
    <div class="movie">
        <div class="cover-wrap">
            <img loading="lazy" src="<?php echo $movie->preview; ?>" alt="<?php echo $movie->movie; ?>">
        </div>

        <?php [$text, $class] = getTextGradeForBook($movie->my_rating);  ?>
        <div class="book-info">
            <div class="h4 authors"><?php echo $movie->director; ?></div>

            <div class="movie-label"><span class="movie-label-title icon i-genre"><?php echo lang('movies.genre') ?>:</span> <?php echo $movie->genre; ?></div>
            <div class="movie-label"><span class="movie-label-title icon i-country"><?php echo lang('movies.country') ?>:</span> <?php echo $movie->country; ?></div>
            <div class="movie-label"><span class="movie-label-title icon i-year-created"><?php echo lang('movies.year-created') ?>:</span> <?php echo $movie->year_created; ?></div>
            <div class="movie-label"><span class="movie-label-title icon i-year-watching"><?php echo lang('movies.year-watching') ?>:</span> <?php echo $movie->year_watching; ?></div>
            <div class="movie-label"><span class="movie-label-title icon i-my-rating"><?php echo lang('movies.my-rating') ?>:</span> <span class="b-label <?php echo $class ?>"><?php echo $text ?></span></div>
            <div class="movie-label"><span class="movie-label-title icon i-imdb-rating"><?php echo lang('movies.imdb-rating') ?>:</span> <?php echo $movie->imdb_rating; ?>/10</div>
            <div class="movie-label"><span class="movie-label-title icon i-duration"><?php echo lang('movies.duration') ?>:</span> <?php echo $movie->duration; ?> <?php echo lang('movies.min') ?></div>
        </div>
    </div>
<?php endif; ?>