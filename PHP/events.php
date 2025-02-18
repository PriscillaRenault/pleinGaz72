<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index, follow">

    <title>Les évènements auxquels vont participer le team Plein Gaz 72</title>
    <meta name="description" content="Le team Plein Gaz 72 participe à des courses d'endurance. Retrouvez ici le calendrier des courses motos auxquelles nous participons.">
    <link rel="icon" type="image/vnd-icon" href="../assets/image/logo.ico" />
    <!-- Google analytics (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4BFC7QM9CD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-4BFC7QM9CD');
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/custom.css" />
    <link rel="stylesheet" href="../assets/CSS/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <script src="https://kit.fontawesome.com/f30ebbf9c0.js" crossorigin="anonymous" defer></script>
    <script src="../JS/burger.js" defer></script>
</head>

<body class=" grid">

    <!-- Header : fichier scss = header.scss -->
    <?php require_once __DIR__ . '/component/header.php'; ?>

    <main class="container bg-dark">
        <h1 class="p-3 my-5">Calendrier Endurance EWC 2024</h1>

        <p>
            Nous serons présents lors des 24 heures Motos. N'hésitez pas à
            venir nous encourager !!!
        </p>

        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <table class="col-md-8 mx-auto table table-responsive table-secondary border border-primary mt-5">
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <!-- footer fichier footer = footer.scss (size icon) + bootstrap -->
    <?php require_once __DIR__ . '/component/footer.php'; ?>

</body>

</html>