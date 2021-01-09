<?php get_header(); ?>
<!--banner-->
<section class="banner-news">
    <div class="title-banner-news">
        <h1><?= the_title() ?></h1>
        <ul class="breadcrumb">
            <li><a href="http://localhost/wordpress/">Home</a></li>
            <li><?= the_title() ?></li>
        </ul>
    </div>
    <div class="img-banner-news">
        <img src="<?= get_template_directory_uri() ?>/assets/images/contact.svg" alt="" srcset="">
    </div>
</section>
<!--End banner -->
<section class="content-contact">
    <div class="container py-4">
        <?php
        while (have_posts()) :
            the_post();
        ?>
            <h1 class="archive-page-title text-primary text-center mb-3"><?= the_title() ?></h1>
            <div class="post-content">
                <?= the_content() ?>
            </div>

        <?php
        endwhile;
        ?>
    </div>
<?php get_footer(); ?>