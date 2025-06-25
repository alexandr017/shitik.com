<?php
$title = $page['title'];
$metaDescription = $page['meta_description'];

$clearedLink = str_replace('/' . getLocale() . '/', '', $_SERVER['REQUEST_URI']);
$alternates = [
    (object) ['lang' => 'en', 'url' => 'en/' . $clearedLink],
    (object) ['lang' => 'ru', 'url' => 'ru/' . $clearedLink],
    (object) ['lang' => 'es', 'url' => 'es/' . $clearedLink],
    (object) ['lang' => 'pt', 'url' => 'pt/' . $clearedLink],
    (object) ['lang' => 'fr', 'url' => 'fr/' . $clearedLink],
    (object) ['lang' => 'de', 'url' => 'de/' . $clearedLink],
    (object) ['lang' => 'zh', 'url' => 'zh/' . $clearedLink],
    (object) ['lang' => 'hi', 'url' => 'hi/' . $clearedLink],
];

foreach ($alternates as $key => $alternate) {
    if ('/' . $alternate->url ==  $_SERVER['REQUEST_URI']) {
        unset($alternates[$key]);
    }
}

includeCSS(['modules/general', 'modules/fonts', 'modules/header', 'modules/breadcrumb', 'modules/content', 'modules/sidebar', 'about', 'modules/about-project', 'modules/footer']);
echo renderView('v3/modules/head.php', compact('title', 'metaDescription', 'alternates'));
?>
<body>
<?php echo renderView('v3/modules/menu.php') ?>
<main class="container">
    <ul class="breadcrumb">
        <li><a href="/<?php echo getLocale(); ?>"><?php echo lang('breadcrumb.index'); ?></a></li>
        <li class="active"><?php echo $page['h1'] ?></li>
    </ul>
    <h1><?php echo $page['h1'] ?></h1>
    <div class="content-wrap">
        <div class="content">
            <?php echo $page['lead_text'] ?>

            <div class="timeline">

                <div class="item item-8">
                    <div class="item-inner">
                        <div class="item-inner-text">
                            <time datetime="" class="timeline-time">04.06.<span>2025</span></time>
                            <p class="timeline-description"><?php echo lang('about-project.04_06_2025') ?></p>
                        </div>
                    </div>
                </div>

                <div class="item item-7">
                    <div class="item-inner">
                        <div class="item-inner-text">
                            <time datetime="" class="timeline-time">06.04.<span>2025</span></time>
                            <p class="timeline-description"><?php echo lang('about-project.06_04_2025') ?></p>
                        </div>
                    </div>
                </div>

                <div class="item item-6">
                    <div class="item-inner">
                        <div class="item-inner-text">
                            <time datetime="" class="timeline-time">13.03.<span>2025</span></time>
                            <p class="timeline-description"><?php echo lang('about-project.13_03_2025') ?></p>
                        </div>
                    </div>
                </div>

                <div class="item item-5">
                    <div class="item-inner">
                        <div class="item-inner-text">
                            <time datetime="" class="timeline-time">01.01.<span>2025</span></time>
                            <p class="timeline-description"><?php echo lang('about-project.01_01_2025') ?></p>
                        </div>
                    </div>
                </div>

                <div class="item item-4">
                    <div class="item-inner">
                        <div class="item-inner-text">
                            <time datetime="" class="timeline-time">22.06.<span>2024</span></time>
                            <p class="timeline-description"><?php echo lang('about-project.22_06_2024') ?></p>
                        </div>
                    </div>
                </div>

                <div class="item item-3">
                    <div class="item-inner">
                        <div class="item-inner-text">
                            <time datetime="" class="timeline-time">5.11.<span>2021</span></time>
                            <p class="timeline-description"><?php echo lang('about-project.5_11_2021') ?></p>
                        </div>
                    </div>
                </div>

                <div class="item item-2">
                    <div class="item-inner">
                        <div class="item-inner-text">
                            <time datetime="" class="timeline-time">12.06.<span>2019</span></time>
                            <p class="timeline-description"><?php echo lang('about-project.12_06_2019') ?></p>
                        </div>
                    </div>
                </div>

                <div class="item item-1">
                    <div class="item-inner">
                        <div class="item-inner-text">
                            <time datetime="" class="timeline-time">18.11.<span>2017</span></time>
                            <p class="timeline-description"><?php echo lang('about-project.18_11_2017') ?></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php echo renderView('v3/modules/sidebar.php'); ?>
    </div>
</main>
<?php echo renderView('v3/modules/footer.php'); ?>
<?php echo renderView('v3/modules/js-scripts.php'); ?>
</body>
</html>