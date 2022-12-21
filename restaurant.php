<?php
$pageactive = "restaurant.php";
$stylepage = "resto.css";
$title = "Le restaurant | Joy";
include "headfoot/head.php";include "headfoot/header.php";?>
<!-- MAIN -->
<main>
    <div id="nav-bar2">
        <ul class="nav2">
            <li><a class="nav2-items" href="#concept">Concept</a></li>
            <li><a class="nav2-items" href="#3forces">Nos 3 forces</a></li>
            <li><a class="nav2-items" href="#equipe">L'équipe</a></li>
        </ul>
    </div>
    <!-- TITRE -->
    <h1>Le restaurant</h1>
    <!-- Barre NAV secondaire interne -->
    <div class="flex center">
        <img src="img/Logo Herbe - Principal_500.jpg" alt="Logo Joy" center cover>
    </div>
    <!-- CONCEPT -->
    <section id="concept">
        <h2 class="h2-dancing">Le concept</h2>
        <p>Situé proche du centre ville, <span class="gras">le restaurant JOY écoresponsable</span> s’engage à
            vous offrir une cuisine :</p>
        <ul>
            <li>potagère,</li>
            <li>fléxivore,</li>
            <li>local,</li>
            <li>et de saison.</li>
        </ul>
        <h3 class="h3-resto">Nos valeurs</h3>
        <ul>
            <li>Authenticité</li>
            <li>Proximité</li>
            <li>Partage</li>
            <li>Ecoconscience</li>
        </ul>
        <div>
            <h3 class="h3-resto">Notre vision</h3>
            <p>Nous souhaitons créer une communauté veillant au bien manger, à l’environnement et souhaitant se
                retrouver pour partager des moments conviviaux et authentiques.</p>
        </div>
        <div>
            <h3 class="h3-resto">Nos missions</h3>
            <ul>
                <li><span class="gras">une cuisine de qualité</span> respectant les règles du commerce
                    écoresponsable.</li>
                <li><span class="gras">Sensibiliser et informer les clients sur les gestes</span> simples à
                    adopter
                    pour préserver notre planète.</li>
                <li><span class="gras">Réunir des personnes sensibles ou intéressées par la protection de
                        l’environnement</span>, attentives à la qualité de leur alimentation et qui aiment se
                    retrouver pour partager notamment lors d’événements culturels.</li>
            </ul>
        </div>
    </section>
    <!-- NOS 3 FORCES -->
    <section id="3forces">
        <h2 class="h2-dancing">Nos 3 forces</h2>
        <div class="flex">
            <article>
                <img class="img-art" src="img/joy-restaurant1.jpg" alt="Des mains tenant des verres pour trinquer">
                <h3>Nos événements culturels</h3>
                <p>Pargeons des moments authentiques et chaleureux</p>
            </article>
            <article>
                <img class="img-art" src="img/joy-restaurant2.jpg" alt="Panier de légumes">
                <h3>Des partenaires en or !</h3>
                <h4>Consommations d’énergies réduites et recyclages</h4>
                <p>Grâce à eux, nos produits sont locaux, de saision et de quapté</p>
            </article>
            <article>
                <img class="img-art" src="img/joy-restaurant3.jpg" alt="Epluchures de légumes">
                <h3>Nos engagements écoresponsables</h3>
                <p>Parce que nous aimons notre planète, nous veillons sur elle</p>
            </article>
        </div>
    </section>

    <!-- EQUIPE -->
    <section id="equipe">
        <h2 class="h2-dancing center">Notre équipe</h2>
        <article class="flex-fix">
            <img class="img-article" src="img/joy-restaurant7.jpg" alt="Equipe qui check soudée">
            <p class="texte-intro">Tous unis, nous partageons les valeurs de Joy. Bien manger, sensible à
                l’environnement, partager et travailler ensemble dans la bonne humeur !
                Nous sommes heureux de vous accueillir avec le sourire. </p>
        </article>
        <div class="flex center">
            <div class="people-card center">
                <img class="img-profil" src="img/joy-restaurant5 (2).png" alt="Portrait d'Eric Baiton">
                <h3 class="h3-people-card">Eric Baiton</h3>
                <h4 class="h4-people-card">Responsable</h4>
                <p>Auparavant responsable d’une statup innovante dans le recyclage, Eric, également passioné de
                    cuisine, a lancé Joy avec sa femme, Stella, en septembre 2022.
                </p>
            </div>
            <div class="people-card center">
                <img class="img-profil" src="img/joy-restaurant5 (1).png" alt="Portrait Stella Latapate">
                <h3 class="h3-people-card">Stella Latapate</h3>
                <h4 class="h4-people-card">Responsable</h4>
                <p>Stella a toujours exploité ses talents en marketing dans le domaine de l’environnement. C’est
                    pourquoi, elle s’est investie avec joie dans le projet Joy.</p>
            </div>
            <div class="people-card center">
                <img class="img-profil" src="img/joy-restaurant6.jpg" alt="Portrait de Sébastien Seibon">
                <h3 class="h3-people-card">Sébastien Seibon</h3>
                <h4 class="h4-people-card">Chef cuisinier</h4>
                <p>Sébastien est très fier d’intégrer l’équipe Joy. En accord avec les valeurs du restaurant, il
                    s’épanouit avec son équipe et leurs partenaires dans la création d’assiettes qualitatives,
                    de
                    saison en mariant le goût et l’originalité.</p>
            </div>
        </div>
    </section>

    <!-- RESEAUX SOCIAUX -->
    <div class="res-soc-mob">
        <div class="flex-row ">
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
<!-- FOOTER & fin -->
<?php include "headfoot/footer.php";?>