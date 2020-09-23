<?php
$featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')), 'full')[0];
?>
<div class="row no-gutters py-4 gray">
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
