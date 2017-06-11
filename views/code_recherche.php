<?php

function recherche_recette($recherche){
    global $mysqli;
    $query_str =    'SELECT '.
                        'recettes.*, '.
                        'cat.nom AS cat_nom '.
                    'FROM '.
                        'recettes, '.
                        'categorie AS cat '.
                    'WHERE '.
                        "recettes.categorie_id = cat.id ".
                        "AND ".
                        'recettes.nom LIKE "%'. $recherche .'%"'.
                    'ORDER BY recettes.nom ASC'; // Contruction de la requète SQL

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