<section class="header">
    <?php get_header() ?>
</section>
<section class="banner-news">
    <div class="title-banner-news">
        <h1>SEARCH</h1>
        <ul class="breadcrumb">
            <li><a href="http://localhost/wordpress/">Home</a></li>
            <li>Search</li>
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
            Search
        </h2>
        <div class="row news">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
                <?php endwhile;
            else : ?>
                <p><?php esc_html_e('Sorry, no post matched your criteria'); ?></p>
            <?php endif; ?>
        </div>
    </div>
    <?php the_posts_pagination(); ?>
</section>
<!-- End news -->
<section>
    <?php get_footer() ?>
</section>