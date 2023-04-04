<?php
require './models/actorsModel.php';
$actors = get_actors();
require './views/actorsList.php';