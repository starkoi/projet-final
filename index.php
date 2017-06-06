<?php
$page_name = 'Chef Paul Gabini';
$name_main = 'accueil';
/*require_once ('common/defines.php');*/
require_once ('views/page_top.php');

?>
<h1>Recettes en vedettes</h1>
<h2 class="h2_index">Entrées</h2>
<section class="col-m-9 col-9">
    <?php
    $recette = get_recettes_vedettes(1);
    foreach ($recette as $id => $r) {
        $img = '<img class="img_index col-m-12 col-12" src="' . $r["full_image_path"] . '" alt= "image de la recette"/>';
        echo    '<div class="content_index col-m-6 col-4">'.
                    $img.
                    '<h3>' .ucfirst($r["nom"]) . '</h3>' .
                    '<a class="en_savoir_plus" href="details.php?produit_id=' . $id .'&vedette=1">En savoir plus</a>'.
                '</div>';
    }
    ?>
    <h2>Plats principaux</h2>
    <?php
    $recette = get_recettes_vedettes(2);
    foreach ($recette as $id => $r) {
        $img = '<img  class="img_index col-m-12 col-12" src="' . $r["full_image_path"] . '" alt= "image de la recette"/>';
        echo    '<div class="content_index col-m-6 col-4">'.
                    $img.
                    '<h3>' .ucfirst($r["nom"]) . '</h3>' .
                    '<a class="en_savoir_plus" href="details.php?produit_id=' . $id .'&vedette=2">En savoir plus</a>'.
                '</div>';
    }
    ?>
    <h2>Desserts</h2>
    <?php
    $recette = get_recettes_vedettes(3);
    foreach ($recette as $id => $r) {
        $img = '<img class="img_index col-m-12 col-12"  src="' . $r["full_image_path"] . '" alt= "image de la recette"/>';
        echo    '<div class="content_index col-m-6 col-4">'.
                    $img.
                    '<h3>' .ucfirst($r["nom"]) . '</h3>' .
                    '<a class="en_savoir_plus" href="details.php?produit_id=' . $id .'&vedette=3">En savoir plus</a>'.
                '</div>';
    }
    ?>
</section>
<aside class="col-m-2 col-2">
    <img class="col-m-12 col-12 pub_lait" src="images/pub_lait.jpg" alt="publicite de lait">
</aside>
<aside class="col-m-2 col-2 aside_recettes">
    <h3 id="h3_aside">Autres recettes</h3>
    <?php
    $recette = get_recettes_vedettes(4);
    foreach ($recette as $id => $r) {
        $img = '<img class="img_index col-m-12 col-12" src="' . $r["full_image_path"] . '" alt= "image de la recette"/>';
        echo    '<div class="content_index  col-m-12 col-12">'.
                    $img.
                    '<h3>' .ucfirst($r["nom"]) . '</h3>' .
                    '<a class="en_savoir_plus" href="details.php?produit_id=' . $id .'&vedette=4">En savoir plus</a>'.
                '</div>';
    }
    ?>
</aside>
<?php require_once ('views/page_bottom.php'); ?>
