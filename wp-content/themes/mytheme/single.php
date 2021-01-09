<?php get_header(); ?>
<!--banner-->
<section class="banner-news">
    <div class="title-banner-news">
    <?php foreach (get_the_category() as $category) {
        if ( $category->name !== 'Services' ) {?>
        <h1>NEWS</h1>
    <?php }else{?>
        <h1>SERVICES</h1>
    <?php }}?>
        <ul class="breadcrumb">
            <li><a href="http://localhost/wordpress/">Home</a></li>
            <li><?= the_category(); ?></li>
            <li><?= the_title() ?></li>
        </ul>
    </div>
    <div class="img-banner-news">
        <img src="<?= get_template_directory_uri() ?>/assets/images/the-post.svg" alt="" srcset="">
    </div>
</section>
<!--End banner -->
<section class="content-post">
    <div class="container py-4">
        <?php
        while (have_posts()) :
            the_post();
        ?>
            <h1 class="archive-page-title text-primary text-center mb-3"><?= the_title() ?></h1>

            <!-- <div class="post-meta mb-3">
                <div class="published_at">Posted at: <?= the_date('m-d-Y') ?></div>
                <?php if (get_the_category()) : ?>
                    <div class="categories">Category: <?= the_category(); ?></div>
                <?php endif; ?>
            </div> -->

            <div class="post-meta mb-3">
            <?php foreach (get_the_category() as $category) { 
                if ( $category->name !== 'Services' ) {?>
                <!-- <?php if(get_post_time()): ?> -->
                    <div class="published_at">Posted at: <?php echo get_the_date('m-d-Y') ?></div>
                    <!-- <?php endif; ?> -->
                <?php if (get_the_category()) : ?>
                    <div class="categories">Category: <?= the_category(); ?></div>
                <?php endif; ?>
                <?php if (get_the_tags()) : ?>
                    <div class="tags">Tags: <?= the_tags('<ul><li>', '</li><li>', '</li></ul>'); ?></div>
                 <?php endif; ?>
            
            <?php }}?>

            <div class="post-content">
                <?= the_content() ?>
            </div>

        <?php
        endwhile;
        ?>
    </div>
    <div id="home-new-posts" class='section'>
        <div class="container">
            <h2 class="section-title">
                Other news
            </h2>
            <div class="row news">
                <?php
                $np_args = [
                    'category_name' => 'news',
                    'post_type' => 'post'
                ];
                $np_result = new WP_Query($np_args);

                if ($np_result->have_posts()) :
                    while ($np_result->have_posts()) :
                        $np_result->the_post();
                ?>
                        <div class="row home-newpost">
                            <div class="col-12 col-lg-4 col-xl-3">
                                <div class="home-newpost--thumbnail">
                                    <a href="<?= the_permalink(); ?>">
                                        <?php the_post_thumbnail() ?>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-8 col-xl-9">
                                <h3 class="home-newpost--title">
                                    <a href="<?= the_permalink(); ?>">
                                        <?= the_title(); ?>
                                    </a>
                                </h3>
                                <div class="home-newpost--meta mb-20">
                                    Categories: <?= the_category(); ?>
                                </div>
                                <div class="home-newpost--excerpt">
                                    <?= the_excerpt(); ?>
                                </div>
                            </div>
                        </div>
                        <?php
            endwhile;
        else :
            
            ?>
                    <div class="row">
                        <div class="col">
                            <h4 class="text-danger">Chưa có bài viết, vui lòng quay lại sau!</h4>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <!-- <div class="pag">
                <span class="text-right"><?php next_post_link(); ?></span>
                <span class="text-left"><?php previous_post_link(); ?></span>
            </div> -->
        </div>
    </div>
</section>

<div id="home-new-posts" class='section'>
        <div class="container">
            <h2 class="section-title">
                Other services
            </h2>
            <div class="row news">
                <?php
                $np_args = [
                    'category_name' => 'services',
                    'post_type' => 'post'
                ];
                $np_result = new WP_Query($np_args);

                if ($np_result->have_posts()) :
                    while ($np_result->have_posts()) :
                        $np_result->the_post();
                ?>
                        <div class="row home-newpost">
                            <div class="col-12 col-lg-4 col-xl-3">
                                <div class="home-newpost--thumbnail">
                                    <a href="<?= the_permalink(); ?>">
                                        <?php the_post_thumbnail() ?>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-8 col-xl-9">
                                <h3 class="home-newpost--title">
                                    <a href="<?= the_permalink(); ?>">
                                        <?= the_title(); ?>
                                    </a>
                                </h3>
                                <div class="home-newpost--meta mb-20">
                                    Categories: <?= the_category(); ?>
                                </div>
                                <div class="home-newpost--excerpt">
                                    <?= the_excerpt(); ?>
                                </div>
                            </div>
                        </div>
                        <?php
            endwhile;
        else :
            
            ?>
                    <div class="row">
                        <div class="col">
                            <h4 class="text-danger">Chưa có bài viết, vui lòng quay lại sau!</h4>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <!-- <div class="pag">
                <span class="text-right"><?php next_post_link(); ?></span>
                <span class="text-left"><?php previous_post_link(); ?></span>
            </div> -->
        </div>
    </div>
</section>

<?php get_footer(); ?>