<?php
require './models/actorFilmsModel.php';
if (isset($_GET['actor_id'])) {
    $actor_id = $_GET['actor_id'];
    $actor_films = get_actor_films($actor_id);
}
else { ?>
    <h1>Aucun utilisateur sélectionné.</h1>
<?php
    die;
}
require './views/actorFilms.php';