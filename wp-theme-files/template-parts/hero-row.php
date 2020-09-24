<?php
$featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')), 'full')[0];
?>
<div class="row no-gutters py-4 gray">
    <div class="col-2 position-relative">
        <?php get_template_part("template-parts/menu"); ?>
    </div>
    <div class="col-3">
        <a href="#" class="grow-button">Schedule an Appointment</a>
    </div>
</div>
