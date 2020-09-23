<?php get_header(); ?>

<?php get_template_part("template-parts/hero"); ?>

<?php get_template_part("template-parts/stripes/stripes"); ?>

<?php if (get_field("show_hours")) get_template_part("template-parts/hours"); ?>

<?php get_footer();
