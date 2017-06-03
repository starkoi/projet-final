<?php
?>
<div class="nav-mobile">
    <div class="menu-btn" id="menu-btn">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!--END MENU HAMBURGER -->
<nav class="responsive-menu">
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="biographie.php">Biographie</a></li>
        <li class="sub-menu"><a href="recettes.php">Recettes</a>
            <ul class="children">
                <li><a href="recettes.php?cat_id=1">Entrées</a></li>
                <li><a href="recettes.php?cat_id=2">Plats pricipaux</a></li>
                <li><a href="recettes.php?cat_id=3">Desserts</a></li>
            </ul>
        </li>
    </ul>
</nav>
