<div class="grid">
    <?php if(isset($movies)) : ?>
        <?php foreach ($movies as $movie) : ?>
            <div class="book book-list" data-id="<?php echo $movie['id']; ?>">
                <div class="book-list" data-label="<?php echo $movie['movie']; ?>">
                    <img loading="lazy" src="<?php echo $movie['preview']; ?>" alt="<?php echo $movie['movie']; ?>">
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>