<script>
    window.successMessage = '<?php echo lang('comments.success-message'); ?>';
    window.errorMessage = '<?php echo lang('comments.error-message'); ?>';
    window.RECAPTCHA_SITE_KEY = '<?php echo getEnvValue('GOOGLE_CAPTCHA_PUBLIC'); ?>';
</script>

<div class="comments">
    <div class="show-comment-form-wrap">
        <button class="show-comment-form"><?php echo lang('comments.write-comment'); ?></button>
    </div>
    <form class="form" method="post" action="/comments/add">
        <input type="text" name="name" placeholder="<?php echo lang('comments.name'); ?>" required>
        <textarea name="comment" placeholder="<?php echo lang('comments.content'); ?>" required></textarea>
        <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
        <input type="hidden" name="lang" value="<?php echo getLocale(); ?>">
        <input type="hidden" name="entry_type" value="<?php echo $entryType; ?>">
        <input type="hidden" name="entry_id" value="<?php echo $entryId; ?>">
        <div class="button-wrap">
            <button class="button" type="submit"><?php echo lang('comments.send'); ?></button>
        </div>
    </form>
    <?php if(count($comments) > 0) { ?>
        <div class="h3"><?php echo lang('comments.comments'); ?></div>
    <?php foreach ($comments as $comment) { ?>
        <div class="comment">
            <div class="name"><?php echo $comment['name']; ?></div>
            <div class="content"><?php echo $comment['comment']; ?></div>
            <div class="date"><?php echo getDateByLang($comment['created_at'], getLocale()); ?></div>
        </div>
    <?php } ?>
    <?php } ?>
</div>
<script async src="/themes/v3/js/comments.js"></script>