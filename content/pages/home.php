<?php include_once('content/include/head.php');?>

<?php include_once('content/include/nav.php');?>

<div class="center">
    <img width="300" src="seo/share.png" alt="<?= $site_title;?>" title="<?= $site_title;?>">
</div>
<h1>
    <?= $trad['welcome'];?>
</h1>

<pre>
template="<?= $page;?>"
lang="<?= $lang;?>"
base="<?= $url_base;?>"
uri="<?php if( !empty($get_page)) : echo $get_page; else : echo ""; endif;?>"
</pre>

<?php include_once('content/include/footer.php');?>