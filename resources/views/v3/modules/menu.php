<?php $url = preg_replace('/^\//', '', $_SERVER['PATH_INFO']); ?>
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
            <?php if($url == getLocale() . '/travels') : ?>
                <li class="menu-li active"><span class="icon icon-travel"></span><?php echo lang('menu.travels') ?></li>
            <?php else : ?>
                <li class="menu-li"><a href="/<?php echo getLocale() ?>/travels" class="menu-a <?php if($url == getLocale() . '/travels') echo 'active'?>"><span class="icon icon-travel"></span><?php echo lang('menu.travels') ?></a></li>
            <?php endif; ?>
            <?php if($url == getLocale() . '/library' || str_contains($url, '/library/')) : ?>
                <li class="menu-li active"><span class="icon icon-library"></span><?php echo lang('menu.library') ?></li>
            <?php else : ?>
                <li class="menu-li"><a href="/<?php echo getLocale() ?>/library" class="menu-a <?php if($url == getLocale() . '/library') echo 'active'?>"><span class="icon icon-library"></span><?php echo lang('menu.library') ?></a></li>
            <?php endif; ?>
            <?php if($url == getLocale() . '/stats') : ?>
                <li class="menu-li active"><span class="icon icon-stats"></span><?php echo lang('menu.stats') ?></li>
            <?php else : ?>
                <li class="menu-li"><a href="/<?php echo getLocale() ?>/stats" class="menu-a <?php if($url == getLocale() . '/stats') echo 'active'?>"><span class="icon icon-stats"></span><?php echo lang('menu.stats') ?></a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>