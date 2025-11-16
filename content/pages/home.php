<?php
$metadata = array(
    "title" => "Peregrin !",
    "description" => "Peregrin Touque !"
);
?>
<?php include_once('content/include/head.php'); ?>
<header>
    <menu class="center">
        <?php include_once('content/include/nav.php'); ?>
    </menu>
</header>
<main>
    <section class="center">
        <img class="logo" src="<?= $url_base; ?>assets/img/logo.png" alt="<?= $metadata["title"]; ?>">
        <h1>
            <?= $metadata["title"]; ?>
        </h1>
        <img class="icon" src="<?= $url_base; ?>assets/icon/info.svg" alt="<?= $metadata["title"]; ?>">
        <pre class="center">
<?php
echo "\$site_version : " . $site_version;
echo "<br></br>";
echo "\$possible_langage : " . implode(",", $possible_langage);
echo "<br></br>";
echo "\$site_title : " . $metadata["title"];
echo "<br></br>";
echo "\$site_content : " . $metadata["description"];
echo "<br></br>";
echo "\$site_author : " . $site_author;
echo "<br></br>";
echo "\$domain : " . $domain_production;
echo "<br></br>";
echo "\$slug_page : " . $slug_page;
echo "<br></br>";
echo "\$get_lang : " . $get_lang;
echo "<br></br>";
echo "\$url_base : " . $url_base;
echo "<br></br>";
?>
    </pre>
        <img class="share" src="<?= $url_base; ?>assets/img/seo/share.png" alt="<?= $metadata["title"]; ?>">
    </section>
</main>
<?php include_once('content/include/footer.php'); ?>