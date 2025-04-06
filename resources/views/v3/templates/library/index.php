<?php
$title = $page['title'];
$metaDescription = $page['meta_description'];
includeCSS(['modules/general', 'modules/fonts', 'modules/header', 'modules/breadcrumb', 'modules/content', 'modules/sidebar', 'modules/footer',
    'modules/library/library', 'modules/modal', 'modules/library/library-shelf', 'modules/library/library-list', 'modules/library/library-grid']);

echo renderView('v3/modules/head.php', compact('title', 'metaDescription'));
?>
<body>
<?php echo renderView('v3/modules/menu.php'); ?>
<main class="container">
    <ul class="breadcrumb">
        <li><a href="/<?php echo getLocale(); ?>"><?php echo lang('breadcrumb.index'); ?></a></li>
        <li class="active"><?php echo lang('breadcrumb.library'); ?></li>
    </ul>

    <h1><?php echo $page['h1'] ?></h1>

    <div class="content">
        <?php echo $page['lead_text'] ?>
    </div>

    <div class="display-icon-wrap">
        <span class="display-icon active" data-display="list">
            <img src="/images/icons/library/list.png" alt="list icon" width="32" height="32">
        </span>
        <span class="display-icon" data-display="shelf">
            <img src="/images/icons/library/books-shelf.png" alt="books shelf icon" width="32" height="32">
        </span>
        <span class="display-icon" data-display="grid">
            <img src="/images/icons/library/grid.png" alt="grid icon" width="32" height="32">
        </span>
        <span class="display-icon" data-display="remove">
            <img src="/images/icons/library/remove.png" alt="remove icon" width="32" height="32">
        </span>
    </div>

    <div id="library">
        <?php
        if (file_exists(DOCUMENT_ROOT . '/resources/views/v3/modules/library/list.php')) {
            include DOCUMENT_ROOT . '/resources/views/v3/modules/library/list.php';
        }
        ?>
    </div>

    <div class="content">
        <?php echo $page['content'] ?>
    </div>

    <div class="js-overlay-modal overlay"></div>
    <div class="modal" data-modal="1">
        <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
        <div class="modal__title"></div>
        <div class="modal__body">
            <div class="books-list modal-book-info"></div>
        </div>
    </div>

<script defer src="/themes/v3/js/modal.js"></script>
<script>
    window.BOOK_STATE = [];
    window.LANG = '<?php echo getLocale(); ?>';
</script>
<script defer src="/themes/v3/js/library.js"></script>



</main>
<?php echo renderView('v3/modules/footer.php'); ?>
<?php echo renderView('v3/modules/js-scripts.php'); ?>
</body>
</html>


