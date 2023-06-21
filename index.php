<?php
    if(isset($_GET['page'])) {
        switch($_GET['page']) {
            case "films":
                require './controllers/filmController.php';
                break;
            case "actors":
                require './controllers/actorsController.php';
                break;
            case "actor_films":
                require './controllers/actorFilmsController.php';
                break;
            case "stores":
                require './controllers/storesController.php';
                break;
            case "categories":
                require './controllers/categoriesController.php';
                break;
            case "financial-datas":
                require './controllers/financialDatasController.php';
                break;
            default:
                require './controllers/filmController.php';
        }
    }
    else {
        require './controllers/filmController.php';
    }
?>