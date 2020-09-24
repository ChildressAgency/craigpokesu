<?php get_header(); ?>


    <div class="container-fluid stripe split pattern reviews">
        <?php get_template_part("template-parts/hero", "row"); ?>
        <div class="row gray py-3 justify-content-center">
            <div class="col-12 text-center">
                <h1 class="pb-3">Reviews</h1>
            </div>

            <?php
            $posts = new WP_Query(array(
                'post_type' => 'review',
                'post_status' => 'publish',
                'posts_per_page' => 4,
                'order' => 'ASC'
            ));
            while ($posts->have_posts()): $posts->the_post(); ?>
                <div class="col-10 my-2">
                    <div class="hover-shadow review p-4">
                        <h5 class="font-weight-bold"><?php the_title() ?></h5>

                        <section class="text-center">
                            <?php the_content(); ?>
                        </section>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

<?php get_footer();
