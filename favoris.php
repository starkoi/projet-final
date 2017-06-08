<?php
$page_name = 'favori';
$name_main = 'favori';
require_once('views/page_top.php');


?>

    <h1>Favori</h1>
    <form method="post">
        <table border="0" cellpadding="0" cellspacing="0">
            <?php foreach ($favori as $id => $nb) {
                $detail_recette = get_recettes_avec_cats(null,null, $id);
                // $detail_recette[$id];
                $img_recette = get_full_image_path($detail_recette[$id]);
                $item_name = 'cart_item_' . $id;
                ?>
                <tr>
                    <td class="img_container">
                        <img src="<?php echo $img_recette; ?>" alt="">
                    </td>
                    <td>
                        <label for=<?= $item_name ?>>
                            <strong><?= ucfirst($detail_recette[$id]['nom']); ?></strong>
                        </label>
                    </td>
                    <td>
                        <a href='?op=maz&itemid=<?= $id ?>' class="btn_retirer">X</a>
                    </td>
                </tr>
            <?php } ?>

        </table>
        <?php if (count($favori) > 0){
            echo   '<input type="button" value="Vider le favori" onclick="document.location=\'?op=vider\'">';

        } else {
            echo "<h2>Votre favori est vide!</h2>";
        }
        ?>

    </form>

<?php
require_once('views/page_bottom.php');
?>
