<?php include_once('content/include/head.php');?>

<div class="center">
<?php include_once('content/include/nav.php');?>
    <img src="seo/share.png" alt="<?= $site_title;?>" title="<?= $site_title;?>">
    <h1>
        <?= $trad['welcome'];?>
    </h1>
    <pre>
template="<?= $page;?>"
lang="<?= $lang;?>"
base="<?= $url_base;?>"
uri="<?php if( !empty($get_page)) : echo $get_page; else : echo ""; endif;?>"
    </pre>
</div>

<?php include_once('content/include/footer.php');?>