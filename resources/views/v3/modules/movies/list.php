<?php if(isset($movies) && count($movies)) : ?>
<div class="movies-list">
    <?php foreach ($movies as $movie) : ?>
        <?php echo renderView('v3/modules/movies/_info.php', ['movie' => $movie]); ?>
    <?php endforeach; ?>
</div>
<?php endif; ?>
