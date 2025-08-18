<img src="/themes/v3/images/up-arrow.svg" alt="Вверх" id="toTopButton">

<aside id="mobileSocialMedia"></aside>

<footer>
    <div class="container">
        <div class="footer-inner">
            <div class="footer-links-wrap">
                <?php echo lang('footer.first-text-line'); ?>
            </div>
            <div class="footer-social-wrap">
                <?php echo lang('footer.second-text-line'); ?>
            </div>
            <div class="copyright-wrap">
                <a href="/ru/sitemap"><?php echo lang('menu.sitemap') ?></a>
                <div class="copyright">© 2019 - <?php echo date('Y'); ?> shitik.com</div>
            </div>
            <div class="links-wrap">
                <a href="https://t.me/shitikcom" rel="noopener nofollow" target="_blank"><img width="40" height="40" src="/images/icons/telegram-2.png" alt="telegram icon"></a>
                <a href="https://www.facebook.com/groups/1634020277998483" rel="noopener nofollow" target="_blank"><img width="40" height="40" src="/images/icons/facebook-2.png" alt="facebook icon"></a>
                <a href="https://www.whatsapp.com/channel/0029VbBOueF2Jl8BBbawQS15" rel="noopener nofollow" target="_blank"><img width="40" height="40" src="/images/icons/whatsapp-2.png" alt="whatsapp icon"></a>
            </div>
        </div>
    </div>
</footer>

<?php $data = [];
if (isset($post)) {
    $data['post'] = $post;
}
if (isset($posts)) {
    $data['posts'] = $posts;
}
if (isset($page)) {
    $data['page'] = $page;
}
?>

<?php renderView('v3/modules/micro-data.php', $data); ?>
<script>
    document.getElementsByClassName('mob-menu-label')[0].addEventListener('click', function () {
        document.getElementsByClassName('menu-ul')[0].classList.toggle('show');
    });

    document.getElementById('toTopButton').onclick = function () {
        window.scrollTo(0, 0);
    };

    window.onscroll = function() {
        if (window.pageYOffset != 0) {
            document.getElementById('toTopButton').style.display = 'inline-block';
        } else {
            document.getElementById('toTopButton').style.display = 'none';
        }
    };

    window.addEventListener("scroll", () => {
        if (this.scrollY != 0) {
            document.getElementById('toTopButton').style.display = 'inline-block';
        } else {
            document.getElementById('toTopButton').style.display = 'none';
        }
    });

</script>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const socialMedia = document.getElementById("socialMedia");
            const mobileContainer = document.getElementById("mobileSocialMedia");
            if (!socialMedia || !mobileContainer) {
                return;
            }
            const originalParent = socialMedia.parentNode;

            function moveSocialMedia() {
                if (window.innerWidth <= 1023) {
                    if (!mobileContainer.contains(socialMedia)) {
                        mobileContainer.appendChild(socialMedia);
                    }
                } else {
                    if (!originalParent.contains(socialMedia)) {
                        originalParent.appendChild(socialMedia);
                    }
                }
            }

            moveSocialMedia();

            window.addEventListener("resize", moveSocialMedia);
    });
</script>
