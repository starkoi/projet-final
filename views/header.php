<?php

$total = 0;
foreach ($favori as $qte) {
    $total += $qte;
}
?>

    <header>
        <div id="contenu_header" >
            <div id="logo_paul_gabini">
                <a href="index.php"><img src="images/logo-paul.gif" alt="logo-de-paul-gabini"></a>
            </div>
            <div id="menu-secondaire">
            <?php require_once('views/menu_principal.php') ?>
                <div class="icon"><span class="fa fa-heart" aria-hidden="true"></span><a href="favoris.php"></a></div>
                <div class="icon"><span class="fa fa-search" aria-hidden="true"></span>
            </div>
        </div>
    </header>
    <form id="barre_de_recherche">
        <input type="search" id="search" name="search"/>
        <input type="submit" id="submit_search" name="submit" value="Rechercher">
    </form>
    <nav class="responsive-menu">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="biographie.php">Biographie</a></li>
            <li class="sub-menu"><a id="hover_a">Recettes  <img src="images/arrow_down.png" alt="fleche en bas"></a>
                <ul class="children">
                    <li><a href="recettes.php?cat_id=1">Entrées</a></li>
                    <li><a href="recettes.php?cat_id=2">Plats pricipaux</a></li>
                    <li><a href="recettes.php?cat_id=3">Desserts</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <main id="main_<?= $name_main; ?>">


