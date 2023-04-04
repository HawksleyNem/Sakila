<?php
require './models/connection.php';
function get_actor_films($actor_id) {
    $db = bddConnection();
    $sql = <<<FDP
    SELECT DISTINCT
    `film`.`title`,
    `film`.`description`,
    `film`.`release_year`,
    `film`.`rental_rate`
    FROM `film`
    JOIN `film_actor` ON `film`.`film_id` =  `film_actor`.`film_id`
    JOIN `actor` ON `film_actor`.`actor_id` = `actor`.`actor_id`
    WHERE `actor`.`actor_id` = :actor_id;
    FDP;
    $postStmt = $db->prepare($sql);
    $postStmt->bindValue(':actor_id', $actor_id);
    $postStmt->execute();

    $post = $postStmt->fetchAll(PDO::FETCH_OBJ);
    return $post;
}