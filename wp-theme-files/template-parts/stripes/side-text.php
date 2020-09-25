<div class="col-12 col-md-6 py-2 my-4 text-center <?php echo $args["content"]["text"]["background"] ?> fade-container
d-flex flex-column justify-content-center">
    <?php if ($args["content"]["text"]["title"]): ?>
        <h1 class="fade-1"><?php echo $args["content"]["text"]["title"]; ?></h1>
    <?php endif; ?>
    <?php if ($args["content"]["text"]["subtitle"]): ?>
        <h3 class="fade-2"><?php echo $args["content"]["text"]["subtitle"]; ?></h3>
    <?php endif; ?>
    <div class="<?php echo $args["content"]["text"]["subtitle"] ? "fade-3" : "fade-2" ?>">
        <?php echo $args["content"]["text"]["body"]; ?>
    </div>
</div>
