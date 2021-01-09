<?php
/**
 * Template name: Trang Service
 * 
*/ 
?>
<section class="header">
    <?php get_header() ?>
</section>

<!--banner-->
<section class="banner-about">
    <div class="title-banner-about">
        <h1>Services</h1>
        <ul class="breadcrumb">
            <li><a href="http://localhost/wordpress/">Home</a></li>
            <li>Services</li>
        </ul>
    </div>
    <div class="img-banner-about">
        <img src="<?= get_template_directory_uri() ?>/assets/images/a2.jpg" alt="" srcset="">
    </div>
</section>

<section id="home-new-posts" class='section'>
    <div class="container">
        <!-- <h2 class="section-title">
        <img src="<?= get_template_directory_uri() ?>/assets/images/block-icon.png" alt="" srcset="">
            Similar services
        </h2> -->
        <div class="row news" style="margin-top: 50px;">
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
                        <div class="home-newpost--thumbnail" style="height: 130px;">
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
                            Category: <?= the_category(); ?>
                        </div>
                        <div class="home-newpost--excerpt">
                            <?= the_excerpt(); ?>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;

            echo paginate_links();
        else :
            ?>
            <div class="row">
                <div class="col">
                    <h4 class="text-danger">Chưa có bài viết, vui lòng quay lại sau!</h4>
                </div>
            </div>
        <?php endif; ?>
        </div>
    </div>
</section>

<section>
    <?php get_footer() ?>
</section>