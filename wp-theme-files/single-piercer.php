<?php get_header(); ?>


    <div class="container-fluid stripe split pattern blog-post">
        <?php get_template_part("template-parts/hero", "row"); ?>
        <div class="row gray py-5">

            <?php if (has_post_thumbnail()): ?>
                <img class="img-fluid col-12 col-md-4" alt="<?php the_title() ?>"
                     src="<?php echo get_the_post_thumbnail_url($post, "large") ?>"/>
            <?php endif; ?>

            <div class="col">
                <h1 class="mb-2"><?php the_title() ?></h1>
                <?php the_content(); ?>
            </div>

        </div>

        <div class="row gray more-posts py-3 justify-content-center">
            <div class="col-12 text-center">
                <h1 class="pb-3">Other Piercers</h1>
            </div>

            <?php
            $posts = new WP_Query(array(
                'post_type' => 'piercer',
                'post_status' => 'publish',
                'posts_per_page' => 4,
                'order' => 'ASC'
            ));
            while ($posts->have_posts()): $posts->the_post(); ?>
                <div class="col-12 col-md-3">
                    <a href="<?php the_permalink(); ?>" class="piercer-tile hover-shadow">
                        <div class="post-image"
                             style="background-image: url('<?php echo get_the_post_thumbnail_url($post, "large") ?>')">
                            <h4 class="col-12 title"><?php the_title() ?></h4>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

<?php get_footer();
