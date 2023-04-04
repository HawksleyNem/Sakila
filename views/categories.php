<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/klee-icon.png">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Catégories</title>
</head>
<body>
    <?php require 'templates/header.php' ?>
    <main>
        <section class="container main-section">
            <h1>Catégories</h1>
            <div class="item-grid">
                <?php foreach ($categories as $category) { ?>
                    <div class="item small-item">
                        <h2><?= $category->name ?></h2>
                        <p>Nombre de films : <?= $category->{"films_per_category"} ?></p>
                    </div>
                <?php } ?>
            </div>
        </section>
    </main>
</body>
</html>