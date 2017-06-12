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
                <div id="coeur" class="icon">
                    <a id="coeur-menu" href="favoris.php"><div id="total"><?php echo $total; ?></div></a>
                </div>
                <div class="icon"><span class="fa fa-search" aria-hidden="true"></span></div>
            </div>
    </header>
    <main id="main_<?= $name_main; ?>">
        <form id="barre_de_recherche" action="recherche.php" method="post" onsubmit="if($('#search').val()==''){ alert('Veuillez saisir des lettres pour votre recherche!'); return false; }">
            <input type="search" id="search" name="search"/>
            <input type="submit" id="submit_search" name="submit" value="Rechercher">
        </form>
        <nav class="responsive-menu">
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="biographie.php">Biographie</a></li>
                <li class="sub-menu"><a id="hover_a">Recettes<img src="images/arrow_down.png" alt="fleche en bas"></a></li>
            </ul>
            <ul class="children">
                <li><a href="recettes.php?cat_id=1">Entrées</a></li>
                <li><a href="recettes.php?cat_id=2">Plats principaux</a></li>
                <li><a href="recettes.php?cat_id=3">Desserts</a></li>
            </ul>
        </nav>


