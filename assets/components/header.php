<?php require_once('assets/components/inc/function.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quentin De Andrade - Développeur Web</title>
    <meta name="description" content="Portfolio de Quentin De Andrade développeur web Junior disponible et motivé">
    <meta property="og:site_name" content="Quentin De Andrade - Développeur Web">
    <meta property="og:description" content="Portfolio de Quentin De Andrade développeur web Junior disponible et motivé">
    <meta property="og:url" content="https://quentindeandrade.fr">
    <meta property="og:image" content="quentindeandrade.fr/assets/img/logo.png">
    <meta property="author" content="Quentin De Andrade">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script rel="shortcut icon" src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="assets/css/nav.css">

</head>
<body>
    <div class="container">
        <nav class="navbar">
            <div class="content">
                <ul class="menu-list">
                    <div class="icon cancel-btn">
                        <i class="fas fa-times"></i>
                    </div>
                    <li><a href="index.php"><?php echo (langEN()) ? "Home" : "Accueil"; ?></a></li>
                    <li><a href="about.php"><?php echo (langEN()) ? "About Me" : "À propos"; ?></a></li>
                    <li><a href="work.php"><?php echo (langEN()) ? "Work" : "Mes Projets"; ?></a></li>
                    <li><a href="contact.php"><?php echo (langEN()) ? "Contact" : "Me Contacter"; ?></a></li>
                    <li><a href="index.php?lang=<?php echo (langEN()) ? "fr" : "en" ?>"><img src="assets/img/<?php echo (langEN()) ? "english" : "france"; ?>.svg" alt="" class="flag"></a></li>
                </ul>
                <div class="icon menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>

    
