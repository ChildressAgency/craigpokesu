<?php get_header(); ?>

<?php get_template_part("template-parts/hero"); ?>

<?php get_template_part("template-parts/stripes/stripes"); ?>

    <div class="container-fluid stripe split pattern map">
        <div class="row">
            <div class="image left">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d691.606201484151!2d-77.12609382491262!3d38.89638085589659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf46060896264d799!2sCraigPokesU!5e0!3m2!1sen!2sus!4v1600922296203!5m2!1sen!2sus"
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
