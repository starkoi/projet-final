<?php
require_once('views/fonction.php');
$cat_id = (isset($_GET['cat_id'])? $_GET['cat_id']: null);
$id_recette = (isset($_GET['id_recette'])? $_GET['id_recette']: null);
$num_page = (isset($_GET['page'])? $_GET['page']: null);

$page_name = 'Site de recette du chef Paul Gabini';
$name_main = 'accueil';
$desc = "Recette disponible en parti sur le site du chef Paul gabini,découvrer en plus en vous procurant son livre";
$og_title = "Recettes les plus populaire du chef Paul Gabini";
$og_desc = "Délecter vous en essayant ses recettes chez vous, facile à faire et aimez de plusieurs personnes.";
$og_img = "images/entrées/poulet-satay.jpg";
require_once('views/page_top.php');
?>
<h1>Recettes en vedettes</h1>
<h2 class="h2_index">Entrées</h2>
<section class="col-m-9 col-9">
    <?php
    $recettes = get_recettes_vedettes(1);
    foreach ($recettes as $id => $r) {
        $img = '<a class="hover_img" href="details.php?id_recette=' . $id .'">'.'<img class="img_index col-m-12 col-12" src="' . $r["full_image_path"] . '" alt= "'.ucfirst($r["nom"]).'"/>'. '</a>';
        echo    '<div class="content_index col-m-6 col-4">'.
                    '<div class="img_index ">'.$img.'</div>'.
                    '<div class="h3_index"><h3>' .ucfirst($r["nom"]) . '</h3></div>' .
                    '<div class="conteneur_favoris_index">'.
                        "<a class='favoris_index' ".
                        "href='?op=ajouter&itemid=".$id.
                        ((!is_null($num_page))?"&page=".$num_page : "").
                        "'><span class=\"fa fa-heart\" aria-hidden=\"true\"></span> Ajouter aux favoris</a>".
                    '</div>'.
                    '<a class="en_savoir_plus" href="details.php?id_recette=' . $id .'">Voir la recette</a>'.
                '</div>';
    }
    ?>
    <h2>Plats principaux</h2>
    <?php
    $recettes = get_recettes_vedettes(2);
    foreach ($recettes as $id => $r) {
        $img =  '<a class="hover_img" href="details.php?id_recette=' . $id .'">'.'<img class="img_index col-m-12 col-12" src="' . $r["full_image_path"] . '" alt= "'.ucfirst($r["nom"]).'"/>'. '</a>';
        echo    '<div class="content_index col-m-6 col-4">'.
                    '<div class="img_index ">'.$img.'</div>'.
                    '<div class="h3_index">'.'<h3>' .ucfirst($r["nom"]) . '</h3>' . '</div>' .
                    '<div class="conteneur_favoris_index">'.
                        "<a class='favoris_index' ".
                        "href='?op=ajouter&itemid=".$id.
                        ((!is_null($num_page))?"&page=".$num_page : "").
                        "'><span class=\"fa fa-heart\" aria-hidden=\"true\"></span> Ajouter aux favoris</a>".
                    '</div>'.
                    '<a class="en_savoir_plus" href="details.php?id_recette=' . $id .'">Voir la recette</a>'.
                '</div>';
    }
    ?>
    <h2>Desserts</h2>
    <?php
    $recettes = get_recettes_vedettes(3);
    foreach ($recettes as $id => $r) {
        $img = '<a class="hover_img" href="details.php?id_recette=' . $id .'">'.'<img class="img_index col-m-12 col-12" src="' . $r["full_image_path"] . '" alt= "'.ucfirst($r["nom"]).'"/>'. '</a>';
        echo    '<div class="content_index col-m-6 col-4">'.
                    '<div class="img_index ">'.$img.'</div>'.
                    '<div class="h3_index">'.'<h3>' .ucfirst($r["nom"]) . '</h3>' . '</div>' .
                    '<div class="conteneur_favoris_index">'.
                        "<a class='favoris_index' ".
                        "href='?op=ajouter&itemid=".$id.
                        ((!is_null($num_page))?"&page=".$num_page : "").
                        "'><span class=\"fa fa-heart\" aria-hidden=\"true\"></span> Ajouter aux favoris</a>".
                    '</div>'.
                    '<a class="en_savoir_plus" href="details.php?id_recette=' . $id .'">Voir la recette</a>'.
                '</div>';
    }
    ?>
</section>
<aside class="col-m-2 col-2 aside">
    <img class="col-m-12 col-12 pub" src="images/publicite/publicite-hellmanns.jpg" alt="publicite de mayo">
<!--</aside>
<aside class="col-m-2 col-2 aside_recettes">-->
    <div class="aside_recettes">
        <h3 class="h3_aside">Autres recettes</h3>
        <?php
        $recettes = get_recettes_vedettes(4);
        foreach ($recettes as $id => $r) {
            $img = '<a class="hover_img" href="details.php?id_recette=' . $id .'">'.'<img class="img_index col-m-12 col-12" src="' . $r["full_image_path"] . '" alt= "'.ucfirst($r["nom"]).'"/>'. '</a>';
            echo    '<div class="content_index  col-m-12 col-12">'.
                        $img.
                        '<div class="div_h3_aside">'.'<h3 class="h3_aside">' .ucfirst($r["nom"]) . '</h3>' . '</div>'.
                        '<div class="conteneur_favoris_aside">'.
                            "<a class='favoris_aside' ".
                            "href='?op=ajouter&itemid=".$id.
                            ((!is_null($num_page))?"&page=".$num_page : "").
                            "'><span class=\"fa fa-heart\" aria-hidden=\"true\"></span></a>".
                        '</div>'.
                        '<a class="en_savoir_plus_aside" href="details.php?id_recette=' . $id .'">Voir la recette</a>'.
                    '</div>';
        }
        ?>
    </div>
</aside>
<?php require_once ('views/page_bottom.php'); ?>
