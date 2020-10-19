<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo get_bloginfo('name');
        if (get_bloginfo('description')): echo ' | ' . get_bloginfo('description'); endif; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="container-fluid top-bar">
    <header class="row d-flex justify-content-between align-content-between">
        <div class="col col-md order-1">
            <div class="social d-none d-md-block">
                <a href="<?php echo get_field("facebook", "options") ?>"><i class="fab fa-facebook-f"></i></a>
                <a href="<?php echo get_field("instagram", "options") ?>"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="phone">
                <a href="tel:<?php echo get_field("phone", "options") ?>"><?php echo get_field("phone", "options") ?></a>
            </div>
        </div>
        <div class="col-12 col-md appt order-3 order-lg-2">
            <a href="<?php echo get_field("bookedin", "options") ?>">
                Click here to set up an appointment
            </a>
        </div>
        <div class="col col-md email order-2 order-lg-3">
            <a href="mailto:<?php echo get_field("email", "options") ?>">
                <?php echo get_field("email", "options") ?>
            </a>
        </div>
    </header>
</div>

