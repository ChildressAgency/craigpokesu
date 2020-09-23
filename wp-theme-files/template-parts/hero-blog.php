<?php
$featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')), 'full')[0];
?>

<div class="container-fluid hero"
     style="background-image: url('<?php echo $featured_image ?>')">
    <div class="row no-gutters py-4">
        <div class="col-2 position-relative">
            <div class="menu">
                <div class="menu-header">
                    <div class="menu-btn">
                        <i class="fas fa-bars"></i>
                    </div>
                    <div class="menu-label">Menu</div>
                </div>
                <div class="menu-content">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu',
                        'depth' => 2,
                        'container' => 'div',
                        'container_class' => '',
                        'container_id' => '',
                        'menu_class' => '',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new WP_Bootstrap_Navwalker(),
                    ));
                    ?>
                </div>
            </div>
        </div>
        <div class="col-3">
            <a href="#" class="grow-button">Schedule an Appointment</a>
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
            <i class="fas fa-angle-down purple" id="hero-arrow"></i>
        </div>
    </div>
</div>