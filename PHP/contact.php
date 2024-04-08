<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Plein Gaz 72</title>

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
    <?php require_once __DIR__ . '/PHP/component/header.php'; ?>


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
            <!-- via le formulaire ci dessous ou -->
            par mail
            <a href="mailto:pleingaz72@gmail.com"> Plein Gaz 72</a>
        </p>
        <div class="container">
            <!-- <form
                    method="post"
                    class="col-12 col-md-6 mx-auto p-3 mb-4 bg-light border border-primary rounded"
                >
                    <div class="form-group row my-3 d-flex align-items-center">
                        <label
                            for="email"
                            class="text-center col-sm-2 col-form-label"
                            >Email :
                        </label>
                        <div class="col-sm-9">
                            <input
                                type="email"
                                id="email"
                                placeholder="email@example.com"
                            />
                        </div>
                        <small class="form-text text-secondary"
                            >Juste pour que l'on puisse vous répondre... Nous ne
                            diffuserons jamais votre email à un tiers.</small
                        >
                    </div>
                    <div class="form-group row my-3">
                        <label for="message" class="col-sm-3 my-2"
                            >votre message :
                        </label>
                        <div class="col-sm-9">
                            <textarea
                                class="form-control py-2"
                                id="message"
                                rows="3"
                            ></textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-auto">
                        <button type="submit" class="btn btn-primary my-3">
                            Submit
                        </button>
                    </div>
                </form> -->
        </div>
    </main>
    <!-- footer fichier footer = footer.scss + bootstrap -->
    <?php require_once __DIR__ . '/PHP/component/header.php'; ?>

</body>

</html>