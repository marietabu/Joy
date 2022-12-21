<?php
$pageactive = "partenaires.php";
$stylepage = "page_spe.css";
$title = "Partenaires | Joy";
include "headfoot/head.php";include "headfoot/header.php";?>
<!-- MAIN -->
<main>
    <h1 class="h1-dancing">Nos partenaires</h1>
    <!-- IMAGES DECALEES -->
    <section class="flex intro">
        <div class="bloc-img">
            <div class="bloc1"><img src="img/joy-partenaire1.jpg" alt="" center width=100%></div>
            <div class="bloc2"><img src="img/joy-partenaire2.jpg" alt="" center width=100%></div>
        </div>
        <div class="texte-intro">
            <H2 class="h2-page-spe vert-c">Des produits locaux de qualité<br>grâce à nos partenaires</H2>
            <p>Nous privilégions les partenaires locaux attentifs à l’environnement. Vous pourrez les découvrir
                grâce aux diverses journées dégustations.</p>
            <p class="vert-f">Pour ne pas manquer les dégustations, suivez-nous !</p>
            <span class="flex-row center">
                <a href="#"><img class="ico-res" src="img/facebook.png" alt="Icone Facebook"></a>
                <a href="#"><img class="ico-res" src="img/instagram.png" alt="Icone Instagram"></a>
            </span>
        </div>
    </section>
    <!-- SECTION ARTICLES -->
    <section>
        <article class="flex">
            <img class="img-art" src="img/joy-partenaire3.jpg" alt="Femme cachée derrière ses poireaux">
            <div class="texte-article">
                <h2 class="h2-article">Cette semaine, les poireaux sont à l'honneur</h2>
                <h3>Les récoltes de Juliette</h3>
                <p>Juliette nous a livré de beaux poireaux tout frais. Notre chef cuisto en a fait des
                    merveilles :
                    potage, fondu, plat en sauce ! Alors, prêt à découvrir nos nouvelles recettes ?</p>
            </div>
        </article>
        <article class="flex">
            <img class="img-art" src="img/joy-partenaire4.jpg" alt="Vigneron dans ses vignes">
            <div class="texte-article">
                <h2 class="h2-article">Le beaujolais nouveau est arrivée</h2>
                <h3>Soirée dégustation jeudi 17 novembre</h3>
                <p>Notre vignoble vous partagera les secrets qui lui ont permis d’obtenir les saveurs
                    particulières du
                    beaujolais de cette année.</p>
            </div>
        </article>
        <article class="flex">
            <img class="img-art" src="img/joy-partenaire5.jpg" alt="Juiette, maraichère, dans son champs">

            <div class="texte-article">
                <h2 class="h2-article">Notre maraîchère</h2>
                <h3>Juliette, l’art d’exploiter la terre</h3>
                <p>Dès notre première rencontre, Juliette nous a séduit par sa vision. Passionée, elle nous
                    livre des
                    produits frais de qualité obtenu sans produits chimiques. Nous adaptons avec plaisir nos
                    menus en
                    fonction de sa production.</p>
            </div>
        </article>
    </section>
    <!-- RESEAUX SOCIAUX -->
    <div class="res-soc-mob">
        <div class="flex-row">
            <a href="#"><img class="ico-res" src="img/facebook.png" alt="Icone Facebook"></a>
            <a href="#"><img class="ico-res" src="img/instagram.png" alt="Icone Instagram"></a>
            <span id="ellipse"></span>
            <a href="#"><img class="ico-res" src="img/Tripadvisor.png" alt="Icone Tripadvisor"></a>
        </div>
        <p class="center">Suivez-nous !</p>
    </div>
    <!-- SCROOL TO TOP -->
    <div id="scroll_to_top">
        <a href="#top"><img src="img/mdi_chevron-up-box.png" alt="Retourner en haut" /></a>
    </div>
</main>
<!-- FOOTER -->
<footer>
    <!-- FOOTER MOB -->
    <section class="footer-mob">
        <a id="nav-carte" href="menu.html">Carte</a>
        <a id="nav-resto" href="restaurant.html">Le restaurant</a>
        <a id="nav-contact" href="contact.html">Contact</a>
    </section>

    <?php include "headfoot/footer.php";?>