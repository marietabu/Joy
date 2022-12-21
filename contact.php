<?php
$pageactive = "contact.php";
$stylepage = "contact.css";
$title = "Contact | Joy";
include "headfoot/head.php";include "headfoot/header.php";?>
<!-- MAIN -->
<main>
    <h1 class="h1-dancing">Informations</h1>
    <section class="grid-contact">
        <div class="card-contact">
            <img class="icone" src="img/ic_baseline-local-phone.png" alt="Icone lieu">
            <h2 class="vert-c">Réservation</h2>
            <p class="center">06.12.34.56.78</p>
        </div>
        <div class="card-contact">
            <img class="icone" src="img/Mail.png" alt="Icone lieu">
            <h2 class="vert-c">Contactez-nous</h2>
            <a class="center" href="mailto:contact@joy-restaurant.fr">contact@joy-restaurant.fr</a>
        </div>
        <div class="card-contact ">
            <img class="icone" src="img/mdi_access-time.png" alt="Icone time">
            <h2 class="vert-c">Horaires</h2>
            <p>Ouvert du mardi au dimanche</p>
            <p>12h00 - 14h30 <br>
                19h00 - 23h30</p>
        </div>
        <div class="center">
            <h2 class="center vert-c">Suivez-nous</h2>
            <a href="#"><img class="ico-res" src="img/facebook.png" alt="Icone Facebook"></a>
            <a href="#"><img class="ico-res" src="img/instagram.png" alt="Icone Instagram"></a>
            <a href="#"><img class="ico-res" src="img/Tripadvisor.png" alt="Icone Tripadvisor"></a>
        </div>
    </section>
    <section class="card-contact ">
        <div class="adr center">
            <img class="icone" src="img/Lieu icon.png" alt="Icone lieu">
            <h2 class="center vert-c">Adresse</h2>
            <p class="center ">30 Place du martroi<br>45000 ORLEANS</p>
            <h2 class=" center vert-c plan-acc">Plan d'accès</h2>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2674.7436559256694!2d1.9024828150706923!3d47.90264667547405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e4e4d4760ab9d5%3A0xe60f1bc6aa6b045b!2sPl.%20du%20Martroi%2C%2045000%20Orl%C3%A9ans!5e0!3m2!1sfr!2sfr!4v1670535987593!5m2!1sfr!2sfr"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </section>
    <!-- SCROOL TO TOP
    <div id="scroll_to_top">
        <a href="#top"><img src="img/mdi_chevron-up-box.png" alt="Retourner en haut" /></a>
    </div> -->
</main>

<!-- FOOTER -->
<?php include "headfoot/footer.php";?>