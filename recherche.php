<?php
require_once('views/fonction.php');
$cat_id = (isset($_GET['cat_id'])? $_GET['cat_id']: null);
$id_recette = (isset($_GET['id_recette'])? $_GET['id_recette']: null);
$num_page = (isset($_GET['page'])? $_GET['page']: null);
$recherche_recette = array();
if(isset($_POST['search'])){
    $recherche_recette = recherche_recette($_POST['search']);
}

$page_name = 'Recherche de recettes';
$name_main = 'recherche';
$desc = "Rechercher les recettes par mots-clés pour trouver celle que vous chercher";
$og_title = "Recherche de recettes";
$og_desc = "trouver ce que vous chercher simplement avec notre barre de recherche";
$og_img = "";
require_once('views/page_top.php');

?>
<h1>Résultat de votre recherche</h1>
<section class="col-m-9 col-9">
    <?php
    if(count($recherche_recette)>0){
        foreach ($recherche_recette as $id => $r) {
            $img = '<a class="hover_img" href="details.php?id_recette=' . $id .'">'.'<img class="img_index col-m-12 col-12" src="' . $r["full_image_path"] . '" alt="'.ucfirst($r["nom"]).'"/>'. '</a>';
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
    }else{
        echo '<p>Aucun résultat trouvé!</p>';
    }

    ?>
</section>
<aside class="col-m-2 col-2">
    <img class="col-m-12 col-12 pub" src="images/publicite/publicite-hellmanns.jpg" alt="publicite de mayo">
</aside>
<?php require_once ('views/page_bottom.php'); ?>
