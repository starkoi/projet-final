<?php
$page_name = 'Chef Paul Gabini';
$name_main = 'accueil';
require_once('views/page_top.php');
$cat_id = (isset($_GET['cat_id'])? $_GET['cat_id']: null);
$id_recette = (isset($_GET['id_recette'])? $_GET['id_recette']: null);
$num_page = (isset($_GET['page'])? $_GET['page']: null);
?>
<h1>Recettes en vedettes</h1>
<h2 class="h2_index">Entrées</h2>
<section class="col-m-9 col-9">
    <?php
    $recettes = get_recettes_vedettes(1);
    foreach ($recettes as $id => $r) {
        $img = '<a class="hover_img" href="details.php?id_recette=' . $id .'&vedette=1">'.'<img class="img_index col-m-12 col-12" src="' . $r["full_image_path"] . '" alt= "image de la recette"/>'. '</a>';
        echo    '<div class="content_index col-m-6 col-4">'.
                    '<div class="img_index ">'.$img.'</div>'.
                    '<div class="h3_index"><h3>' .ucfirst($r["nom"]) . '</h3></div>' .
                    '<div class="conteneur_favoris_index">'.
                        "<a class='favoris_index' ".
                        "href='?op=ajouter&itemid=".$id.
                        ((!is_null($num_page))?"&page=".$num_page : "").
                        "'><span class=\"fa fa-heart\" aria-hidden=\"true\"></span> Ajouter aux favoris</a>".
                    '</div>'.
                    '<a class="en_savoir_plus" href="details.php?id_recette=' . $id .'&vedette=1">Voir la recette</a>'.
                '</div>';
    }
    ?>
    <h2>Plats principaux</h2>
    <?php
    $recettes = get_recettes_vedettes(2);
    foreach ($recettes as $id => $r) {
        $img =  '<a class="hover_img" href="details.php?id_recette=' . $id .'&vedette=2">'.'<img class="img_index col-m-12 col-12" src="' . $r["full_image_path"] . '" alt= "image de la recette"/>'. '</a>';
        echo    '<div class="content_index col-m-6 col-4">'.
                    '<div class="img_index ">'.$img.'</div>'.
                    '<div class="h3_index">'.'<h3>' .ucfirst($r["nom"]) . '</h3>' . '</div>' .
                    '<div class="conteneur_favoris_index">'.
                        "<a class='favoris_index' ".
                        "href='?op=ajouter&itemid=".$id.
                        ((!is_null($num_page))?"&page=".$num_page : "").
                        "'><span class=\"fa fa-heart\" aria-hidden=\"true\"></span> Ajouter aux favoris</a>".
                    '</div>'.
                    '<a class="en_savoir_plus" href="details.php?id_recette=' . $id .'&vedette=2">Voir la recette</a>'.
                '</div>';
    }
    ?>
    <h2>Desserts</h2>
    <?php
    $recettes = get_recettes_vedettes(3);
    foreach ($recettes as $id => $r) {
        $img = '<a class="hover_img" href="details.php?id_recette=' . $id .'&vedette=3">'.'<img class="img_index col-m-12 col-12" src="' . $r["full_image_path"] . '" alt= "image de la recette"/>'. '</a>';
        echo    '<div class="content_index col-m-6 col-4">'.
                    '<div class="img_index ">'.$img.'</div>'.
                    '<div class="h3_index">'.'<h3>' .ucfirst($r["nom"]) . '</h3>' . '</div>' .
                    '<div class="conteneur_favoris_index">'.
                        "<a class='favoris_index' ".
                        "href='?op=ajouter&itemid=".$id.
                        ((!is_null($num_page))?"&page=".$num_page : "").
                        "'><span class=\"fa fa-heart\" aria-hidden=\"true\"></span> Ajouter aux favoris</a>".
                    '</div>'.
                    '<a class="en_savoir_plus" href="details.php?id_recette=' . $id .'&vedette=3">Voir la recette</a>'.
                '</div>';
    }
    ?>
</section>
<aside class="col-m-2 col-2">
    <img class="col-m-12 col-12 pub_lait" src="images/pub_lait.jpg" alt="publicite de lait">
</aside>
<aside class="col-m-2 col-2 aside_recettes">
    <h3 class="h3_aside">Autres recettes</h3>
    <?php
    $recettes = get_recettes_vedettes(4);
    foreach ($recettes as $id => $r) {
        $img = '<a class="hover_img" href="details.php?id_recette=' . $id .'&vedette=4">'.'<img class="img_index col-m-12 col-12" src="' . $r["full_image_path"] . '" alt= "image de la recette"/>'. '</a>';
        echo    '<div class="content_index  col-m-12 col-12">'.
                    $img.
                    '<div class="div_h3_aside">'.'<h3 class="h3_aside">' .ucfirst($r["nom"]) . '</h3>' . '</div>'.
                    '<div class="conteneur_favoris_aside">'.
                        "<a class='favoris_aside' ".
                        "href='?op=ajouter&itemid=".$id.
                        ((!is_null($num_page))?"&page=".$num_page : "").
                        "'><span class=\"fa fa-heart\" aria-hidden=\"true\"></span></a>".
                    '</div>'.
                    '<a class="en_savoir_plus_aside" href="details.php?id_recette=' . $id .'&vedette=4">Voir la recette</a>'.
                '</div>';
    }
    ?>
</aside>
<?php require_once ('views/page_bottom.php'); ?>
