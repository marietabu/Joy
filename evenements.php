<?php
$pageactive = "evenements.php";
$stylepage = "page_spe.css";
$title = "Evénemements | Joy";
include "headfoot/head.php";include "headfoot/header.php";?>
<!-- MAIN -->
<main>
    <h1 class="h1-dancing">Evénements</h1>
    <!-- IMAGES DECALEES -->
    <section class="flex intro">
        <div class="bloc-img">
            <div class="bloc1"><img src="img/joy-evenement1.jpg" alt="" center width=100% max-height="500px"></div>
            <div class="bloc2"><img src="img/joy-evenement2.jpg" alt="" center width=100% max-height="500px"></div>
        </div>
        <div class="texte-intro">
            <H2 class="h2-page-spe vert-c">Evénements culturels</H2>
            <p>Concerts, expositions, soirées dégustations...
                Venez partager des moments conviviaux avec toute notre équipe !
                <br>Un seul objectif : échanger, se détendre tout en restant authentique.
                <br>Que ce soit entre amis, entre collègues ou en famille, toutes les occasions sont bonnes pour
                faire la fête !
            </p>
            <p class="vert-f">Pour ne pas manquer nos prochains événements, suivez-nous !</p>
            <span class="flex-row center">
                <a href="#"><img class="ico-res" src="img/facebook.png" alt="Icone Facebook"></a>
                <a href="#"><img class="ico-res" src="img/instagram.png" alt="Icone Instagram"></a>
            </span>
        </div>
    </section>
    <!-- SECTION ARTICLES -->
    <section>
        <article class="flex">
            <img class="img-art" src="img/joy-evenement3.jpg" alt="Femme cachée derrière ses poireaux">
            <div class="texte-article">
                <h2>Soirée Halloween</h2>
                <h3>Venez déguisé !</h3>
                <p>Pour Halloween, venez déguisé ! Les 3 plus beaux déguisés se verront offrir le cocktail de leur
                    choix
                    !</p>
            </div>
        </article>
        <article class="flex">
            <img class="img-art" src="img/joy-evenement4.jpg" alt="Vigneron dans ses vignes">
            <div class="texte-article">
                <h2>Jeudi 1er décembre 19h30</h2>
                <h3>Soirée dégustation jeudi 17 novembre</h3>
                <p>Soirée lounge en perspective ! Jessy et Peter jouerons leurs nouvelles compositions ! Une musique
                    planante pour une détente garantie...</p>
            </div>
        </article>
        </div>
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
<?php include "headfoot/footer.php";?>