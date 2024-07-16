<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index, follow">
    <title>Contacter l'association sarthoise Team Plein Gaz 72</title>
    <meta name="description" content="Vous voulez soutenir notre projet dans les courses d'endurance motos, contactez-nous !">
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
    <link rel="icon" type="image/x-icon" href="../assets/image/logo.jpeg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/custom.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <script src="https://kit.fontawesome.com/f30ebbf9c0.js" crossorigin="anonymous" defer></script>
    <script src="../JS/burger.js" defer></script>
</head>

<body class="flux grid">
    <!-- Header : fichier scss = header.scss -->
    <?php require_once __DIR__ . '/component/header.php'; ?>


    <main class="container contact bg-dark">
        <div class="row">
            <h1 class="p-5">Soutenez-Nous !!!</h1>
        </div>
        <p>
            Vous souhaitez nous soutenir dans ce projet ?
            <!-- Nous proposons à la vente différents articles :
            </p>
            <div class="row">
                <ul class="list-group p-3 col col-md-6 mx-auto">
                    <li class="list-group-item bg-dark text-center text-light">
                        T-shirts
                    </li>
                    <li class="list-group-item bg-dark text-center text-light">
                        Casquettes
                    </li>
                    <li class="list-group-item bg-dark text-center text-light">
                        Pièces détachées
                    </li>
                </ul>
            </div> -->
        </p>

        <p class="my-4">
            Pour toute demande, n'hésitez pas à nous contacter
            via le formulaire ci dessous ou
            par mail
            <a href="mailto:pleingaz72@gmail.com"> Team Plein Gaz 72</a>
        </p>
        <div class="container">
            <form action="submit_contact.php" method="post" class="col col-md-6 mx-auto my-3 bg-light border border-primary rounded">
                <div class="form-group row my-3 d-flex ">
                    <label for="email" class="text-center col-sm-2 col-form-label">Email :
                    </label>
                    <div class="col-sm-9">
                        <input type="email" id="email" name="email" class="form-control" placeholder="email@example.com" />
                    </div>
                    <small class="form-text text-secondary mx-3 col-sm-9">Juste pour que l'on puisse vous répondre...<br> Nous ne
                        diffuserons jamais votre email à un tiers.</small>
                </div>
                <div class="form-group row my-3 d-flex">
                    <label for="message" class="col-sm-2 m-2 text-center">Votre message :
                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control py-2 m-2" id="message" name="message" rows="4"></textarea>
                    </div>
                </div>
                <div class="d-flex justify-content-center mx-auto">
                    <button type="submit" class="btn btn-primary my-3">
                        Envoyer
                    </button>
                </div>
            </form>
        </div>
    </main>
    <!-- footer fichier footer = footer.scss + bootstrap -->
    <?php require_once __DIR__ . '/component/footer.php'; ?>

</body>

</html>