<?php
$pageactive = "index.php";
$title = "Page d'accueil | Joy";
$stylepage = "accueil.css";
require "headfoot/head.php";require "headfoot/header.php";?>
<main>
    <section id="hero">
        <h1 class="h1-dancing">Bienvenue chez Joy</h1>
        <div class="flex" class="center">
            <img class="img-acc" src="img/Share meat.jpg" alt="Personnes atablées partageant des plats">
            <div id="texte-hero">
                <h2 class="h2-accueil">Mangez heureux !</h2>
                <p>Proche du centre ville, Joy est ouvert depuis septembre 2022. Nous vous proposons de manger de la
                    <span class="gras">cuisine potagère locale de qualité et de saison</span>.
                    Grâce notamment à notre jolie terrasse et notre étage, nous vous accueillons dans un cadre et
                    une
                    ambiance chaleureuse et authentique.
                    Nous organisons régulièrement des <span class="gras">soirées concerts ou des expositions.</span>
                </p>
                <p>De bonnes occasions pour déguster nos planches dégustatives fournies par nos producteurs
                    locaux.
                    <span class="gras">Ecoconscient</span> , nous aurons plaisir à vous parler de nos actions pour
                    bien
                    manger et respecter notre
                    planète.
                </p>
            </div>
        </div>
        <span class="center">
            <a class="button" href="#">Découvrir le restaurant</a></span>
    </section>
</main>

<?php include "headfoot/footer.php";?>