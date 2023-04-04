<?php
require './models/connection.php';
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