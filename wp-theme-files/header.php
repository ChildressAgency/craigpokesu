<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo get_bloginfo('name');
        if (get_bloginfo('description')): echo ' | ' . get_bloginfo('description'); endif; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>
<body>

<div class="container-fluid top-bar">
    <header class="row d-flex justify-content-between align-content-between">
        <div class="col social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="col">
            <div class="phone">703.268.6583</div>
        </div>
        <div class="col appt">
            <a href="#">
                Like what you see? Click here to set up an appointment
            </a>
        </div>
        <div class="col email">
            <a href="mailto:SafePiercing@CraigPokesU.com">
                SafePiercing@CraigPokesU.com
            </a>
        </div>
    </header>
</div>

