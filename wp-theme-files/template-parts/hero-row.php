<?php
$featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')), 'full')[0];
?>
<div class="row no-gutters py-4 gray">
    <div class="col-12 col-md-2 position-relative menu-row">
        <?php get_template_part("template-parts/menu"); ?>
    </div>
    <div class="col-12 col-md text-right text-md-left order-1 order-md-2">
        <a href="<?php echo get_field("bookedin", "options") ?>" class="grow-button">Schedule an Appointment</a>
    </div>
</div>
