<div class="container-fluid hero"
     style="background-image: url('<?php echo get_the_post_thumbnail_url($post, "large") ?>')">
    <div class="row no-gutters py-4">
        <div class="col-12 col-md-2 position-relative menu-row">
            <?php get_template_part("template-parts/menu"); ?>
        </div>
        <div class="col-12 col-md text-right text-md-left order-1 order-md-2">
            <a href="<?php echo get_field("bookedin", "options") ?>" class="grow-button">Schedule an Appointment</a>
        </div>
    </div>

    <div class="row no-gutters logo">
        <div class="col-12 text-center">
            <a href="<?php echo get_home_url() ?>">
                <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="Logo"
                     class="img-fluid logo"/>
            </a>
        </div>
        <div class="col-12 text-center arrow-col">
            <i class="fas fa-angle-down" id="hero-arrow"></i>
        </div>
    </div>
</div>