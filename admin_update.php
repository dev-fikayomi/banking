<?php

$mysqli = require __DIR__ . "/dbcon.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST["user_id"];
    $new_balance = $_POST["new_balance"];

    $stmt = $mysqli->prepare("UPDATE users SET bal1 = ? WHERE id = ?");
    $stmt->bind_param("ii", $new_balance, $user_id);
    $stmt->execute();
    $stmt->close();

    header("Location: tables-general.php ");
    exit;
}
?>
