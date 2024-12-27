<?php $url = preg_replace('/^\//', '', $_SERVER['PATH_INFO']); ?>
<nav class="menu">
    <span class="mob-menu-label">Меню</span>
    <div class="container">
        <ul class="menu-ul">
            <li class="menu-li link-to-home"><a href="/ru" class="menu-a"><span class="first-word">Shitik</span>.by</a></li>
            <?php if($url == 'alexandr-andreevich') : ?>
                <li class="menu-li active"><span class="icon icon-man"></span>О себе</li>
            <?php else : ?>
                <li class="menu-li"><a href="/ru/alexandr-andreevich" class="menu-a <?php if($url == 'ru/alexandr-andreevich') echo 'active'?>"><span class="icon icon-man"></span>О себе</a></li>
            <?php endif; ?>
            <?php if($url == 'ru/blog') : ?>
                <li class="menu-li active"><span class="icon icon-blog"></span>Блог</li>
            <?php else : ?>
                <li class="menu-li"><a href="/ru/blog" class="menu-a <?php if($url == 'rublog') echo 'active'?>"><span class="icon icon-blog"></span>Блог</a></li>
            <?php endif; ?>
            <?php if($url == '/ru/portfolio') : ?>
                <li class="menu-li active"><span class="icon icon-portfolio"></span>Портфолио</li>
            <?php else : ?>
                <li class="menu-li"><a href="/ru/portfolio" class="menu-a <?php if($url == 'ru/portfolio') echo 'active'?>"><span class="icon icon-portfolio"></span>Портфолио</a></li>
            <?php endif; ?>
            <?php if($url == 'ru/travels') : ?>
                <li class="menu-li active"><span class="icon icon-travel"></span>Путешествия</li>
            <?php else : ?>
                <li class="menu-li"><a href="/ru/travels" class="menu-a <?php if($url == 'ru/travels') echo 'active'?>"><span class="icon icon-travel"></span>Путешествия</a></li>
            <?php endif; ?>
            <?php if($url == 'ru/projects') : ?>
                <li class="menu-li active"><span class="icon icon-projects"></span>Свои проекты</li>
            <?php else : ?>
                <li class="menu-li"><a href="/ru/projects" class="menu-a <?php if($url == 'ru/projects') echo 'active'?>"><span class="icon icon-projects"></span>Свои проекты</a></li>
            <?php endif; ?>
            <?php if($url == 'ru/library') : ?>
                <li class="menu-li active"><span class="icon icon-library"></span>Библиотека</li>
            <?php else : ?>
                <li class="menu-li"><a href="/ru/library" class="menu-a <?php if($url == 'ru/library') echo 'active'?>"><span class="icon icon-library"></span>Библиотека</a></li>
            <?php endif; ?>
            <?php if($url == 'ru/stats') : ?>
                <li class="menu-li active"><span class="icon icon-stats"></span>Статистика</li>
            <?php else : ?>
                <li class="menu-li"><a href="/ru/stats" class="menu-a <?php if($url == 'ru/stats') echo 'active'?>"><span class="icon icon-stats"></span>Статистика</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>