<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Plein Gaz 72</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/custom.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Graduate&family=Roboto&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/f30ebbf9c0.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php
    require "/wamp64/www/pleinGaz72/php/header.php";
    ?>
    <main class="container bg-dark">
        <!-- TODO TABLE OF RACE -->

        <h1 class="p-3 my-5">Calendrier Endurance EWC 2024</h1>

        <p>
            Les courses d'endurance EWC 2024 se dérouleront selon le calendrier ci
            dessous.
        </p>
        <p>
            De notre coté, nous serons présents uniquement lors des 24 heures Motos.
            N'hésitez pas à venir nous encourager !!!
        </p>

        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <table class="col-md-8 mx-auto table table-responsive table-secondary border border-primary border-rounded mt-5">
                        <thead>
                            <tr class="text-center">
                                <th>Manche</th>
                                <th>Date de la Manche</th>
                                <th>Course</th>
                                <th>Lieu de la course</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-primary text-center">
                                <th>1<sup>ère</sup> manche</th>
                                <td>20-21 Avril 2024</td>
                                <td>24 Heures Motos</td>
                                <td>Le Mans - France</td>
                            </tr>
                            <tr class="text-center">
                                <th>2<sup>ème</sup> manche</th>
                                <td>8 juin 2024</td>
                                <td>8 Heures de Spa</td>
                                <td>Spa - Belgique</td>
                            </tr>
                            <tr class="text-center">
                                <th>3<sup>ème</sup> manche</th>
                                <td>21 juillet 2024</td>
                                <td>8 Heures de Suzuka</td>
                                <td>Suzuka - Japon</td>
                            </tr>
                            <tr class="text-center">
                                <th>4<sup>ème</sup> manche</th>
                                <td>14-15 septembre 2024</td>
                                <td>Bol d'Or</td>
                                <td>Le Castellet - France</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <!-- footer -->
    <?php
    require "/wamp64/www/pleinGaz72/php/footer.php";
    ?>
    <script src="https://kit.fontawesome.com/f30ebbf9c0.js" crossorigin="anonymous"></script>
    <script src="/JS/script.js"></script>
</body>

</html>