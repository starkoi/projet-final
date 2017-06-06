<?php
$page_name = 'recettes';
$name_main = 'recettes';
require_once('views/page_top.php');
$cat_id = (isset($_GET['cat_id'])? $_GET['cat_id']: null);
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
    //quantité de recettes par page

    $per_page= 2;
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    } else{
        $page = 1;
    }

    //la page commence en 0 et elle est multipliée $per_page
    $start = ($page=1) * $per_page;
    $query = 'SELECT * FROM recettes LIMIT $start, $per_page';
    $query = 'SELECT * FROM recettes';
    $result = mysqli_query($mysqli, $query);
    $total_record = mysqli_num_rows($result);
    $total_pages = ceil($total_record / $per_page);
    //link pour la premiere page
    echo "<a href = 'recettes.php?cat_id=$cat_id  page=1'>" . 'Première ' . "</a>";

    for($i=1; $i<=$total_pages;$i++){
        echo "<a href='recettes.php?cat_id=$cat_id page=". $i ."'>" . $i . "</a>";
    }
    //link pour la dernière page
    echo "<a href='recettes.php?cat_id=$cat_id page=$total_pages'>" . ' Dernière'. "</a>";
    ?>


<?php require_once('views/page_bottom.php') ?>


