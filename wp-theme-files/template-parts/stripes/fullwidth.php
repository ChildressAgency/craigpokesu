<?php
$content = get_sub_field("content");
?>

<div class="container-fluid stripe fullwidth py-3"
     style="background-image: url('<?php echo $content["image"]; ?>')">
    <div class="row">
        <div class="col-12 text-center">
            <h1><?php echo $content["title"]; ?></h1>
            <div>
                <?php echo $content["body"]; ?>
            </div>
        </div>
    </div>
</div>
