<?php
$page_name = 'Chef Paul Gabini';
$name_main = 'accueil';
/*require_once ('common/defines.php');*/
require_once ('views/page_top.php');

?>
<div>
<h1>Recettes en vedettes</h1>
<div>
    <h2>Entrées</h2>
    <?php
    $recette = get_recettes_vedettes(1);
    foreach ($recette as $id => $r) {
        $img = '<img class="img_index" src="' . $r["full_image_path"] . '" alt= "image de la recette"/>';
        echo    '<div class="content_index">'.
                    $img.
                    '<h2>' .ucfirst($r["nom"]) . '</h2>' .
                    '<a class="en_savoir_plus" href="details.php?produit_id=' . $id .'&vedette=1">En savoir plus</a>'.
                '</div>';
    }
    ?>
</div>
<div>
    <h2>Plats principaux</h2>
    <?php
    $recette = get_recettes_vedettes(2);
    foreach ($recette as $id => $r) {
        $img = '<img  class="img_index" src="' . $r["full_image_path"] . '" alt= "image de la recette"/>';
        echo    '<div class="content_index">'.
                    $img.
                    '<h2>' .ucfirst($r["nom"]) . '</h2>' .
                    '<a class="en_savoir_plus" href="details.php?produit_id=' . $id .'&vedette=2">En savoir plus</a>'.
                '</div>';
    }
    ?>
</div>
<div>
    <h2>Desserts</h2>
    <?php
    $recette = get_recettes_vedettes(3);
    foreach ($recette as $id => $r) {
        $img = '<img class="img_index"  src="' . $r["full_image_path"] . '" alt= "image de la recette"/>';
        echo    '<div class="content_index">'.
                    $img.
                    '<h2>' .ucfirst($r["nom"]) . '</h2>' .
                    '<a class="en_savoir_plus" href="details.php?produit_id=' . $id .'&vedette=3">En savoir plus</a>'.
                '</div>';
    }
    ?>
    </div>
<aside>
    <h3>Autres recettes</h3>
    <?php
    $recette = get_recettes_vedettes(4);
    foreach ($recette as $id => $r) {
        $img = '<img class="img_index" src="' . $r["full_image_path"] . '" alt= "image de la recette"/>';
        echo    '<div class="content_index">'.
                    $img.
                    '<h2>' .ucfirst($r["nom"]) . '</h2>' .
                    '<a class="en_savoir_plus" href="details.php?produit_id=' . $id .'&vedette=4">En savoir plus</a>'.
                '</div>';
    }
    ?>
</aside>
<?php require_once ('views/page_bottom.php'); ?>
