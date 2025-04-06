<div class="grid">
    <?php if(isset($books)) : ?>
        <?php foreach ($books as $book) : ?>
            <div class="book book-list" style="background: <?php echo $book['color']; ?>" data-id="<?php echo $book['id']; ?>">
                <div class="book-list" data-label="<?php echo $book['book']; ?>">
                    <img loading="lazy" src="<?php echo $book['cover_small_image']; ?>" alt="<?php echo $book['book']; ?>">
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>