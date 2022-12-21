<?php
$pageactive = "ecoresponsable.php";
$stylepage = "page_spe.css";
$title = "Ecoresponsable | Joy";
include "headfoot/head.php";include "headfoot/header.php";?>
<!-- MAIN -->
<main>
    <h1 class="h1-dancing">Ecoresponsable</h1>
    <!-- IMAGES DECALEES -->
    <section class="flex intro">
        <div class="bloc-img">
            <div class="bloc1"><img src="img/joy-ecoresponsable1.jpg" alt="" center width=100%></div>
            <div class="bloc2"><img src="img/joy-ecoresponsable2.jpg" alt="" center width=100%></div>
        </div>
        <div class="texte-intro">
            <H2 class="h2-page-spe vert-c">Nos actions écoresponsables</H2>
            <p>Il est possible de faire des économies d’énergies partout : s’approvisionner auprès de producteurs
                locaux sélectionner des équipements à faible consommation d’énergie programmer les machines pour
                éviter le gaspillagene pas consommer de plastique réduire les impressions (menus digitals) éditer
                des
                cartes de visite sur papier recyclable etc.
            </p>
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
            <img class="img-art" src="img/Zerodechet.png" alt="Assiettes de soupe faites avec des épluchures">
            <div class="texte-article">
                <h2>Zéro déchet</h2>
                <h3>Utilisation des épluchures, compost, rien ne se perd !</h3>
                <p>Rien ne se perd, rien ne se créé, tout se transforme disait Lavoisier ! Chez nous, les épluchures
                    se
                    transforment en veloutés, sauces ou sont utilisées en bouillon....</p>
            </div>
        </article>
        <article class="flex">
            <img class="img-art" src="img/MosaiqueSupportJoy.png" alt="Support personnalisé Joy">
            <div class="texte-article">
                <h2>Communication verte chez Joy</h2>
                <h3>Consommations d’énergies réduites et recyclages</h3>
                <p>Nos menus sont consultables sur mobile grâce au QR code mis à disposition sur chaque table.Nos
                    ustensils pour la vente à emporter sont en carton recyclable.
                    Nos cartes de visite sont imprimées à l’encre noir sur du papier brut recyclé.
                    Notre site est optimisé pour réduire la consommation d’énergie...</p>
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
<?php include "headfoot/footer.php";?>