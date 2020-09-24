<?php get_header(); ?>

<?php get_template_part("template-parts/hero"); ?>

<?php get_template_part("template-parts/stripes/stripes"); ?>

    <div class="container-fluid stripe split pattern map">
        <div class="row">
            <div class="image left">
                <iframe src="<?php echo get_field("google_maps_embed_url", "options") ?>"
                        frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-6"></div>
            <div class="col-6 py-2 my-4 text-center gray fade-container d-flex flex-column justify-content-center">
                <h1 class="fade-1">Get in touch!</h1>
                <h2 class="fade-2">Craig Pokes U</h2>
                <div class="fade-3">
                    <h5><?php echo get_field("address", "options") ?></h5>
                    <h5>
                        <a href="mailto:<?php echo get_field("email", "options") ?>">Email: <?php echo get_field("email", "options") ?></a>
                    </h5>
                    <h5>
                        <a href="tel:<?php echo get_field("phone", "options") ?>">Phone: <?php echo get_field("phone", "options") ?></a>
                    </h5>
                </div>
            </div>

        </div>
    </div>

<?php if (get_field("show_hours")) get_template_part("template-parts/hours"); ?>

<?php get_footer();
