<?php
$page_name = 'favori';
$name_main = 'favori';
require_once('views/page_top.php');


?>


    <h1>Mes Favoris</h1>


    <form method="post" id="enveloppe-favori">
        <section id="section-favori" class=" col-m-12 col-9">


            <?php foreach ($favori as $recette_id => $cat_id) {
                $detail_recette = get_recettes_avec_cats(null, $recette_id);
                // $detail_recette[$id];
                $img_recette = get_full_image_path($detail_recette[$recette_id]);
                $item_name = 'cart_item_' . $recette_id;
                ?>

                <?php  echo '<div class="container-favori col-m-6 col-4">';?>

                <?php  echo"<img class=\"favori-image col-m-12 col-12\" src=\"$img_recette\" alt=\"\"/>";?>
                <?php  echo"<label for=\"$item_name\"></label>";?>
                <?php  echo"<h3 id='title-favori'>" . ucfirst($detail_recette[$recette_id]['nom'])."</h3>";?>
                <?php  echo'<a class="en-savoir-plus-favori" href="details.php?produit_id=' .
                    $recette_id.((!is_null($cat_id))?"&cat_id=".$cat_id : "").'">En savoir plus</a>'; ?>
                <a href='?op=maz&itemid=<?= $recette_id ?>' class="btn_retirer">X</a>
                <?php echo "</div>"?>

            <?php } ?>
        </section>
        <aside id="aside-favori" class="col-m-12 col-2">
            <img class="pub-favori col-m-3 col-12" src="images/publicite/publicite-mccormick.jpg" alt="publicité de mccormick"/>
            <img class="pub-favori col-m-3 col-12" src="images/publicite/publicite-island-oasis.jpg" alt="publicité d\island-oasis"/>
        </aside>

        <?php if (count($favori) > 0){
            echo   '<div id="vider-favori"><input id="button-vider-favori" type="button" value="Vider les favoris" onclick="document.location=\'?op=vider\'"></div>';

        } else {
            echo "<h2>Vous n'avez pas des favoris</h2>";
        }
        ?>

    </form>



<?php
require_once ('views/page_bottom.php');
?>