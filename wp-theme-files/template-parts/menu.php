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
            'menu_class' => '',
            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
            'walker' => new WP_Bootstrap_Navwalker(),
        ));
        ?>
    </div>
</div>
