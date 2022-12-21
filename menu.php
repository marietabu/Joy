<?php
$pageactive = "menu.php";
$title = "Menu | Joy";
$stylepage = "menu.css";
require "headfoot/head.php";require "headfoot/header.php";?>
<!-- MAIN -->
<Main>
    <!-- Barre secondaire interne -->
    <div id="nav-bar2" center>
        <ul class="nav2">
            <li><a class="nav2-items" href="#aperitifs">Apéritifs</a></li>
            <li><a class="nav2-items" href="#entrees">Entrées</a></li>
            <li><a class="nav2-items" href="#plats">Plats</a></li>
            <li><a class="nav2-items" href="#desserts">Desserts</a></li>
            <li><a class="nav2-items" href="#boissons">Boissons</a></li>
        </ul>
    </div>

    <div class="flex center">
        <section id="menu">
            <h1 id="aperitifs" class="h1-dancing">Menu</h1>
            <h2 class="center">A la carte cette semaine</h2>
            <table>
                <!-- Bloc -->
                <tr>
                    <th id="aperitifs">Apéritifs</th>
                </tr>
                <tr>
                    <td>Coupe de champagne (12cl)</td>
                    <td class="prix">5,00</td>
                </tr>
                <tr>
                    <td>Cocktail de fruits bio (20cl)</td>
                    <td class="prix">6,20</td>
                </tr>
                <tr>
                    <td>Cocktail de fruits bio sans alcool</td>
                    <td class="prix">5,50</td>
                </tr>
                <tr>
                    <td>Gin tonic (18cl)</td>
                    <td class="prix">4,50</td>
                </tr>
                <!-- BLOC -->
                <tr>
                    <th id="entrees">Entrées</th>
                </tr>
                <tr>
                    <td>Pain à l’ail et salade</td>
                    <td class="prix">3,00</td>
                </tr>
                <tr>
                    <td>Carpaccio de champignons</td>
                    <td class="prix">5,50</td>
                </tr>
                <tr>
                    <td class="descrip">Cèpes et champignons de Paris, basilic et citron caviar</td>
                </tr>
                <tr>
                    <td>Salade mixte</td>
                    <td class="prix">4,20</td>
                </tr>
                <tr>
                    <td class="descrip">Salade, tomate, oignons, huile d’olive, vinaigrette</td>
                </tr>
                <tr>
                    <td>Assiette du soleil</td>
                    <td class="prix">4,90</td>
                </tr>
                <tr>
                    <td class="descrip">Assortiment de légumes grillés et mozzarella</td>
                </tr>
                <!-- BLOC -->
                <tr>
                    <th id="plats">Plats</th>
                </tr>
                <tr>
                    <td>Tournedos de boeuf grillé</td>
                    <td class="prix">15,90</td>
                </tr>
                <tr>
                    <td class="descrip">Sauce au poivre et légumes du moment</td>
                </tr>
                <tr>
                    <td>Cannelloni de butternut</td>
                    <td class="prix">12,00</td>
                </tr>
                <tr>
                    <td class="descrip">Emulsion à la noix de muscade</td>
                </tr>
                <tr>
                    <td>Tartare de saint-jacques aux échalottes roties et concombres</td>
                    <td class="prix">14,50</td>
                </tr>
                <!-- BLOC -->
                <tr>
                    <th id="desserts">Desserts</th>
                </tr>
                <tr>
                    <td>Assortiment de fromages</td>
                    <td class="prix">5,00</td>
                </tr>
                <tr>
                    <td>Clafoutis aux poires, pommes et romarin</td>
                    <td class="prix">3,50</td>
                </tr>
                <tr>
                    <td>Moelleux au chocolat</td>
                    <td class="prix">4,50</td>
                </tr>
                <tr>
                    <td class="descrip">Sans gluten</td>
                </tr>
                <tr>
                    <td>Crumble de pommes</td>
                    <td class="prix">3,00</td>
                </tr>
            </table>

            <h2 id="boissons" class="center">Boissons</h2>
            <table>
                <!-- Bloc -->
                <tr>
                    <th>Boissons froides</th>
                </tr>
                <tr>
                    <td>Détox au gingembre</td>
                    <td class="prix">2,60</td>
                </tr>
                <tr>
                    <td>Bière Bio</td>
                    <td class="prix">4,00</td>
                </tr>
                <tr>
                    <td class="descrip">Blanche, blonde, brune</td>
                </tr>
                <tr>
                    <th>Boissons chaudes</th>
                </tr>
                <tr>
                    <td>Expresso</td>
                    <td class="prix">1,50</td>
                </tr>
                <tr>
                    <td>Café allongé</td>
                    <td class="prix">2,00</td>
                </tr>
                <tr>
                    <td>Thé blanc de Fujian</td>
                    <td class="prix">2,30</td>
                </tr>
                <tr>
                    <td class="descrip">Notes florales et fruitées</td>
                </tr>
                <tr>
                    <td>Thé noël du Népal</td>
                    <td class="prix">2,40</td>
                </tr>
                <tr>
                    <td class="descrip">Notes végétales et fruitées</td>
                </tr>
            </table>
    </div>
    </section>
    <span class="flex center">
        <a class="button" href="contact.html">Réserver</a>
    </span>
    <!-- SCROOL TO TOP-->
    <div id="scroll_to_top">
        <a href="#top"><img src="img/mdi_chevron-up-box.png" alt="Retourner en haut" /></a>
    </div>
</Main>
<!-- FOOTER & fin -->
<?php include "headfoot/footer.php";?>