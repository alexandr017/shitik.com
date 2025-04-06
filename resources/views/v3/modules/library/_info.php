<?php if(isset($book)) : ?>
<?php [$text, $class] = getTextGradeForBook($book['grade']);  ?>
<div class="book <?php if($book['is_isset_page']) : ?> is-isset-page<?php endif; ?>">
    <div class="cover-wrap">
        <img loading="lazy" src="<?php echo $book['cover_small_image']; ?>" alt="<?php echo $book['book']; ?>">
    </div>
    <div class="book-info">
        <?php if($book['is_isset_page']) : ?>
        <a class="h2" href="/<?php echo $book['url']; ?>"><?php echo $book['book']; ?></a>
        <?php else : ?>
        <div class="h2"><?php echo $book['book']; ?></div>
        <?php endif; ?>
        <div class="h4 authors"><?php echo $book['authors']; ?></div>
        <div class="book-label"><span class="book-label-title icon i-write"><?php echo lang('library.year-of-publishing') ?>:</span> <?php echo $book['year_of_publishing']; ?></div>
        <div class="book-label"><span class="book-label-title icon i-calendar"><?php echo lang('library.year-of-reading') ?>:</span> <?php echo $book['year_of_reading']; ?></div>
        <div class="book-label"><span class="book-label-title icon i-rating"><?php echo lang('library.my-rating') ?>:</span> <span class="b-label <?php echo $class ?>"><?php echo $text ?></span></div>
        <div class="book-label"><span class="book-label-title icon i-read"><?php echo lang('library.number-of-reads') ?>:</span> <?php echo $book['number_of_reads']; ?></div>
        <div class="book-label"><span class="book-label-title icon i-pages"><?php echo lang('library.total-pages') ?>:</span> <?php echo $book['total_pages']; ?></div>
        <div class="book-label"><span class="book-label-title icon i-summary"><?php echo lang('library.pages-of-summary') ?>:</span> <?php echo $book['pages_of_summary']; ?></div>
        <?php if($book['is_isset_page']) : ?>
            <div class="book-label"><span class="link"><?php echo lang('library.read-more') ?></span></div>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>