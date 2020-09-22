<?php get_header(); ?>

    <div class="container-fluid hero"
         style="background-image: url('<?php echo get_the_post_thumbnail_url($post, "large") ?>')">
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
                <a href="#" class="appt-button">Schedule an Appointment</a>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="col-12 text-center">
                <a href="<?php echo get_home_url() ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="Logo"/>
                </a>
            </div>
        </div>
    </div>

<?php while (have_rows("stripes")) : the_row();
    $style = get_sub_field("style");
    ?>

    <div class="container-fluid stripe <?php echo $style; ?>">
        <?php
        if ($style === "fullwidth") get_template_part("template-parts/stripes/fullwidth");
        if ($style === "split") get_template_part("template-parts/stripes/split");
        ?>
    </div>
    <!--    <pre style="color: white;">--><?php //print_r(get_fields()) ?><!--</pre>-->
<?php endwhile; ?>

<?php if (get_field("show_hours")) { ?>
    <div class="container-fluid hours stripe split">
        <div class="image right"
             style="background-image: url('<?php echo get_field("hours_image", "options") ?>')"></div>
        <div class="row no-gutters business-hours">
            <div class="col-6 text-center py-3 my-5 fade-container">
                <h1 class="fade-1">Studio Hours</h1>

                <ul class="fade-2">
                    <li>Monday: <?php echo get_field("monday_hours", "options") ?></li>
                    <li>Tuesday: <?php echo get_field("tuesday_hours", "options") ?></li>
                    <li>Wednesday: <?php echo get_field("wednesday_hours", "options") ?></li>
                    <li>Thursday: <?php echo get_field("thursday_hours", "options") ?></li>
                    <li>Friday: <?php echo get_field("friday_hours", "options") ?></li>
                    <li>Saturday: <?php echo get_field("saturday_hours", "options") ?></li>
                    <li>Sunday: <?php echo get_field("sunday_hours", "options") ?></li>
                </ul>

                <h6 class="pt-5 fade-3">We are cash only.<br/>ATM available in studio.</h6>
            </div>
            <div class="col-6 stripe-image">

            </div>
        </div>
    </div>
<?php } ?>

<?php get_footer();
