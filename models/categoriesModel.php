<?php
require './models/connection.php';
function get_categories() {
    $db = bddConnection();
    $sql = <<<FDP
    SELECT `name`, COUNT(`film_id`) AS 'films_per_category'
    FROM `category`
    JOIN `film_category` ON `category`.`category_id` = `film_category`.`category_id`
    GROUP BY `name`
    ORDER BY `name` ASC
    FDP;
    $postStmt = $db->prepare($sql);
    // $postStmt->bindValue('id:', $id);
    $postStmt->execute();

    $post = $postStmt->fetchAll(PDO::FETCH_OBJ);
    return $post;
}