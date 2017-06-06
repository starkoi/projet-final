<?php
$page_name = 'recettes';
$name_main = 'recettes';
require_once('views/page_top.php');
$cat_id = (isset($_GET['cat_id'])? $_GET['cat_id']: null);


$per_page = 2;
$num_page = $_GET['page'];

if(is_numeric($num_page)){
    $start = ($num_page-1) * $per_page;
}else{
    $start = 0;
}

$recettes_for_pagination = get_recettes_avec_cats($cat_id,$start, $per_page);
$recettes_temp = reset($recettes_for_pagination);


$recettes_by_cat = get_recettes_avec_cats($cat_id);
$total_record = count($recettes_by_cat);

$recettes = get_recettes_avec_cats($cat_id);


$recettes_temp = reset($recettes);
?>

    <h1><?= (isset($_GET['cat_id'])? ucfirst($recettes_temp['cat_nom']): null) ?></h1>
    <?php
    foreach ($recettes as $id => $r){
        $img = '<img src="'.$r["full_image_path"].'" alt= "image d\'entrées"/>';

        echo    '<div>'.
            $img.
            '<h2>' .ucfirst($r["nom"]) . '</h2>' .
            "<a href='?op=ajouter&itemid=".$id.
            ((!is_null($cat_id))?"&cat_id=".$cat_id : "").
            "' class='ajouter_panier'>Ajouter</a>".
            '<a class="detail_chaussure" href="details.php?produit_id=' .
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
        echo "<a href='recettes.php?page=".($num_page-1)."'>Précédent </a>";
    }
    for($i=1; $i<=$total_pages; $i++){
        if($i==$num_page){
            echo $i . "  ";
        }else {
            echo "<a href='recettes.php?page=$i'>$i </a>";
        }
    }
    if($num_page<$total_pages){
        echo "<a href='recettes.php?page=".($num_page+1)."'>Suivante</a>";
    }
    ?>
</div>


?>


<?php require_once('views/page_bottom.php') ?>


