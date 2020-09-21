<?php
$left_side = get_sub_field("left_side");
$right_side = get_sub_field("right_side");
?>

<div class="container-fluid stripe split">
    <div class="row">
        <?php
        $args = array(
            "side" => "left",
            "content" => $left_side
        );
        if ($left_side["content"] === "image") get_template_part("template-parts/stripes/side", "image", $args);
        if ($left_side["content"] === "text") get_template_part("template-parts/stripes/side", "text", $args);

        $args = array(
            "side" => "right",
            "content" => $right_side
        );
        if ($right_side["content"] === "image") get_template_part("template-parts/stripes/side", "image", $args);
        if ($right_side["content"] === "text") get_template_part("template-parts/stripes/side", "text", $args);
        ?>
    </div>
</div>
