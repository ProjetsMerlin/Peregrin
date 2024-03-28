<?php include_once('content/include/head.php');?>

<div class="center">
    <?php include_once('content/include/nav.php');?>
    <h1>
        <?= $trad['blog'];?>
    </h1>
    <?php if (isset($_GET["id"]) && htmlspecialchars($_GET["slug"])) : ?>
    <pre>
    ID : <?= htmlspecialchars($_GET["id"]); ?>
    SLUG : <?= htmlspecialchars($_GET["slug"]); ?>
    <?php endif;?>
</pre>
</div>

<?php include_once('content/include/footer.php');?>