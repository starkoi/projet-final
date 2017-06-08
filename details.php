<?php
$page_name = 'Détail de la recette';
$name_main = 'details';
require_once('views/page_top.php');
$cat_id = (isset($_GET['cat_id'])? $_GET['cat_id']: null);
$id_recette = (isset($_GET['id_recette'])? $_GET['id_recette']: null);
$vedette = (isset($_GET['vedette'])? $_GET['vedette']:null);

$recettes = get_recettes_avec_cats(null,$id_recette);
$recette = (isset($recettes[$id_recette])? $recettes[$id_recette]:null);

//echo '<pre>'; var_export($recette); die();

$img = '<img class="img_details" src="' . $recette["full_image_path"] . '" alt= "image de chaussure"/>';
echo    '<div>'.
            '<h1>' .ucfirst($recette["nom"]) . '</h1>' .
            '<div class="img_details">'. $img .'</div>'.
            '<div class="indication_cuisson">'.
                '<p>'. "Portion: " . $recette["portion"] . '</p>' .
                '<p>' . "Temps de préparation: " . $recette["temps_preparation"] . " minutes" . '</p>' .
                '<p>' . "Cuisson: " . $recette["cuisson"]. " minutes" .  '</p>' .
            '</div>' .
            "<a class='en_savoir_plus' ".
            "href='?op=ajouter".
            "&itemid=".$id_recette.
            "&id_recette=".$id_recette.
            ((!is_null($cat_id))?"&cat_id=".$cat_id : "").
            ((!is_null($vedette))?"&vedette=".$vedette : "").
            "'>Ajouter aux favoris</a>".
            '<div class="indication_cuisson">'.
                '<h2>' . "Ingrédients" . '</h2>'.
                    $recette["ingredients"] .
            '</div>' .
            '<div class="indication_cuisson">'.
                '<h2>' . "Préparations" . '</h2>'.
                    $recette["preparation"] .
            '</div>' .
        '</div>';

?>
<?php require_once ('views/page_bottom.php'); ?>