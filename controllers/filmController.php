<?php
require './models/filmModel.php';
$films = get_film();
require './views/filmsList.php';