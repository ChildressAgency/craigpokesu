<?php if (get_field("show_hours")) { ?>
    <div class="container-fluid hours stripe split">
        <div class="row no-gutters business-hours">
            <div class="col-12 col-md-6 text-center py-3 my-5 fade-container d-flex flex-column justify-content-center">
                <h1 class="fade-1">Studio Hours</h1>

                <ul class="fade-2">
                    <li>Monday: <?php echo get_field("monday_hours", "options") ?></li>
                    <li>Tuesday: <?php echo get_field("tuesday_hours", "options") ?></li>
                    <li>Wednesday: <?php echo get_field("wednesday_hours", "options") ?></li>
                    <li>Thursday: <?php echo get_field("thursday_hours", "options") ?></li>
                    <li>Friday: <?php echo get_field("friday_hours", "options") ?></li>
                    <li>Saturday: <?php echo get_field("saturday_hours", "options") ?></li>
                    <li>Sunday: <?php echo get_field("sunday_hours", "options") ?></li>
                </ul>

                <h6 class="pt-5 fade-3">We are cash only.<br/>ATM available in studio.</h6>
            </div>
            <div class="col-12 col-md-6 img-placeholder">
                <div class="image right"
                     style="background-image: url('<?php echo get_field("hours_image", "options") ?>')"></div>
            </div>
        </div>
    </div>
<?php } ?>
