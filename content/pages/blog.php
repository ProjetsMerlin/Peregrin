<?php include_once('content/include/head.php');?>
<?php include_once('content/include/nav.php');?>

<h1>
    <?= $trad['blog'];?>
</h1>
<pre>
    ID : <?= htmlspecialchars($_GET["id"]); ?>
    SLUG : <?= htmlspecialchars($_GET["slug"]); ?>
</pre>

<?php include_once('content/include/footer.php');?>