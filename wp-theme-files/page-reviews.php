<?php get_header(); ?>


    <div class="container-fluid stripe split pattern reviews">
        <?php get_template_part("template-parts/hero", "row"); ?>
        <div class="row gray py-3 justify-content-center loadmore-container" data-posttype="review">
            <div class="col-12 text-center">
                <h1 class="pb-3">Reviews</h1>
            </div>

            <?php
            $posts = new WP_Query(array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 4,
                'order' => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => array('reviews'),
                    )
                )
            ));
            while ($posts->have_posts()): $posts->the_post(); ?>
                <div class="col-10 my-2 loadmore-item">
                    <div class="hover-shadow review p-4">
                        <h5 class="font-weight-bold"><?php the_title() ?></h5>

                        <section class="text-center">
                            <?php the_content(); ?>
                        </section>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="row gray pb-4">
            <div class="text-center col-12">
                <div class="grow-button loadmore-button">Load More</div>
            </div>
        </div>
    </div>

<?php get_footer();
