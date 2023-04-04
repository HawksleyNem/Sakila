<?php
require './models/categoriesModel.php';
$categories = get_categories();
require './views/categories.php';