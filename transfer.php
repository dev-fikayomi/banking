<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login-appexi.php");
    exit();
}

if (!isset($_POST['submit'])) {
    header("Location: dashboard.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$amount = $_POST['amount'];

require __DIR__ . "/dbcon.php";

$stmt = $mysqli->prepare("SELECT bal1 FROM users WHERE  id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result(number_format($balance));
$stmt->fetch();
$stmt->close();

if ($balance < $amount) {
    $_SESSION['error'] = "Insufficient balance.";
    header("Location: dashboard.php");
    exit();
}

$receiver_name = $_POST['receiver_name'];
$account_number = $_POST['account_number'];
$bank_name = $_POST['bank_name'];
$swift_code = $_POST['swift_code'];
$country = $_POST['country'];
$date = date('Y-m-d H:i:s');
$transaction_id = uniqid();

$stmt = $mysqli->prepare("INSERT INTO transactions (user_id, receiver_name, account_number, bank_name, swift_code, amount, date, country, transaction_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("issssisss", $user_id, $receiver_name, $account_number, $bank_name, $swift_code, $amount, $date,$country, $transaction_id);

$stmt->execute();
$stmt->close();
$balance_formatted = number_format($balance);
$new_balance = $balance_formatted - $amount;

$stmt = $mysqli->prepare("UPDATE users SET bal1 = ? WHERE id = ?");
$stmt->bind_param("di", $new_balance, $user_id);
$stmt->execute();
$stmt->close();

$_SESSION['success'] = "Transaction successful.";
header("Location: dashboard.php");
exit();
?>

