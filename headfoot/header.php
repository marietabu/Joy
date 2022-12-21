<header>
    <nav class="nav-header">
        <a href="index.php"><img id="logo" src="img/Logo Herbe - Principal_150.jpg" alt=""></a>
        <div class="burger">
            <span></span>
        </div>
        <ul class="nav-items">
            <li><a <?php if ($pageactive == "restaurant.php") {
    echo 'id="page-active"';
}
?> href="restaurant.php">Le restaurant</a></li>
            <li><a <?php if ($pageactive == "menu.php") {
    echo 'id="page-active"';
}
?>href="menu.php">Menu</a></li>
            <li><a <?php if ($pageactive == "ecoresponsable.php") {
    echo 'id="page-active"';
}
?>href="ecoresponsable.php">Ecoresponsable</a></li>
            <li><a <?php if ($pageactive == "partenaires.php") {
    echo 'id="page-active"';
}
?> href="partenaires.php">Partenaires</a></li>
            <li><a <?php if ($pageactive == "evenements.php") {
    echo 'id="page-active"';
}
?> href="evenements.php">Evénements</a></li>
            <li><a <?php if ($pageactive == "contact.php") {
    echo 'id="page-active"';
}
?>href="contact.php">Contact</a></li>
        </ul>
    </nav>
</header>