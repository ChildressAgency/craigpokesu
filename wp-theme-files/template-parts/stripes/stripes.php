<?php while (have_rows("stripes")) {
    the_row();
    $style = get_sub_field("style");

    if ($style === "fullwidth") get_template_part("template-parts/stripes/fullwidth");
    if ($style === "split") get_template_part("template-parts/stripes/split");
    if ($style === "instagram") get_template_part("template-parts/stripes/instagram");
    if ($style === "slider") get_template_part("template-parts/stripes/slider");
}
