<div class="col-6 py-5 text-center">
    background: <?php print_r($args["content"]["text"]["background"]); ?>
    <?php if ($args["content"]["text"]["title"]): ?>
        <h1><?php echo $args["content"]["text"]["title"]; ?></h1>
    <?php endif; ?>
    <?php if ($args["content"]["text"]["subtitle"]): ?>
        <h3><?php echo $args["content"]["text"]["subtitle"]; ?></h3>
    <?php endif; ?>
    <div>
        <?php echo $args["content"]["text"]["body"]; ?>
    </div>
</div>
