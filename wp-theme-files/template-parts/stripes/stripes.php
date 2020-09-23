<?php while (have_rows("stripes")) : the_row();
    $style = get_sub_field("style");
    ?>

    <div class="container-fluid stripe <?php echo $style; ?>">
        <?php
        if ($style === "fullwidth") get_template_part("template-parts/stripes/fullwidth");
        if ($style === "split") get_template_part("template-parts/stripes/split");
        ?>
    </div>
<?php endwhile; ?>