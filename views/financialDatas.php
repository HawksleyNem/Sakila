<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/klee-icon.png">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Données financières</title>
</head>
<body>
    <?php require 'templates/header.php' ?>
    <main>
        <section class="container main-section">
            <h1>Données financières</h1>
            <div class="item-grid">
                <?php foreach ($stores as $key=>$store) { ?>
                    <div class="item small-item">
                        <h2><?= $store->address ?></h2>                      
                        <p>Chiffres d'affaires : <?= $sales[$key]->ca ?></p>
                        <p>Total de films : <?= $filmsTotal[$key]->Total_de_films ?></p>
                    </div>
                <?php } ?>
            </div>
        </section>
    </main>
</body>
</html>