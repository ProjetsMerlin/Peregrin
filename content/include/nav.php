<nav>
<?php foreach ($possible_langage AS $langs) : ?>
    <a href="<?= $langs;?>/<?= $trad[$langs."_".$page];?>"><?= $langs;?></a>
<?php endforeach;?>
</nav>