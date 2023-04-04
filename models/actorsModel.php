<?php
require './models/connection.php';
function get_actors() {
    $db = bddConnection();
    $sql = <<<FDP
    SELECT
    `actor_id`,
    `first_name`,
    `last_name`
    FROM `actor`
    LIMIT 15;
    FDP;
    $postStmt = $db->prepare($sql);
    // $postStmt->bindValue('id:', $id);
    $postStmt->execute();

    $post = $postStmt->fetchAll(PDO::FETCH_OBJ);
    return $post;
}