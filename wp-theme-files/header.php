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

<div class="container top-bar">
    <header class="row">
        <div class="col-sm">
            <div class="social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="phone">703.268.6583</div>
        </div>
        <a href="#" class="col-sm appt">
            Like what you see? Click here to set up an appointment
        </a>
        <a href="mailto:SafePiercing@CraigPokesU.com" class="col-sm email">
            SafePiercing@CraigPokesU.com
        </a>
    </header>
</div>

