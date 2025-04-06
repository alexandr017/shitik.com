<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Alexandr Shitik",
        "url": "https://shitik.com"
    }
</script>


<?php if (isset($posts) && isset($page)) : ?>
<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "Blog",
        "@id": "https://shitik.com/<?php echo getLocale(); ?>/blog",
        "mainEntityOfPage": "https://shitik.by/<?php echo getLocale(); ?>/blog",
        "name": "<?php echo $page['h1']; ?>",
        "description": "<?php echo $page['meta_description']; ?>",
        "publisher": {
            "@type": "Person",
            "@id": "https://shitik.com/ru",
            "name": "Alexandr Shitik"
        },
        "blogPost": [
            <?php $lastElement = end($posts); ?>
            <?php foreach ($posts as $post) : ?>
            {
                "@type": "BlogPosting",
                "@id": "<?php echo $post['url']; ?>",
                "mainEntityOfPage": "<?php echo $post['url']; ?>",
                "headline": "<?php echo $post['h1']; ?>",
                "name": "<?php echo $post['h1']; ?>",
                "description": "<?php echo $post['meta_description']; ?>",
                "datePublished": "<?php echo $post['created_at']; ?>+03:00",
                "dateModified": "<?php echo $post['updated_at']; ?>+03:00",
                "author": {
                    "@type": "Person",
                    "@id": "https://shitik.com/<?php echo getLocale(); ?>",
                    "name": "Alexandr Shitik",
                    "url": "https://shitik.com/<?php echo getLocale(); ?>"
                },
                "image": {
                    "@type": "ImageObject",
                    "@id": "<?php echo $post['preview']; ?>",
                    "url": "<?php echo $post['preview']; ?>",
                    "height": "300",
                    "width": "200"
                },
                "url": "<?php echo $post['url']; ?>"
            }
            <?php if ($post != $lastElement) echo ',' ; ?>
            <?php endforeach; ?>
        ]
    }
</script>
<?php if (isset($post)) unset($post); ?>
<?php endif; ?>


<?php if (isset($post)) : ?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "BlogPosting",
            "@id": "<?php echo $post->url ?>",
            "mainEntityOfPage": "<?php echo $post->url ?>",
            "headline": "<?php echo $post->h1 ?>",
            "name": "<?php echo $post->h1 ?>",
            "description": "<?php echo getPostDescription($post)  ?>",
            "datePublished": "<?php echo $post->created_at ?>+03:00",
            "dateModified": "<?php echo $post->updated_at ?>+03:00",
            "author": {
                "@type": "Person",
                "@id": "https://shitik.com/<?php echo getLocale() ?>",
                "name": "Alexandr Shitik",
                "url": "https://shitik.com/<?php echo getLocale() ?>",
                "image": {
                    "@type": "ImageObject",
                    "@id": "https://shitik.com/themes/v3/images/about/photo.jpg",
                    "url": "https://shitik.com/themes/v3/images/about/photo.jpg",
                    "height": "202",
                    "width": "257"
                }
            },
            "image": {
                "@type": "ImageObject",
                "@id": "<?php echo $post->preview ?>",
                "url": "<?php echo $post->preview ?>",
                "height": "300",
                "width": "200"
            },
            "url": "<?php echo getEnvValue('DOMAIN_NAME') . '/' . $post->url ?>"
        }
    </script>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "name":  "<?php echo lang('breadcrumb.index') ?>",
                    "item":  "<?php echo getEnvValue('DOMAIN_NAME') . '/' . getLocale() ?>"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name":  "<?php echo lang('breadcrumb.blog') ?>",
                    "item":  "<?php echo getEnvValue('DOMAIN_NAME') . '/' . getLocale() . '/blog' ?>"
                },
                {
                    "@type": "ListItem",
                    "position": 3,
                    "name":  "<?php echo $post->h1 ?>",
                    "item": "<?php echo getEnvValue('DOMAIN_NAME') . '/' . $post->url ?>"
                }
            ]
        }
    </script>
<?php endif; ?>
