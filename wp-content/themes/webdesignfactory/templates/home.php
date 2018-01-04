<?php
/*
 Template Name: Homepage
 */
get_header(); ?>
<div class="container-fluid wrap">
    <div class="div">
        <div class="prel">
            <div id="slider" class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/web-design-new.jpg"></li>
                    <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/webdesignfactory-new.jpg"></li>
                </ul>
            </div>
            <div id="carousel" class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/web-design-new.jpg">
                        <div class="overlay"></div>
                    </li>
                    <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/webdesignfactory-new.jpg">
                        <div class="overlay"></div>
                    </li>
                </ul>
            </div>
        </div>
 </div>
    <div class="div">
        <h2 class="title">Portfolio</h2>
    </div>
    <div class="div">
        <div class="boxes w30 div" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/web-design-new.jpg">
            <div class="boxes_content">
                <p class="red_date">December 15, 2018</p>
                <h3>Title mine</h3>
                <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                <a href="#" class="more">More</a>
            </div>
        </div>
        <div class="boxes w30 div middle" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/web-design-new.jpg">
            <div class="boxes_content">
                <p class="red_date">December 15, 2018</p>
                <h3>Title mine</h3>
                <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                <a href="#" class="more">More</a>
            </div>
        </div>
        <div class="boxes w30 div" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/web-design-new.jpg">
            <div class="boxes_content">
                <p class="red_date">December 15, 2018</p>
                <h3>Title mine</h3>
                <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                <a href="#" class="more">More</a>
            </div>
        </div>
    </div>
</div> <!--   container-->
<?php get_footer(); ?>
