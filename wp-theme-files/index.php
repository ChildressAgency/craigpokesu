<?php get_header(); ?>


    <div class="container-fluid stripe split pattern blog-post">
        <?php get_template_part("template-parts/hero", "row"); ?>
        <div class="row gray py-5">

            <?php if (has_post_thumbnail()): ?>
                <div class="col-12 col-md-4">
                    <img class="img-fluid" alt="<?php the_title() ?>"
                         src="<?php echo get_the_post_thumbnail_url($post, "large") ?>"/>
                </div>
            <?php endif; ?>

            <div class="col">
                <h1 class="mb-2"><?php the_title() ?></h1>
                <?php the_content(); ?>
            </div>

        </div>

        <div class="row gray more-posts py-3 justify-content-center">
            <div class="col-12 text-center">
                <h1 class="pb-3">Blogs You Might Like</h1>
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
                        'operator' => 'NOT IN',
                    )
                )
            ));
            while ($posts->have_posts()): $posts->the_post(); ?>
                <div class="col-12 col-md-3 my-2">
                    <div class="blog-post-tile hover-shadow">
                        <div class="post-image"
                             style="background-image: url('<?php echo get_the_post_thumbnail_url($post, "large") ?>')">
                        </div>

                        <div class="post-date d-flex flex-row">
                            <h1 class="post-day">22</h1>
                            <div class="post-date-right d-flex flex-column justify-content-center">
                                <h4 class="post-year">2020</h4>
                                <h4 class="post-month">September</h4>
                            </div>
                        </div>

                        <h4 class="col-12"><?php the_title() ?></h4>

                        <section class="col-12">
                            <?php the_excerpt(); ?>
                        </section>

                        <a href="<?php the_permalink(); ?>" class="grow-button">Read More</a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

<?php get_footer();
