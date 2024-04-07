<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="icon" type="image/x-icon" href="../assets/image/logo.jpeg" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="../assets/css/custom.css" />
        <link rel="stylesheet" href="../assets/css/style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Graduate&family=Roboto&display=swap"
            rel="stylesheet"
        />
        <script
            src="https://kit.fontawesome.com/f30ebbf9c0.js"
            crossorigin="anonymous"
            defer
        ></script>
        <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            defer
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"
            defer
        ></script>
        <script src="../JS/burger.js" defer></script>
    </head>
    <body class="flux grid">
        <!-- Header : fichier scss = header.scss -->
        <header>
            <nav class="nav">
                <!-- logo -->
                <img
                    src="../assets/image/logo.jpeg"
                    alt="logo Team Plein Gaz 72"
                    class="nav__logo"
                />
                <!-- Menu -->
                <ul class="nav__menuList inactive" id="js-menuList">
                    <li>
                        <a href="../index.html">Accueil</a>
                    </li>
                    <li>
                        <a href="./events.html">Nos évènements</a>
                    </li>
                    <li>
                        <a href="./pilots.html">Nos pilotes</a>
                    </li>

                    <!-- <li>
                        <a href="./team.html">Le ❤️ de Team</a>
                    </li> -->
                    <li>
                        <a href="./contact.html">Contact</a>
                    </li>
                </ul>
                <!-- icone burger menu -->
                <i class="fa-solid fa-bars icons--bars fa-xl" id="js-Open"></i>

                <i
                    class="fa-solid fa-xmark icons--xmark fa-xl inactive"
                    id="js-Close"
                ></i>
            </nav>
        </header>

        <main class="main flux bg-dark">
            <article class="allPilots">
                <section class="card">
                    <div class="card__front">
                        <!-- click on image to show modal -->
                        <button
                            type="button"
                            class="btn"
                            data-bs-toggle="modal"
                            data-bs-target="#palmaresVincent"
                        >
                            <img
                                class="card__front--img"
                                src="../assets/image/pilotes/Vincent_Bridel.jpg"
                                alt="Photo de Vincent Bridel"
                            />
                        </button>
                        <h1 class="card__front--name">Vincent BRIDEL</h1>
                    </div>
                    <div
                        class="modal fade"
                        id="palmaresVincent"
                        tabindex="-1"
                        aria-labelledby="palmaresVincentLabel"
                        aria-hidden="true"
                    >
                        <div
                            class="modal-dialog modal-lg modal-dialog-centered"
                        >
                            <div class="modal-content bg-dark">
                                <div class="modal-header">
                                    <h1
                                        class="modal-title fs-5"
                                        id="palmaresVincentLabel"
                                    >
                                        Vincent Bridel
                                    </h1>
                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                    ></button>
                                </div>
                                <div class="modal-body mx-auto">
                                    <img
                                        class="card__modal--palmares"
                                        src="../assets/image/pilotes/Palmares/P_Vincent.jpg"
                                        alt=""
                                    />
                                </div>
                                <div class="modal-footer">
                                    <button
                                        type="button"
                                        class="btn btn-secondary"
                                        data-bs-dismiss="modal"
                                    >
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="card">
                    <div class="card__front">
                        <!-- click on image to show modal -->
                        <button
                            type="button"
                            class="btn"
                            data-bs-toggle="modal"
                            data-bs-target="#palmaresNicolas"
                        >
                            <img
                                class="card__front--img"
                                src="../assets/image/pilotes/Nicolas_Therouin.jpg"
                                alt="Photo de Nicolas THEROUIN"
                            />
                        </button>
                        <h1 class="card__front--name">Nicolas THEROUIN</h1>
                    </div>
                    <div
                        class="modal fade"
                        id="palmaresNicolas"
                        tabindex="-1"
                        aria-labelledby="palmaresNicolasLabel"
                        aria-hidden="true"
                    >
                        <div
                            class="modal-dialog modal-lg modal-dialog-centered"
                        >
                            <div class="modal-content bg-dark">
                                <div class="modal-header">
                                    <h1
                                        class="modal-title fs-5"
                                        id="palmaresNicolasLabel"
                                    >
                                        Nicolas THEROUIN
                                    </h1>
                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                    ></button>
                                </div>
                                <div class="modal-body mx-auto">
                                    <img
                                        class="card__modal--palmares"
                                        src="../assets/image/pilotes/Palmares/P_Nicolas.jpg"
                                        alt=""
                                    />
                                </div>
                                <div class="modal-footer">
                                    <button
                                        type="button"
                                        class="btn btn-secondary"
                                        data-bs-dismiss="modal"
                                    >
                                        Fermer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="card">
                    <div class="card__front">
                        <!-- click on image to show modal -->
                        <button
                            type="button"
                            class="btn"
                            data-bs-toggle="modal"
                            data-bs-target="#palmaresHerve"
                        >
                            <img
                                class="card__front--img"
                                src="../assets/image/pilotes/Herve_Cheron.jpg"
                                alt="Photo de Herve CHERON"
                            />
                        </button>
                        <h1 class="card__front--name">Herve CHERON</h1>
                    </div>
                    <div
                        class="modal fade"
                        id="palmaresHerve"
                        tabindex="-1"
                        aria-labelledby="palmaresHerveLabel"
                        aria-hidden="true"
                    >
                        <div
                            class="modal-dialog modal-lg modal-dialog-centered"
                        >
                            <div class="modal-content bg-dark">
                                <div class="modal-header">
                                    <h1
                                        class="modal-title fs-5"
                                        id="palmaresHerveLabel"
                                    >
                                        Herve CHERON
                                    </h1>
                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                    ></button>
                                </div>
                                <div class="modal-body mx-auto">
                                    <img
                                        class="card__modal--palmares"
                                        src="../assets/image/pilotes/Palmares/P_Hervé.jpg"
                                        alt=""
                                    />
                                </div>
                                <div class="modal-footer">
                                    <button
                                        type="button"
                                        class="btn btn-secondary"
                                        data-bs-dismiss="modal"
                                    >
                                        Fermer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="card">
                    <div class="card__front">
                        <!-- click on image to show modal -->
                        <button
                            type="button"
                            class="btn"
                            data-bs-toggle="modal"
                            data-bs-target="#palmaresMathieu"
                        >
                            <img
                                class="card__front--img"
                                src="../assets/image/pilotes/Mathieu_Bouvier.jpg"
                                alt="Photo de Mathieu BOUVIER"
                            />
                        </button>
                        <h1 class="card__front--name">Mathieu BOUVIER</h1>
                    </div>
                    <div
                        class="modal fade"
                        id="palmaresMathieu"
                        tabindex="-1"
                        aria-labelledby="palmaresMathieuLabel"
                        aria-hidden="true"
                    >
                        <div
                            class="modal-dialog modal-lg modal-dialog-centered"
                        >
                            <div class="modal-content bg-dark">
                                <div class="modal-header">
                                    <h1
                                        class="modal-title fs-5"
                                        id="palmaresMathieuLabel"
                                    >
                                        Mathieu BOUVIER
                                    </h1>
                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                    ></button>
                                </div>
                                <div class="modal-body mx-auto">
                                    <img
                                        class="card__modal--palmares"
                                        src="../assets/image/pilotes/Palmares/P_Mathieu.jpg"
                                        alt=""
                                    />
                                </div>
                                <div class="modal-footer">
                                    <button
                                        type="button"
                                        class="btn btn-secondary"
                                        data-bs-dismiss="modal"
                                    >
                                        Fermer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
        </main>
        <!-- footer fichier footer = footer.scss + bootstrap -->
        <footer class="container-fluid text-center bg-primary mt-2">
            <ul class="row m-4">
                <li class="col m-2">
                    <a
                        class=""
                        target="_blank"
                        href="https://www.facebook.com/pleingaz.soixantedouze/?locale=fr_FR"
                        ><img
                            src="../assets/image/icons8-facebook-nouveau-50.png"
                            alt="Facebook"
                            class="networks__logo"
                    /></a>
                </li>
                <li class="col m-2">
                    <a
                        class=""
                        target="_blank"
                        href="https://www.instagram.com/plein_gaz_72/"
                    >
                        <img
                            src="../assets/image/icons8-instagram-50.png"
                            alt="Instagram"
                            class="networks__logo"
                    /></a>
                </li>
            </ul>
        </footer>
    </body>
</html>
