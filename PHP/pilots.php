<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index, follow">
    <title>Les Pilotes de l'association</title>
    <meta name="description" content="Les pilotes du team sarthois Plein Gaz 72" />
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
    <link rel="icon" type="image/vnd-icon" href="../assets/image/logo.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/custom.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Graduate&family=Roboto&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/f30ebbf9c0.js" crossorigin="anonymous" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
    <script src="../JS/burger.js" defer></script>
</head>

<body class="flux grid">

    <!-- Header : fichier scss = header.scss -->
    <?php require_once __DIR__ . '/component/header.php'; ?>


    <main class="main flux bg-dark">
        <h1>Les Pilotes du Team sarthois Plein Gaz 72</h1>
        <article class="allPilots">
            <section class="card">
                <div class="card__front">
                    <!-- click on image to show modal -->
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#palmaresVincent">
                        <img class="card__front--img" src="../assets/image/pilotes/Vincent_Bridel.jpg" alt="Photo du Pilote et fondateur du team Plein Gaz 72 Vincent Bridel " />
                    </button>
                    <h2 class="card__front--name">Vincent BRIDEL</h2>
                </div>
                <div class="modal fade" id="palmaresVincent" tabindex="-1" aria-labelledby="palmaresVincentLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content bg-dark">
                            <div class="modal-header">
                                <h2 class="modal-title fs-5" id="palmaresVincentLabel">
                                    Vincent Bridel
                                </h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body mx-auto">
                                <img class="card__modal--palmares" src="../assets/image/pilotes/Palmares/P_Vincent.jpg" alt="Vincent Bridel En 2011 il crée Team Plein Gaz 72. Avec le team 2018 12h de Magny Cours, 2019 24h de Barcelone, 2021 Ultimate Cup Le Mans et Le Vigeant, 2022 24h de Barcelone" />
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
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
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#palmaresNicolas">
                        <img class="card__front--img" src="../assets/image/pilotes/Nicolas_Therouin.jpg" alt="Photo du pilote Nicolas THEROUIN" />
                    </button>
                    <h2 class="card__front--name">Nicolas THEROUIN</h2>
                </div>
                <div class="modal fade" id="palmaresNicolas" tabindex="-1" aria-labelledby="palmaresNicolasLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content bg-dark">
                            <div class="modal-header">
                                <h2 class="modal-title fs-5" id="palmaresNicolasLabel">
                                    Nicolas THEROUIN
                                </h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body mx-auto">
                                <img class="card__modal--palmares" src="../assets/image/pilotes/Palmares/P_Nicolas.jpg" alt="Nicolas Therouin Pilote depuis 2006. 2014 Coupe Pirelli Supersport 4ème, 2016 24h du Mans 15ème Superstock et de Barcelone 3ème EWC, 2018 et 2019 Bol d'Or et 23 heures 60, 2021 Ultimate Cup 600 4ème place. 2022 et 2023 24h de Barcelone, 24h de la Réunion 1ère place, IRRC Belgique, Allemagne, République Tchèque et Finale Trophée Toadster à Estoril" />
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
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
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#palmaresHerve">
                        <img class="card__front--img" src="../assets/image/pilotes/Herve_Cheron.jpg" alt="Photo du pilote Herve CHERON" />
                    </button>
                    <h2 class="card__front--name">Herve CHERON</h2>
                </div>
                <div class="modal fade" id="palmaresHerve" tabindex="-1" aria-labelledby="palmaresHerveLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content bg-dark">
                            <div class="modal-header">
                                <h2 class="modal-title fs-5" id="palmaresHerveLabel">
                                    Herve CHERON
                                </h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body mx-auto">
                                <img class="card__modal--palmares" src="../assets/image/pilotes/Palmares/P_Herve.jpg" alt="Hervé Cheron Pilote depuis 2006 2009 à 2011 coupe Ducati et courses Championnat de France Endurance, 2011 à 2020 Championnat de France Superbike 23h60 8 fois vainqueur, Coupe O3Z 600 et 1000 Plus de 10 victoires et 3ème place au championnat. 2018 24h du Mans et au Bol d'Or. 2022 24h de Barcelone" />
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
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
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#palmaresMathieu">
                        <img class="card__front--img" src="../assets/image/pilotes/Mathieu_Bouvier.jpg" alt="Photo du pilote Mathieu BOUVIER" />
                    </button>
                    <h2 class="card__front--name">Mathieu BOUVIER</h2>
                </div>
                <div class="modal fade" id="palmaresMathieu" tabindex="-1" aria-labelledby="palmaresMathieuLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content bg-dark">
                            <div class="modal-header">
                                <h2 class="modal-title fs-5" id="palmaresMathieuLabel">
                                    Mathieu BOUVIER
                                </h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body mx-auto">
                                <img class="card__modal--palmares" src="../assets/image/pilotes/Palmares/P_Mathieu.jpg" alt="Mathieu Bouvier Pilote depuis 2015. 2017 et 2018 Ultimate Cup 600cc 2 podiums. 2021 VIP Race Noire 1000cc podium et 23h60. 2022 Champion de ligue catégorie 15 ch 25 Power, 1er 24h de Rouen catégorie électrique et 24h de Barcelone" />
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
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
    <?php require_once __DIR__ . '/component/footer.php'; ?>

</body>

</html>