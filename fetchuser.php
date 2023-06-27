<?php
function fetchUser($user_id) {
    $mysqli = require __DIR__ . "/dbcon.php";

    $stmt = $mysqli->prepare("SELECT bal1 FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result( $balance);
    $stmt->fetch();
    $stmt->close();

    return $balance;
}



?>