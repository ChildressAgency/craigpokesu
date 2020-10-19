<?php
$featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')), 'full')[0];
?>

<div class="container-fluid hero"
     style="background-image: url('<?php echo $featured_image ?>');
             background-position: bottom center;">
    <div class="row no-gutters py-4 hero">
        <div class="col-12 col-md-2 position-relative menu-row">
            <?php get_template_part("template-parts/menu"); ?>
        </div>
        <!--<div class="col-12 col-md text-right text-md-left order-1 order-md-2">
            <a href="<?php //echo get_field("bookedin", "options") ?>" class="grow-button">Schedule an Appointment</a>
        </div>-->
    </div>

    <div class="row no-gutters logo">
        <div class="col-12 text-center">
            <a href="<?php echo get_home_url() ?>">
                <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="Logo"
                     class="img-fluid logo"/>
            </a>
        </div>
        <div class="col-12 text-center arrow-col">
            <i class="fas fa-angle-down purple circle-arrow" id="hero-arrow"></i>
        </div>
    </div>
</div>