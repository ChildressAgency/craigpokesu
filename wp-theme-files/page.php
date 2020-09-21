<?php get_header(); ?>

    <div class="container-fluid hero"
         style="background-image: url('<?php echo get_the_post_thumbnail_url($post, "large") ?>')">
        <div class="row no-gutters py-4">
            <div class="col-xl-2 position-relative">
                <div class="menu">
                    <div class="menu-header">
                        <div class="menu-btn">
                            <i class="fas fa-bars"></i>
                        </div>
                        <div class="menu-label">Menu</div>
                    </div>
                    <div class="menu-content">
                        <p>I'm a menu!</p>
                        <p>I'm a menu!</p>
                        <p>I'm a menu!</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3" style="border: 1px solid red;">appointment</div>
        </div>
    </div>

<?php get_footer();
