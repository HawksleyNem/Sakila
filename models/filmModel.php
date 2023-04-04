<?php
require './models/connection.php';
function get_film() {
    $db = bddConnection();
    $sql = <<<FDP
    SELECT
        `title`,
        `description`,
        `release_year`,
        `length`,
        `rental_rate`,
        `special_features`
    FROM `film`
    LIMIT 15;
    FDP;
    $postStmt = $db->prepare($sql);
    // $postStmt->bindValue('id:', $id);
    $postStmt->execute();

    $post = $postStmt->fetchAll(PDO::FETCH_OBJ);
    return $post;
}