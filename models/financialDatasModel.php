<?php
require './models/connection.php';
function get_sales() {
    $db = bddConnection();
    $sql = <<<UWU
    SELECT SUM(`amount`) AS 'ca'
    FROM `payment`
    GROUP BY `staff_id`;
    UWU;
    $postStmt = $db->prepare($sql);
    // $postStmt->bindValue('id:', $id);
    $postStmt->execute();

    $post = $postStmt->fetchAll(PDO::FETCH_OBJ);
    return $post;
}

function get_films_total() {
    $db = bddConnection();
    $sql = <<<UWU
    SELECT COUNT(`film_id`) AS 'Total_de_films'
    FROM `inventory`
    GROUP BY `store_id`;
    UWU;
    $postStmt = $db->prepare($sql);
    // $postStmt->bindValue('id:', $id);
    $postStmt->execute();

    $post = $postStmt->fetchAll(PDO::FETCH_OBJ);
    return $post;
}

function get_stores() {
    $db = bddConnection();
    $sql = <<<FDP
    SELECT `staff`.`first_name`, `staff`.`last_name`, `address`.`address`, `city`.`city`, `staff`.`email`
    FROM `store`
    JOIN `staff` ON `store`.`manager_staff_id` = `staff`.`staff_id`
    JOIN `address` ON `store`.`address_id` = `address`.`address_id`
    JOIN `city` ON `city`.`city_id` = `address`.`city_id`;
    FDP;
    $postStmt = $db->prepare($sql);
    // $postStmt->bindValue('id:', $id);
    $postStmt->execute();

    $post = $postStmt->fetchAll(PDO::FETCH_OBJ);
    return $post;
}