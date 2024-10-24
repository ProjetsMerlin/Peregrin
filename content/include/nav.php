<nav>
    <?php foreach ($possible_langage AS $lang) : ?>
    <a href="<?= $lang;?>/<?= $trad[$lang."_home"];?>"><?= $lang;?></a>
    <?php endforeach;?>
</nav>