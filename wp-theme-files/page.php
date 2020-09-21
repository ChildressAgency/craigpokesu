<?php get_header(); ?>

    <div class="container-fluid hero"
         style="background-image: url('<?php echo get_the_post_thumbnail_url($post, "large") ?>')">
        <div class="row no-gutters py-4">
            <div class="col-xl-2" style="border: 1px solid red;">menu</div>
            <div class="col-xl-3" style="border: 1px solid red;">appointment</div>
        </div>
    </div>

<?php get_footer();
