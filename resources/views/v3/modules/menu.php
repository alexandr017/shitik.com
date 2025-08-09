<?php $url = preg_replace('/^\//', '', $_SERVER['REQUEST_URI']); ?>
<nav class="menu">
    <span class="mob-menu-label"><?php echo lang('menu.menu') ?></span>
    <div class="container">
        <ul class="menu-ul">
            <li class="menu-li link-to-home"><a href="/<?php echo getLocale() ?>" class="menu-a"><span class="first-word">Shitik</span>.com</a></li>

            <?php if($url == getLocale() . '/alexandr-andreevich') : ?>
                <li class="menu-li active"><span class="icon icon-man"></span><?php echo lang('menu.about') ?></li>
            <?php else : ?>
                <li class="menu-li"><a href="/<?php echo getLocale() ?>/alexandr-andreevich" class="menu-a <?php if($url == getLocale() . '/alexandr-andreevich') echo 'active'?>"><span class="icon icon-man"></span><?php echo lang('menu.about') ?></a></li>
            <?php endif; ?>

            <?php if($url == getLocale() . '/blog' || str_contains($url, '/blog/')) : ?>
                <li class="menu-li active"><span class="icon icon-blog"></span><?php echo lang('menu.blog') ?></li>
            <?php else : ?>
                <li class="menu-li"><a href="/<?php echo getLocale() ?>/blog" class="menu-a <?php if($url == getLocale() . '/blog') echo 'active'?>"><span class="icon icon-blog"></span><?php echo lang('menu.blog') ?></a></li>
            <?php endif; ?>

            <?php if($url == getLocale() . '/library' || str_contains($url, '/library/')) : ?>
                <li class="menu-li active"><span class="icon icon-library"></span><?php echo lang('menu.library') ?></li>
            <?php else : ?>
                <li class="menu-li"><a href="/<?php echo getLocale() ?>/library" class="menu-a <?php if($url == getLocale() . '/library') echo 'active'?>"><span class="icon icon-library"></span><?php echo lang('menu.library') ?></a></li>
            <?php endif; ?>

            <?php if($url == getLocale() . '/movies' || str_contains($url, '/movies/')) : ?>
                <li class="menu-li active"><span class="icon icon-library"></span><?php echo lang('menu.movies') ?></li>
            <?php else : ?>
                <li class="menu-li"><a href="/<?php echo getLocale() ?>/movies" class="menu-a <?php if($url == getLocale() . '/movies') echo 'active'?>"><span class="icon icon-movies"></span><?php echo lang('menu.movies') ?></a></li>
            <?php endif; ?>

            <?php if($url == getLocale() . '/my-books' || str_contains($url, '/my-books/')) : ?>
                <li class="menu-li active"><span class="icon icon-my-books"></span><?php echo lang('menu.my-books') ?></li>
            <?php else : ?>
                <li class="menu-li"><a href="/<?php echo getLocale() ?>/my-books" class="menu-a <?php if($url == getLocale() . '/my-books') echo 'active'?>"><span class="icon icon-my-books"></span><?php echo lang('menu.my-books') ?></a></li>
            <?php endif; ?>

            <?php if($url == getLocale() . '/travels') : ?>
                <li class="menu-li active"><span class="icon icon-travel"></span><?php echo lang('menu.travels') ?></li>
            <?php else : ?>
                <li class="menu-li"><a href="/<?php echo getLocale() ?>/travels" class="menu-a <?php if($url == getLocale() . '/travels') echo 'active'?>"><span class="icon icon-travel"></span><?php echo lang('menu.travels') ?></a></li>
            <?php endif; ?>

            <?php if($url == getLocale() . '/stats') : ?>
                <li class="menu-li active"><span class="icon icon-stats"></span><?php echo lang('menu.stats') ?></li>
            <?php else : ?>
                <li class="menu-li"><a href="/<?php echo getLocale() ?>/stats" class="menu-a <?php if($url == getLocale() . '/stats') echo 'active'?>"><span class="icon icon-stats"></span><?php echo lang('menu.stats') ?></a></li>
            <?php endif; ?>

            <?php if($url == getLocale() . '/about-project') : ?>
                <li class="menu-li active"><span class="icon icon-man"></span><?php echo lang('menu.about-project') ?></li>
            <?php else : ?>
                <li class="menu-li"><a href="/<?php echo getLocale() ?>/about-project" class="menu-a <?php if($url == getLocale() . '/about-project') echo 'active'?>"><span class="icon icon-man"></span><?php echo lang('menu.about-project') ?></a></li>
            <?php endif; ?>

        </ul>
    </div>
</nav>