<?php get_header(); ?>

<?php get_template_part("template-parts/hero", "blog"); ?>

<?php get_template_part("template-parts/stripes/stripes"); ?>

    <div class="container-fluid stripe split pattern blog-index">
        <div class="row gray pb-4 loadmore-container" data-posttype="post">
            <div class="col-12 text-center py-5">
                <h1>Blog</h1>
            </div>
            <?php
            $posts = new WP_Query(array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 6,
                'order' => 'DESC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => array('reviews'),
                        'operator' => 'NOT IN',
                    )
                )
            ));
            while ($posts->have_posts()): $posts->the_post();
                $year = date("Y", strtotime($post->post_date));
                $month = date("F", strtotime($post->post_date));
                $date = date("j", strtotime($post->post_date));
                $day = date("l", strtotime($post->post_date));
                ?>
                <div class="col-12 col-md-4 py-2 loadmore-item">
                    <div class="blog-post-tile hover-shadow">
                        <div class="post-image"
                             style="background-image: url('<?php echo get_the_post_thumbnail_url($post, "large") ?>')">
                        </div>

                        <div class="post-date d-flex flex-row">
                            <h1 class="post-day"><?php echo $date ?></h1>
                            <div class="post-date-right d-flex flex-column justify-content-center">
                                <h4 class="post-year"><?php echo $year ?></h4>
                                <h4 class="post-month"><?php echo $month ?></h4>
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
        <div class="row gray pb-4">
            <div class="text-center col-12">
                <div class="grow-button loadmore-button">Load More</div>
            </div>
        </div>
    </div>

<?php if (get_field("show_hours")) get_template_part("template-parts/hours"); ?>

<?php get_footer();
