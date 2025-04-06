<?php if (isset($book)) : ?>
<div class="book">
    <div class="cover-wrap">
        <img loading="lazy" src="<?php echo $book->cover_big_image; ?>" alt="<?php echo $book->book; ?>">
    </div>

    <?php [$text, $class] = getTextGradeForBook($book->grade);  ?>
    <div class="book-info">
        <div class="h4 authors"><?php echo $book->authors; ?></div>

        <div class="book-label"><span class="book-label-title icon i-write"><?php echo lang('library.categories') ?>:</span> <?php echo $book->categories; ?></div>

        <div class="book-label"><span class="book-label-title icon i-write"><?php echo lang('library.year-of-publishing') ?>:</span> <?php echo $book->year_of_publishing; ?></div>
        <div class="book-label"><span class="book-label-title icon i-calendar"><?php echo lang('library.year-of-reading') ?>:</span> <?php echo $book->year_of_reading; ?></div>
        <div class="book-label"><span class="book-label-title icon i-rating"><?php echo lang('library.my-rating') ?>:</span> <span class="b-label <?php echo $class ?>"><?php echo $text ?></span></div>
        <div class="book-label"><span class="book-label-title icon i-read"><?php echo lang('library.number-of-reads') ?>:</span> <?php echo $book->number_of_reads; ?></div>
        <div class="book-label"><span class="book-label-title icon i-pages"><?php echo lang('library.total-pages') ?>:</span> <?php echo $book->total_pages; ?></div>
        <div class="book-label"><span class="book-label-title icon i-summary"><?php echo lang('library.pages-of-summary') ?>:</span> <?php echo $book->pages_of_summary; ?></div>
        <div class="book-label"><span class="book-label-title icon i-summary"><?php echo lang('library.native-lang') ?>:</span>
            <?php $otherLang = []; ?>
            <?php foreach ($books as $_book) : ?>
                <?php if ($_book['is_native_lang']) : ?>
                    <?php echo lang('library.languages.' . $_book['lang']) ?>
                <?php endif; ?>
                <?php if ($_book['is_book_exist'] && !$_book['is_native_lang']) : ?>
                    <?php $otherLang[] = lang('library.languages.' . $_book['lang']) ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <div class="book-label"><span class="book-label-title icon i-summary"><?php echo lang('library.other-languages') ?>:</span> <?php if (count($otherLang)) echo implode(', ', $otherLang); else echo lang('library.none-other-lang'); ?></div>
    </div>
</div>
<?php endif; ?>