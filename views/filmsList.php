<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/klee-icon.png">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Liste des films</title>
</head>
<body>
    <?php require 'templates/header.php' ?>
    <main>
        <section class="container main-section">
            <h1>Liste des films</h1>
            <div class="item-grid">
                <?php foreach ($films as $film) { ?>
                    <div class="item">
                        <h2><?= $film->title ?></h2>
                        <p><?= $film->description ?></p>
                        <p>Année de sortie : <?= $film->release_year ?></p>
                        <p>Durée : <?= $film->length ?> min</p>
                        <p>Note : <?= $film->rental_rate ?>/5</p>
                        <p><?= $film->special_features ?></p>
                    </div>
                <?php } ?>
            </div>
        </section>
    </main>
</body>
</html>