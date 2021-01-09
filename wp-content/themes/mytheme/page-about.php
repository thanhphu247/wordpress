<?php

/**
 * Template name: Trang About
 * 
 */
?>
<section class="header">
    <?php get_header() ?>
</section>

<!--banner-->
<section class="banner-about">
    <div class="title-banner-about">
        <h1>ABOUT US</h1>
        <ul class="breadcrumb">
            <li><a href="http://localhost/wordpress/">Home</a></li>
            <li>About us</li>
        </ul>
    </div>
    <div class="img-banner-about">
        <img src="<?= get_template_directory_uri() ?>/assets/images/about.svg" alt="" srcset="">
    </div>
</section>
<!--End banner -->
<!--Our company-->
<section class="our-company">
    <div class="container">
        <div class="title-our-company">
            <h4>OUR COMPANY</h4>
            <h2>We are a USA based top Mover company</h2>
            <p>Now were up in the big leagues getting’ our turn at bat. And when the odds are against him and work to do Duis aute irure dolor.</p>
            <div class="img-our-company">
                <img src="<?= get_template_directory_uri() ?>/assets/images/a1.jpg" alt="" srcset="">
            </div>
        </div>

        <div class="what-we-do">
            <div class="img-wwd">
                <img src="<?= get_template_directory_uri() ?>/assets/images/a2.jpg" alt="" srcset="">
            </div>
            <div class="title-wwd">
                <h3>What We do</h3>
            </div>
            <div class="content-wwd">
                <div class="group-1">
                    <ul class="box-1">
                        <li><i class="fas fa-check"></i> These Happy Days are yours</li>
                        <li><i class="fas fa-check"></i> Why do we always come.</li>
                        <li><i class="fas fa-check"></i> There ain't nothin' wrong with</li>
                    </ul>
                </div>
                <div class="group-2">
                    <ul class="box-2">
                        <li><i class="fas fa-check"></i> These Happy Days are yours</li>
                        <li><i class="fas fa-check"></i> Why do we always come.</li>
                        <li><i class="fas fa-check"></i> There ain't nothin' wrong with</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Our company-->
<!--Our client -->
<section class="our-client">
    <div class="container">
        <div class="title-our-client">
            <h4>OUR CLIENTS SAY<h4>
        </div>
        <div class="wrapper">
            <div class="slider--our--client">
                <div class="content-box-slide">
                    <div class="text-box-slide">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/comma.svg" alt="" srcset="">
                        <p> “Please accept my heartfelt thanks for all your help. As aged pensioners, 
                        both with mobility and other health problems, my partner and I were anticipating 
                        the task of preparing our house for sale after 18 years with utter horror.
                        <!-- <br/>
                        Your skills and those of the people you hired to help us have made it all so much easier. 
                        I will be calling for your help again when it comes time to pack up and move to a new house.” -->
                        </p>
                    </div>
                    <div class="customer">
                        <h5>Kate</h5>
                        <h6>Happy Customer</h6>
                    </div>
                </div>
                <div class="content-box-slide">
                <div class="text-box-slide">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/comma.svg" alt="" srcset="">
                        <p> “Incredible Service!…..GOLD! Best Money I have ever spent!”</p>
                    </div>
                    <div class="customer">
                        <h5>John Smith</h5>
                        <h6>Building Owner</h6>
                    </div>
                </div>
                <div class="content-box-slide">
                <div class="text-box-slide">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/comma.svg" alt="" srcset="">
                        <p> “The services recommended by MOVINGHOUSE were outstanding and I would have no hesitation using the services again or recommending them to anyone.”</p>
                    </div>
                    <div class="customer">
                        <h5>Rose Smith</h5>
                        <h6>Building Owner</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Our client -->
<section>
    <?php get_footer() ?>
</section>