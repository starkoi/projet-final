<?php
define('CONN_HOST', '127.0.0.1');
define('CONN_USER', 'root');
define('CONN_PWD', '');
define('DBNAME', 'paul_gabini');

$mysqli = new mysqli(CONN_HOST, CONN_USER, CONN_PWD,DBNAME);
mysqli_set_charset($mysqli,"utf8");
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

function get_recettes($where = '') {
    global $mysqli;
    $query_str = "SELECT * FROM recettes " . $where; // Contruction de la requète SQL
    $res = $mysqli->query($query_str); // Lancement de la requète
    $result = array(); // Créer un tableau vide pour mettre toutes les data
    if ($res && ($res->num_rows > 0)) { // la requete a marché et il y a des enregistrements
        while ($recettes_data  = $res->fetch_assoc()) {
            $result[$recettes_data['id']] = $recettes_data; // Stocker l'enregistrement dans les data
        }
    }
    return $result;
}

function get_recettes_avec_cats($cat = null, $id_recettes = null) {
    global $mysqli;
    $query_str =    "SELECT rct.*, cat.id `cat_id`,cat.nom `cat_nom` ".
        "FROM `recettes` as rct, `categorie` as cat ".
        "WHERE ".
        "rct.categorie_id = cat.id ".
        ((!is_null($cat))? "AND rct.categorie_id = ".$cat." " : "").
        ((!is_null($id_recettes))? "AND rct.id = ".$id_recettes : ""); // Contruction de la requète SQL
    $res = $mysqli->query($query_str); // Lancement de la requète
    $result = array(); // Créer un tableau vide pour mettre toutes les data
    if ($res && ($res->num_rows > 0)) { // la requete a marché et il y a des enregistrements
        while ($recettes_data  = $res->fetch_assoc()) {
            $full_image_path = get_full_image_path($recettes_data);
            $recettes_data["full_image_path"] = $full_image_path;
            $result[$recettes_data['id']] = $recettes_data; // Stocker l'enregistrement dans les data
        }
    }
    return $result;
}


function get_recettes_by_cat($cat = null, $start_pag = 0, $per_page) {
    global $mysqli;
    $query_str =    "SELECT rct.*, cat.id `cat_id`,cat.nom `cat_nom` ".
        "FROM `recettes` as rct, `categorie` as cat ".
        "WHERE ".
        "rct.categorie_id = cat.id ".
        ((!is_null($cat))? "AND rct.categorie_id = ".$cat." " : "").
        "LIMIT ".$start_pag.", ".$per_page; // Contruction de la requète SQL
//    var_dump($query_str);
    $res = $mysqli->query($query_str); // Lancement de la requète
    $result = array(); // Créer un tableau vide pour mettre toutes les data
    if ($res && ($res->num_rows > 0)) { // la requete a marché et il y a des enregistrements
        while ($recettes_data  = $res->fetch_assoc()) {
            $full_image_path = get_full_image_path($recettes_data);
            $recettes_data["full_image_path"] = $full_image_path;
            $result[$recettes_data['id']] = $recettes_data; // Stocker l'enregistrement dans les data
        }
    }
    return $result;
}

function get_recettes_vedettes($vedette) {
    global $mysqli;
    $query_str =    "SELECT rct.*, cat.id `cat_id`,cat.nom `cat_nom` ".
        "FROM `recettes` as rct, `categorie` as cat ".
        "WHERE ".
        "rct.categorie_id = cat.id ".
        "AND rct.vedette = $vedette";
    $res = $mysqli->query($query_str); // Lancement de la requète
    $result = array(); // Créer un tableau vide pour mettre toutes les data
    if ($res && ($res->num_rows > 0)) { // la requete a marché et il y a des enregistrements
        while ($recettes_data  = $res->fetch_assoc()) {
            $full_image_path = get_full_image_path($recettes_data);
            $recettes_data["full_image_path"] = $full_image_path;
            $result[$recettes_data['id']] = $recettes_data; // Stocker l'enregistrement dans les data
        }
    }
    return $result;
}
function get_full_image_path($recettes_data_param){
    $full_image_path= 'images/'.$recettes_data_param["cat_nom"]."/".$recettes_data_param["fichier_img"];
    return $full_image_path;

}













