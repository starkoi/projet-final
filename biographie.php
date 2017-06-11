<?php
require_once('views/fonction.php');
$page_name = 'Biographie de Paul Gabini';
$name_main = 'bio';
$desc = "Biographie sur le chef Paul Gabini, un chef avec des recettes facile à faire";
$og_title = "Biographie du chef Paul Gabini";
$og_desc = "Biographie sur le chef Gabini, un expert en cuisine";
$og_img = "images/carrousel/chef-paul.jpg";
require_once('views/page_top.php');
?><!--conteneur du slider au complet-->
<section id="slider" class="col-m-5 col-5 section_gauche">
    <!--on cache les input-->
    <input checked type="radio" name="slider" id="slide1"/>
    <input checked type="radio" name="slider" id="slide2"/>
    <input checked type="radio" name="slider" id="slide3"/>
    <input checked type="radio" name="slider" id="slide4"/>

    <!--le carouseel-->
    <div id="slides">
        <!--delimite l'espace que l'utilisateur verra-->
        <div id="overflow">
            <div class="inner">
                <!--une photo est son texte-->
                <div class="photo">
                    <img class="col-m-12 col-12" src="images/carrousel/livre-recettes-pages-3.jpg" alt="page 3 recette muffins"/>
                </div>
                <div class="photo">
                    <img class="col-m-12 col-12" src="images/carrousel/livre-du-chef-paul.jpg" alt="couverture du livre de recette"/>
                </div>
                <div class="photo">
                    <img class="col-m-12 col-12" src="images/carrousel/livre-recettes-pages-2.jpg" alt="page 2 recette pizza"/>
                </div>
                <div class="photo">
                    <img class="col-m-12 col-12" src="images/carrousel/chef-paul.jpg" alt="photo du chef paul"/>
                </div>
            </div>
            <!--END OF INNNER CONTENEUR DE PHOTO ET TEXTE	-->
        </div>
    </div>
    <!--End of carrousel-->
    <!--les boutons de control-->
    <div id="active">
        <label for="slide1"></label>
        <label for="slide2"></label>
        <label for="slide3"></label>
        <label for="slide4"></label>
    </div>
</section>
<div class="col-m-6 col-6 section_droite">
    <h1>Chef Paul Gabini</h1>
    <p>Lorem ipsum dolor sit amet,
        consectetur adipisicing elit. Alias commodi consequatur delectus dolorem odit praesentium quisquam.
        Deserunt dolore earum enim, quibusdam quidem ut. Exercitationem incidunt numquam perspiciatis placeat,
        quos velit!
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam asperiores aspernatur cumque
        error est eum facere hic nisi nobis numquam, possimus quam quo ratione soluta, vel voluptas? Ratione,
        voluptate!
    </p>
    <p>Paul Gabini est un chef italien qui à déjà publier un livre sur ses recettes. Vous pouvez trouver son livre dans les magasins suivants:</p>
    <div class="col-m-12 col-12 logo_librairies">
        <img class="col-m-12 col-12" src="images/logo-archambault_renaud_bray.jpg" alt="logo de archambault et renaud-bray">
    </div>
</div>
<?php require_once ('views/page_bottom.php'); ?>
