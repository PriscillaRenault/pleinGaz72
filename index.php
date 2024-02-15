<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/custom.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Graduate&family=Roboto&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/f30ebbf9c0.js" crossorigin="anonymous"></script>
    <title>Plein Gaz 72</title>
</head>

<body class="flux">

    <?php
    require "/wamp64/www/pleinGaz72/php/header.php"
    ?>

    <!-- main  fichier scss = home.scss-->
    <main class="main">
        <img class="main__teamPhoto" src="/assets/image/team_paysage.JPG" alt="Tout le team" />

        <div>
            <div class="main__teamPresentation">
                <div>
                    <h1>Présentation de l'association</h1>

                    <br />

                    <p>
                        Avant d'être un team, nous sommes des amis. La course n'est pas
                        notre métier mais notre passion. Certains travaillent dans le BTP
                        l'industrie ou la restauration, certains dans la mécanique car la
                        course necessite malgré tout des compétences.
                    </p>
                    <p>
                        <!-- TODO Text presentation association -->
                        L'objectif du Team Plein Gaz 72 est d'évoluer sur les courses du
                        championnat d'Europe d'endurance en catégorie SuperStock.
                    </p>
                    <br />
                    <p>
                        Notre team sera présent aux 24h motos au Mans du 18 au 21 avril
                        2024 pour la premiere session des epreuves d'endurance...
                    </p>
                    <p>
                        « La vraie réussite d’une équipe c’est d’assurer la compétitivité
                        dans la pérennité »
                    </p>
                </div>
                <div class="main__divMotoPhoto">
                    <img src="../../assets/image/moto_officiel_paysage.JPG" alt="Moto officielle" class="main__motoPhoto" />
                </div>
            </div>
        </div>
    </main>
    <!-- footer fichier footer = footer.scss + bootstrap -->
    <?php
    require "/wamp64/www/pleinGaz72/php/footer.php"
    ?>
    <script src="https://kit.fontawesome.com/f30ebbf9c0.js" crossorigin="anonymous"></script>
    <script src="/JS/script.js"></script>
</body>

</html>