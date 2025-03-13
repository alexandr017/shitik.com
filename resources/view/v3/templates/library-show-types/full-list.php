<div class="books-list-wrap">
    <?php if(isset($books)) : ?>
        <?php foreach ($books as $book) : ?>
            <div class="books-list-inner" style="background: <?php echo $book['color']; ?>">
                <div class="book-list" data-label="<?php echo $book['title']; ?>">
                    <img loading="lazy" src="<?php echo $book['cover_image']; ?>" alt="<?php echo $book['title']; ?>">
                </div>
                <div class="book-info">
                    <h3><?php echo $book['title']; ?></h3>
                    <h4><?php echo $book['authors']; ?></h4>
                    <p>
                        Год издания: <?php echo $book['year_of_publishing']; ?><br>
                        Год прочтения: <?php echo $book['year_of_reading']; ?><br>
                        Издательство: <?php echo $book['publishing_house']; ?><br>
                        Мой рейтинг: <?php echo $book['my_rating']; ?><br>
                        Рейтинг автору: <?php echo $book['author_rating']; ?><br>
                        Количество прочтений: <?php echo $book['number_of_reads']; ?><br>
                        Количество страниц: <?php echo $book['total_pages']; ?><br>
                        Язык книги: <?php echo $book['language']; ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

</div>
