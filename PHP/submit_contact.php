<?php
// recovery contact form

$postData = $_POST;

// récupération des valeurs de l'attribut name
if (
    !isset($postData['email'])
    || !filter_var($postData['email'], FILTER_VALIDATE_EMAIL)
    || empty($postData['message'])
    || trim($postData['message']) === ''
) {
    echo ('Il faut un email et un message valides pour soumettre le formulaire.');
    return;
}

$retour = mail('pleingaz72@gmail.com', 'Envoi depuis la page Contact', $postData['message'], $postData['email']);
?>



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

<body>
    <main class="container">

        <?php require_once(__DIR__ . '/component/header.php'); ?>
        <h1 class="text-dark">Message bien reçu !</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-light">Rappel de vos informations</h5>
                <p class="card-text"><b>Email</b> : <?php echo ($postData['email']); ?></p>
                <p class="card-text"><b>Message</b> : <?php echo (strip_tags($postData['message'])); ?></p>
            </div>
        </div>
    </main>

    <?php require_once __DIR__ . '/component/footer.php'; ?>
</body>

</html>