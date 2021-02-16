<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;1,500;1,600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="./public/Css/index.css">
    <link rel="stylesheet" href="./public/Css/rdv.css">
    <link rel="stylesheet" href="./public/Css/planning.css">
    <link rel="stylesheet" href="./public/Css/rdv.post.css">
    <link rel="stylesheet" href="./public/Css/annuler.css">
    <title><?= $title ?></title>
</head>

<body>
    <div id="overlay">
        <div id="menu_mobile">
            <i class="fas fa-times fa-4x" id="close_menu"></i>
            <ul>
                <li><a class="link_menu" href="index.php">Accueil</a></li>
                <li><a class="link_menu" href="#a_propos">A propos</a></li>
                <li><a class="link_menu" href="#services">Services</a></li>
                <li><a class="link_menu" href="#galerie">Galeries</a></li>
                <li><a class="link_menu" href="#contact">Contact</a></li>
                <div class="li_rdv">
                    <li>
                        <a href="#">RDV</a>
                        <div class="menu_rdv" style="display: none;">
                            <ul>
                                <li><a href="index.php?motif=planning">Prendre RDV</a></li>
                                <li><a href="index.php?motif=getAnnuler">Annuler Rdv</a></li>
                            </ul>
                        </div>
                    </li>
                </div>
            </ul>
        </div>
    </div>
    <header>
        <div id="for_mobile">
            <div class="logo">Cutsy Barbershop</div>
            <div class="hamburger" id="open_menu"><i class="fas fa-bars fa-2x"></i></div>
        </div>
        <div id="for_desktop">
            <div class="logo">Cutsy Barbershop</div>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="#a_propos">A propos</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#galerie">Galeries</a></li>
                <li><a href="#contact">Contact</a></li>
                <div class="li_rdv">
                    <li>
                        <a href="">RDV</a>
                        <div class="menu_rdv" style="display: none;">
                            <ul>
                                <li><a href="index.php?motif=planning">Prendre RDV</a></li>
                                <li><a href="index.php?motif=getAnnuler">Annuler Rdv</a></li>
                            </ul>
                        </div>
                    </li>
                </div>

            </ul>

        </div>
    </header>
    <?= $content ?>
    <footer>
        <div id="contact">
            <div id="contact_overlay">
                <h2>Contact</h2>
                <div id="contact_content">
                    <h3>Barber shop <span>CUTSY</span></h3>
                    <p>06 18 19 29 82</p>
                    <ul>
                        <li>
                            <a href="#"><i class="fab fa-2x fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-2x fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-2x fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <p id="auteur">By Kisseime TEVOT</p id="auteur">
    </footer>
    <script src="./public/Js/index.js"></script>
</body>

</html>