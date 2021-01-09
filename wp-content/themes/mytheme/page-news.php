<?php

/**
 * Template name: Trang News
 * 
 */
?>
<section class="header">
    <?php get_header() ?>
</section>
<section class="banner-news">
    <div class="title-banner-news">
        <h1>NEWS</h1>
        <ul class="breadcrumb">
            <li><a href="http://localhost/wordpress/">Home</a></li>
            <li>News</li>
        </ul>
    </div>
    <div class="img-banner-news">
        <img src="<?= get_template_directory_uri() ?>/assets/images/news-post.svg" alt="" srcset="">
    </div>
</section>
<!--End banner -->
<section id="home-new-posts" class='section'>
    <div class="container">
        <h2 class="section-title">
            News
        </h2>
        <div class="row news">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $args = array(
                'category_name' => 'news',
                'post_type' => 'post', // Your post type name
                'posts_per_page' => 3,
                'paged' => $paged,
            );

            $loop = new WP_Query($args);
            if ($loop->have_posts()) {
                while ($loop->have_posts()) : $loop->the_post();
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
                                Category: <?= the_category(); ?>
                            </div>
                            <div class="home-newpost--excerpt">
                                <?= the_excerpt(); ?>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
        </div>
        <div class="pagination-news">
        <?php
                $total_pages = $loop->max_num_pages;
                if ($total_pages > 1) {

                    $current_page = max(1, get_query_var('paged'));
                    echo paginate_links(array(
                        'base' => get_pagenum_link(1) . '%_%',
                        'format' => '/page/%#%',
                        'current' => $current_page,
                        'total' => $total_pages,
                        'prev_text'    => __('« prev'),
                        'next_text'    => __('next »'),
                    ));
                }
            }
            wp_reset_postdata();
        ?>
        </div>

    </div>
</section>
<!-- End news -->
<section>
    <?php get_footer() ?>
</section>