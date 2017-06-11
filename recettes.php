<?php
require_once('views/fonction.php');
$cat_id = (isset($_GET['cat_id'])? $_GET['cat_id']: null);
$num_page = (isset($_GET['page'])? $_GET['page']: 1);
$per_page = 4;
$start_position = 0;
$recettes_for_pagination = get_recettes_by_cat($cat_id, $start_position, $per_page);
$recettes_temp = reset($recettes_for_pagination);

$recettes_by_cat = get_recettes_avec_cats($cat_id);
$total_record = count($recettes_by_cat);

$recettes_temp = reset($recettes_for_pagination);


$page_name = 'Recettes faciles et savoureuses à préparer avec Paul Gabini';
$name_main = 'recettes';
$desc = 'Des recettes originales et delicieuses du chef Paul Gabini reconu pour son fameux poulet à la moutarde';
$og_title = "Un extraire de son premier livre de recettes du che Paul Gabini ";
$og_desc = "Un de ses recettes favories du chef Paul Gabini \"creme bruleé\"";
$og_img = "images/desserts/creme-brulee.jpg";
require_once('views/page_top.php');

if(is_numeric($num_page)){
    $start_position = ($num_page-1) * $per_page;
}
?>
<h1><?= (isset($_GET['cat_id'])? ucfirst($recettes_temp['cat_nom']): null) ?></h1>
<?php
echo '<section id="section_recettes" class="col-m-9 col-9">';
foreach ($recettes_for_pagination as $id => $r){
   $img = '<a class="hover_img" href="details.php?id_recette=' . $id .'">'.'<img class="img_recettes col-m-12 col-12" src="' . $r["full_image_path"] . '" alt="' . ucfirst($r['nom']).'"/>'. '</a>';

    echo    '<div class=" container_recettes col-m-6 col-4">'.
        $img.
        '<h3 id="title-recettes">' .ucfirst($r["nom"]) . '</h3>' .
        "<a href='?op=ajouter&itemid=".$id.
        ((!is_null($cat_id))?"&cat_id=".$cat_id : "").
        ((!is_null($num_page))?"&page=".$num_page : "").
        "' class='ajouter-favori-recettes'><span class=\"fa fa-heart\" aria-hidden=\"true\"></span> Ajouter aux favoris </a>".
        '<a class="en-savoir-plus-recettes" href="details.php?id_recette=' .
        $r['id'].((!is_null($cat_id))?"&cat_id=".$cat_id : ""). '">Voir la recette</a>'.
        '</div>';
}
echo '</section>'.
    '<aside id="aside_recettes" class="col-m-2 col-2">'.
        '<img class="col-m-3 col-12 pub_recettes" src="images/publicite/publicite-cold-beers.jpg" alt="publicité d\'hamburger"/>'.
        '<img class="col-m-3 col-12 pub_recettes" src="images/publicite/publicite-hellmanns.jpg" alt="publicité d\'hellmanns"/>'.
    '</aside>';

if ($total_record==0){
    echo 'il n\'y a pas de recettes à montrer';
}
$total_pages = $total_record/$per_page;

?>
<div id="pagination_recettes">
    <?php
    if($num_page>1){
        echo "<a href='recettes.php?page=".($num_page-1). ((!is_null($cat_id))?"&cat_id=".$cat_id : "")."'>Précédent </a>";
    }
    for($i=1; $i<=$total_pages; $i++){
        if($i==$num_page){
            echo $i . "  ";
        }else {
            echo "<a href='recettes.php?page=" . $i . ((!is_null($cat_id))?"&cat_id=".$cat_id : "")."'>$i </a>";
        }
    }
    if($num_page<$total_pages){
        echo "<a href='recettes.php?page=".($num_page+1). ((!is_null($cat_id))?"&cat_id=".$cat_id : "")."'>Suivant</a>";
    }
    ?>
</div>
<?php require_once('views/page_bottom.php') ?>