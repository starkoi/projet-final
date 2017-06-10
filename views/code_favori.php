<?php
if ( session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Est-ce que j'ai une variable de session nommée 'favori' ?
// Non ? On la créée (initialisation à tableau vide)
if (!array_key_exists('favori', $_SESSION)) {
    $_SESSION['favori'] = array();
}
// Ici $_SESSION['favori'] existe TOUJOURS
$favori =& $_SESSION['favori']; // $favori est une référence (alias) sur $_SESSION['favori']

if (array_key_exists('op', $_GET)) {
    $liste_favori = get_recettes(); //liste des recettes
    $itemid = '';
    if (array_key_exists('itemid', $_GET) && array_key_exists($_GET['itemid'], $liste_favori)) {
        $itemid = $_GET['itemid'];
    }
    // ici itemid est supposé valide
    switch ($_GET['op']) {
        case 'ajouter':
            if ($itemid != '') { // N'ajouter que si l'id est valide
                if (array_key_exists($itemid, $favori)) { // Si l'item est dans le favori
                    $favori[$itemid] = 1;

                } else {
                    $favori[$itemid] = 1;
                }
                header('location:'.$_SERVER['PHP_SELF'] .
                    (isset($_GET['cat_id'])? "?cat_id=".$_GET['cat_id']: "").
                    (isset($_GET['page'])? "&page=".$_GET['page']: "")
                );
                exit();
            }
            break;
        case 'retirer':
            if (array_key_exists($itemid, $favori)) { // Si l'item est dans le favori
                $favori[$itemid]--; // Le décrémenter
                if ($favori[$itemid] <= 0) { // Si il vaut 0, le supprimer du favori
                    unset($favori[$itemid]); // Supression de l'item dans le favori
                }
            }
            break;
        case 'maz':
            if (array_key_exists($itemid, $favori)) { // Si l'item est dans le favori
                unset($favori[$itemid]); // Supression de l'item dans le favori
            }
            break;
        case 'vider':
            $favori = array(); // Remplacer le favori par un tableau vide
            break;
    }

}
foreach ($_POST as $item_name => $item_count) {
    if (0 === strpos($item_name, 'favori_item_')) {
        $item_id = substr($item_name, strrpos($item_name, '_') + 1);
        if ($item_count > 0) {
            $favori[$item_id] = $item_count;
        } else {
            unset($favori[$item_id]);
        }
    }
}
?>

