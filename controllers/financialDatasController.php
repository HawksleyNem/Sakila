<?php
require './models/financialDatasModel.php';
$sales = get_sales();
$filmsTotal = get_films_total();
$stores = get_stores();
require './views/financialDatas.php';