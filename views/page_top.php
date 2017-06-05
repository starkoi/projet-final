<?php
require_once('DB/connection.php');

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $page_name; ?></title>
    <meta name="description" content=""/>
    <link rel="stylesheet" href="style/normalize.css"/>
    <link rel="stylesheet" href="style/main.css"/>
    <link rel="stylesheet" href="style/font-awesome-4.7.0/css/font-awesome.min.css"/>
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <meta name="author" content="Sonya Bouchard et Carolina Yi"/>
    <meta name="robots" content="noindex, nofollow"/>
    <meta property="og:url" content="wwww.avalanche-de-desserts.projetisi.com"/>
    <meta property="og:title" content="Le meilleur gâteau au chocolat â Montréal"/>
    <meta property="og:description" content="Avalanche de desserts sert le meilleur gâteau au chocolat à Montréal Goûtez nos délicieux gâteaux, tartes, muffins et beaucoup plus! Essayez nos produits fraîchement cuits et des gâteaux personnalisés"/>
    <meta property="og:image" content="images/images-gateaux/meilleur-gateau.jpg"/>
    <!--[if lt IE9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">
<?php require_once ('views/header.php');
