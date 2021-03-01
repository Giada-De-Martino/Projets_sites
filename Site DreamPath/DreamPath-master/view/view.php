<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $pageTitle; ?></title>
    <link rel="shortcut icon" href="./logo.png">
    <link rel="stylesheet" href="./Style.css" />
</head>
    <body>
            <header>
            <div class="conteneur">
                <h1 id="logo"><a href="./index.php?action=readAccueil&controller=page"><img src="./logo.png" alt="logo" />DreamPath</a></h1>
                
                <h2>Vers le chemin des rêves...</h2>
            </div>
            <nav>   
            <?php $idClient = ControllerClient::compte();
            
            ?>       
                <ul id="menu">
                    <a href="./index.php?action=readAccueil&controller=page">Accueil</a>
                    <a href="./index.php?action=readInfosNous&controller=page">Qui sommes-nous ?</a>
                    <a href="./index.php?action=readAll&controller=produit">Boutique</a>

                    <?php   if(isset($_SESSION['pseudo'])){
                        echo '<a href="./index.php?action=logout&controller=client">Déconnexion</a>';
                    }else{
                        echo '<a href="./index.php?action=login&controller=client">Identification/Inscription</a>';
                        echo '<a href="./index.php?action=create&controller=client">Créer un compte </a>';
                    }
                    ?>
                    <a href="./index.php?action=readContacter&controller=page">Nous Contacter</a>
                    <a href="./index.php?action=read&controller=client&idClient=<?php echo $idClient ?>">Mon Compte</a>

                </ul>
            </nav>

    </header>
    <?php

// Si $controleur='voiture' et $view='list',
// alors $filepath="/chemin_du_site/view/voiture/list.php"
    $filepath = File::build_path(array("view", static::$object, "$view.php"));
    require $filepath;
    ?>

<footer>
                    <div class="conteneur">
                        <a href="./index.php?action=readInfosNous&controller=page">Qui sommes-nous? /</a>
                        <a href="./index.php?action=readContacter&controller=page">Nous contacter /</a>
                        <a href="./index.php?action=readAll&controller=produit">Boutique</a>
                    </div>
                    <p>
                        Site officiel DreamPath | Projet Web S3 IUT Informatique Montpellier<br>
                        DE MARTINO Giada Flora - NGUYEN Thi Christine - PLANCHE Benoit - SERRANO Léa
                    </p>
            </footer>
    </body>
</html>