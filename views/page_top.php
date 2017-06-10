<?php
require_once('DB/connection.php');
require_once('views/code_favori.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $page_name; ?></title>
    <meta name="description" content="<?= $content;?>"/>
    <link href="https://fonts.googleapis.com/css?family=Muli|PT+Sans+Narrow" rel="stylesheet">
    <link rel="stylesheet" href="style/normalize.css"/>
    <link rel="stylesheet" href="style/main.css"/>
    <link rel="stylesheet" href="style/font-awesome-4.7.0/css/font-awesome.min.css"/>
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <meta name="author" content="Sonya Bouchard et Carolina Yi"/>
    <meta name="robots" content="noindex, nofollow"/>
    <meta property="og:url" content="wwww.chef-paul-gabini.projetisi.com"/>
    <meta property="og:title" content="Les meilleurs recettes du chef Paul Gabini"/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content="images/desserts/creme-brulee.jpg"/>
    <!--[if lt IE9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">
<?php require_once ('views/header.php');
