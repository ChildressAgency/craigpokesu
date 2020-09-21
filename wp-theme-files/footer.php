<?php wp_footer(); ?>


<footer class="container-fluid text-center">
    <div class="row py-2">
        <div class="col-12">
            <h2>Get in touch</h2>
        </div>
    </div>
    <div class="row py-4">
        <div class="col addr">
            <?php echo get_field("address", "options") ?>
        </div>
        <div class="col social">
            <a href="<?php echo get_field("facebook", "options") ?>" class="m-2"><i class="fab fa-facebook-f"></i></a>
            <a href="<?php echo get_field("instagram", "options") ?>" class="m-2"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="col contact">
            <a href="tel:<?php echo get_field("phone", "options") ?>"><?php echo get_field("phone", "options") ?></a>
            <br/>
            <a href="mailto:<?php echo get_field("email", "options") ?>">
                <?php echo get_field("email", "options") ?>
            </a>
        </div>
    </div>
    <div class="row py-2">
        <div class="col-12">
            <small>&copy;<?php echo date("Y") ?> Craig Pokes U &bullet; All Rights Reserved</small>
        </div>
    </div>
</footer>

</body>
</html>
