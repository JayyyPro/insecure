<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Insecure</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="home.js"></script>
</head>

<body>
    <!-- DEBUT DE LA BARRE DE NAVIGATION -->
    <nav>
        <div class="logo">
            <img src="../nav-bar/DALL_E_2022-10-15_11.35.52-removebg-preview.png" 
            alt="logo" width="150" height="75" onclick="window.location='home.php'">
            <h1 onclick="window.location='home.php'">Insecure</h1>
        </div>
        <div class="search-bar">
            <form>
                <input id="search" type="search" placeholder="Rechercher" onkeyup="printSneakersResearch(this.value)">
            </form>
        </div>
        <div class="menu">
            <h3 onclick="printSneakersResearch('dunk low')">Dunk Low</h3>
            <h3 onclick="printSneakersResearch('jordan 4')">Jordan 4</h3>
            <h3 onclick="printSneakersResearch('')">Sneakers</h3>
        </div>
    </nav>
    <!-- FIN DE LA BARRE DE NAVIGATION -->

    <!-- DEBUT DE LA CLASSE PRINCIPALE -->
    <div class="main">
        <!--  -->
        <!-- DEBUT DES CARTES -->
        <div id="cartes">
            <!-- DEBUT DE LA GENERATION DE SNEAKERS-->
            <?php
                include_once('../query/query_all_sneakers.php');
            ?>
            <!-- FIN DE LA GENERATION DE SNEAKERS -->
        </div>
    </div>
    <!-- FIN DES CARTES -->
    </div>
    <!-- FIN DE LA CLASSE PRINCIPALE -->

    <!-- DEBUT DU FOOTER -->
    <footer>
        <p>&copy; Insecure - 2022 - Tous droits réservés</p>
        <p><img src="../footer/twitter.png" width="25" height="25"></p>
    </footer>
    <!-- FIN DU FOOTER -->
</body>

</html>
