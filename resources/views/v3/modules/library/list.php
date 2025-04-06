<?php if(isset($books) && count($books)) : ?>
<div class="books-list">
    <?php foreach ($books as $book) : ?>
        <?php echo renderView('v3/modules/library/_info.php', ['book' => $book]); ?>
    <?php endforeach; ?>
</div>
<?php endif; ?>
