<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/klee-icon.png">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Emplacement des magasins</title>
</head>
<body>
    <?php require 'templates/header.php' ?>
    <main>
        <section class="container main-section">
            <h1>Emplacement des magasins</h1>
            <div class="item-grid">
                <?php foreach ($stores as $store) { ?>
                    <div class="item small-item">
                        <p><?= $store->address ?>, <?= $store->city ?></p>
                        <p>Manager : <?= $store->first_name ?> <?= $store->last_name ?></p>
                        <p><?= $store->email ?></p>
                    </div>
                <?php } ?>
            </div>
        </section>
    </main>
</body>
</html>