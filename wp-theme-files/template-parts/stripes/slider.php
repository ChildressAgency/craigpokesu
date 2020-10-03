<?php $sliderPost = $content = get_sub_field("slider"); ?>
<div id="slider_<?php echo $sliderPost->ID ?>" class="carousel slide container-fluid" data-ride="carousel"
     data-interval="false">
    <div class="carousel-inner">
        <?php while (have_rows("stripes", $sliderPost->ID)) :
            the_row();
            $style = get_sub_field("style");
            ?>
            <div class="carousel-item <?php echo get_row_index() === 1 ? "active" : "" ?>">
                <?php
                if ($style === "fullwidth") get_template_part("template-parts/stripes/fullwidth");
                if ($style === "split") get_template_part("template-parts/stripes/split");
                if ($style === "instagram") get_template_part("template-parts/stripes/instagram");
                if ($style === "slider") get_template_part("template-parts/stripes/slider");
                ?>
            </div>
        <?php endwhile; ?>
    </div>

    <a class="carousel-control-prev" href="#slider_<?php echo $sliderPost->ID ?>" role="button" data-slide="prev">
        <i class="fas fa-angle-left circle-arrow"></i>
    </a>
    <a class="carousel-control-next" href="#slider_<?php echo $sliderPost->ID ?>" role="button" data-slide="next">
        <i class="fas fa-angle-right circle-arrow"></i>
    </a>
</div>
