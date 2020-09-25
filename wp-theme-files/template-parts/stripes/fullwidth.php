<?php
$content = get_sub_field("content");
?>

<div class="container-fluid stripe fullwidth py-3"
     style="background-image: url('<?php echo $content["image"]; ?>')">
    <div class="row fade-container text-center justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <h1 class="fade-1"><?php echo $content["title"]; ?></h1>
            <div class="fade-2">
                <?php echo $content["body"]; ?>
            </div>
        </div>
    </div>
</div>
