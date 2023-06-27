<?php
session_start();
include_once ('fetchuser.php');
$balance = fetchUser($_SESSION["user_id"]);
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="\appexi project\appex-i-bank-logo.png" type="image/x-icon">
    <title>Appexx Bank|Transfer</title>
    <link rel="stylesheet" href="transfer.css">
</head>
<body>
    <div class="background"></div>
    <main>
        <p class="main-text">
            Transfer
            <span>From</span>
        </p>
        <div class="int">
            Internal Account
        </div>
        <a href="appex-checking.php" class="item">
            <div>
                <p>Appex | Bank Checking</p>
                <?php   echo "<p> $ ". $balance."</p>" ?>
            </div>
            <span>
                &gt;
            </span>
        </a>
        <div class="line"></div>
        <a href="appex-savings.php" class="item">
            <div>
                <p>Appex | Bank Savings</p>
                <p>$980,000.00</p>
            </div>
            <span>
                &gt;
            </span>
        </a>
    </main>
</body>
<script src="//code.tidio.co/qxir3eqphzl98gyvbojezqtur0y9wo8g.js" async></script>
</html>