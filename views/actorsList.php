<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/klee-icon.png">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Liste des acteurs</title>
</head>
<body>
    <?php require 'templates/header.php' ?>
    <main>
        <section class="container main-section">
            <h1>Liste des acteurs</h1>
            <div class="item-grid">
                <?php foreach ($actors as $actor) { ?>
                    <div class="item small-item">
                        <h2><?= $actor->first_name ?> <?= $actor->last_name ?></h2>
                        <div class="button-div">
                            <a href="http://localhost/sql/TD_01_PDO_sakila/?page=actor_films&actor_id=<?= $actor->actor_id ?>" class="button">Voir page</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    </main>
</body>
</html>