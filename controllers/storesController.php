<?php
require './models/storesModel.php';
$stores = get_stores();
require './views/stores.php';