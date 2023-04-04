<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/klee-icon.png">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Films de l'acteur <?= $actor_id ?></title>
</head>
<body>
    <?php require 'templates/header.php' ?>
    <main>
        <section class="container main-section">
            <h1>Films de l'acteur <?= $actor_id ?></h1>
            <div class="item-grid">
                <?php foreach ($actor_films as $actor_film) { ?>
                    <div class="item actor-item">
                        <h2><?= $actor_film->title ?></h2>
                        <p><?= $actor_film->description ?></p>
                        <p>Année de sortie : <?= $actor_film->release_year ?></p>
                        <p>Note : <?= $actor_film->rental_rate ?>/5</p>
                    </div>
                <?php } ?>
            </div>
        </section>
    </main>
</body>
</html>