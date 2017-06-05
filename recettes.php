<?php
require_once('views/page_top.php');
//$nom= (isset($_GET['nom']) && ($_GET['nom']==1 ||($_GET['nom']==2 || ($_GET['nom']==3 ))))? $_GET['nom']: null;
$cat_id = (isset($_GET['cat_id'])? $_GET['cat_id']: null);
$recettes = get_recettes_avec_cats($cat_id);
$recettes_temp = reset($recettes);

?>

<main>
    <h1><?= (isset($_GET['cat_id'])? ucfirst($recettes_temp['cat_nom']): null) ?></h1>
    <?php
    foreach ($recettes as $id => $r){
        $img = '<img src="'.$r["full_image_path"].'" alt= "image d\'entrées"/>';

        echo    '<div>'.
            $img.
            '<h2>' .ucfirst($r["nom"]) . '</h2>' .
            '<p>' . "Temps de préparation ". $r["temps_preparation"] ." minutes ". "temps de cuisson ". $r["cuisson"]. " minutes". " portions ". $r["portion"] . " portions" .'</p>' .

            "<a href='?op=ajouter&itemid=".$id.
            ((!is_null($cat_id))?"&cat_id=".$cat_id : "").
            "' class='ajouter_panier'>Ajouter</a>".
            '<a class="detail_chaussure" href="details.php?produit_id=' .
            $r['id'].((!is_null($cat_id))?"&cat_id=".$cat_id : ""). '">Détails</a>'.
            '</div>';
    }
    ?>
</main>
<?php require_once('views/page_bottom.php') ?>


