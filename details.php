<?php
$page_name = 'Détail de la recette';
$name_main = 'details';
require_once('views/page_top.php');
$cat_id = (isset($_GET['cat_id'])? $_GET['cat_id']: null);
$id_recette = (isset($_GET['id_recette'])? $_GET['id_recette']: null);
$num_page = (isset($_GET['page'])? $_GET['page']: null);

$recettes = get_recettes_avec_cats(null,$id_recette);
$recette = (isset($recettes[$id_recette])? $recettes[$id_recette]:null);

//echo '<pre>'; var_export($recette); die();

$img = '<img class="img_details  col-m-12 col-12" src="' . $recette["full_image_path"] . '" alt= "image de la recette"/>';

echo        '<h1>' .ucfirst($recette["nom"]) . '</h1>' .
            '<div class="haut_detail">' .
                '<div class="img_details  col-m-5 col-5">'. $img .'</div>'.
                '<div class="indication_cuisson">'.
                    '<p>'. "Portion: " . $recette["portion"] . '</p>' .
                    '<p>' . "Temps de préparation: " .  '<br />' . $recette["temps_preparation"] . " minutes" . '</p>' .
                    '<p>' . "Cuisson: " .  '<br />' . $recette["cuisson"]. " minutes" .  '</p>' .
                '</div>' .
            '</div>'.
            '<div class="conteneur_favoris">'.
                 "<a class='favoris' ".
                "href='?op=ajouter".
                "&itemid=".$id_recette.
              // "&id_recette=".$id_recette.
               ((!is_null($cat_id))?"&cat_id=".$cat_id : "").
                ((!is_null($num_page))?"&page=".$num_page : "").
                "'>Ajouter aux favoris</a>".
            '</div>'.
            '<div class="indication_cuisson">'.
                '<h2>' . "Ingrédients" . '</h2>'.
                    $recette["ingredients"] .
            '</div>' .
            '<div class="indication_cuisson">'.
                '<h2>' . "Préparations" . '</h2>'.
                    $recette["preparation"] .
            '</div>'
?>
<?php require_once ('views/page_bottom.php'); ?>