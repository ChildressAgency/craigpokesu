<?php get_header(); ?>

<?php get_template_part("template-parts/hero", "blog"); ?>

<?php get_template_part("template-parts/stripes/stripes"); ?>

    <div class="container-fluid stripe split pattern blog-index">
        <div class="row gray pb-4">
            <div class="col-12 text-center py-5">
                <h1>Blog</h1>
            </div>
            <?php if (have_posts()) :
                while (have_posts()) : the_post() ?>
                    <div class="col-12 col-md-4 py-2">
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
            <?php endif; ?>
        </div>
    </div>

<?php if (get_field("show_hours")) get_template_part("template-parts/hours"); ?>

<?php get_footer();
