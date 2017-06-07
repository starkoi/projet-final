<?php
$page_name = 'recettes';
$name_main = 'recettes';
require_once('views/page_top.php');

$cat_id = (isset($_GET['cat_id'])? $_GET['cat_id']: null);
$num_page = (isset($_GET['page'])? $_GET['page']: 1);

$per_page = 1;
$start_position = 0;

if(is_numeric($num_page)){
    $start_position = ($num_page-1) * $per_page;
}

$recettes_for_pagination = get_recettes_by_cat($cat_id, $start_position, $per_page);
$recettes_temp = reset($recettes_for_pagination);


$recettes_by_cat = get_recettes_avec_cats($cat_id);
$total_record = count($recettes_by_cat);

$recettes_temp = reset($recettes_for_pagination);

?>

<h1><?= (isset($_GET['cat_id'])? ucfirst($recettes_temp['cat_nom']): null) ?></h1>
<?php
foreach ($recettes_for_pagination as $id => $r){
    $img = '<img src="'.$r["full_image_path"].'" alt= "image d\'entrées"/>';

    echo    '<div>'.
        $img.
        '<h2>' .ucfirst($r["nom"]) . '</h2>' .
        "<a href='?op=ajouter&itemid=".$id.
        ((!is_null($cat_id))?"&cat_id=".$cat_id : "").
        ((!is_null($num_page))?"&page=".$num_page : "").
        "' class='ajouter_favori'>Ajouter au favori </a>".
        '<a class="detail_recette" href="details.php?produit_id=' .
        $r['id'].((!is_null($cat_id))?"&cat_id=".$cat_id : ""). '">Détails</a>'.
        '</div>';
}
if ($total_record==0){
    echo 'il n\'y a pas de recettes à montrer';
}

$total_pages = $total_record/$per_page;

?>


<div align="center">


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
        echo "<a href='recettes.php?page=".($num_page+1). ((!is_null($cat_id))?"&cat_id=".$cat_id : "")."'>Suivante</a>";
    }
    ?>
</div>





<?php require_once('views/page_bottom.php') ?>


