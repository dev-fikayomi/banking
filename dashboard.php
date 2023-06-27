<?php
session_start();
include_once ('fetchuser.php');
 $balance = fetchUser($_SESSION["user_id"]);
if (!isset($_SESSION["user_id"])) {
    header('Location:index.php');
    exit();
}
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    session_unset();
    session_destroy();
    header('Location: index.php');
    exit();
}
$mysqli = require __DIR__ . "/dbcon.php";

$sql = "SELECT * FROM users
        WHERE id = {$_SESSION["user_id"]}";

$result = $mysqli->query($sql);

$user = $result->fetch_assoc();

$_SESSION['LAST_ACTIVITY'] = time();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="appex-i-bank-logo.png" type="image/x-icon">

    <title>Dashboard-appexi</title>
    <link rel="stylesheet" href="dashbord.css">
</head>

<body>
    <div class="background"></div>
    <main>
        <nav>
            <img src="appex-i-bank-logo.png" alt="" class="logo">
            <div class="line"></div>
            <div class="nav-links">
                <a href="dashboard.html" onclick="dissapearNav()" class="link">
                    <img src="icon-phone.svg" alt="">
                    <p>Dashboard</p>
                </a>
                <a href="transfer.html" onclick="dissapearNav()" class="link">
                    <img src="icon-phone.svg" alt="">
                    <p>Transfer</p>
                </a>
                <a href="credit-card.html" onclick="dissapearNav()" class="link">
                    <img src="icon-phone.svg" alt="">
                    <p>Credit Card</p>
                </a>
                <a href="kyc.html" onclick="dissapearNav()" class="link">
                    <img src="icon-phone.svg" alt="">
                    <p>KYC</p>
                </a>
                <a href="transaction.php" onclick="dissapearNav()" class="link">
                    <img src="icon-phone.svg" alt="">
                    <p>Transaction History</p>
                </a>
                <a href="logout.php" onclick="dissapearNav()" class="link">
                    <img src="icon-phone.svg" alt="">
                    <p>Logout</p>
                </a>
            </div>
        </nav>
        <div class="dashboard">
            <div class="dashboard-description">
                <div class="dashboard-nav">
                    <div class="hamburger">
                        <span class="ham-span hs1">

                        </span>
                        <span class="ham-span hs2">

                        </span>
                        <span class="ham-span hs3">

                        </span>
                    </div>
                    <h2>Dashboard</h2>
                </div>
                <div class="description-text">
                    <p id="timeOutput"></p>
                    <p id="dateOutput" class="time">

                    </p>
                </div>
            </div>
            <div class="carousel">

            </div>
            <div class="bank-detail">
                <div class="bd">
                    <a href="transfer.php" class="bd-type">
                        Apexx | Bank Checking
                    </a>
                    <div class="bd-line"></div>
                    <div class="balance">
                        <a href="transfers.php" class="balance-figures">

                        <?php   echo "<p> $ ".number_format($balance) ."</p>" ?>


                        </a>
                        <a href="transfers.php" class="balance-text">
                            Available balance
                        </a>
                    </div>
                    <div class="bd-line"></div>
                    <a href="transfers.php" class="transfer">
                        <p>Transfer</p>
                        <div class="ellipsis">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <a href="transfers.php" class="details">
                        Details
                    </a>
                    <a class="type-number" href="transfer.php">
                        <p>Account Number</p>
                        <p>2827702302</p>
                    </a>
                    <a class="type-number" href="transfer.php">
                        <p>Routing Number</p>
                        <p>030303030</p>
                    </a>
                </div>
                <div class="bd">
                    <a href="transfers.php" class="bd-type">
                        Apexx | Bank Savings
                    </a>
                    <div class="bd-line"></div>
                    <div class="balance">
                        <a href="transfers.php" class="balance-figures">
                            <p>$980,000.00</p>
                        </a>
                        <a href="transfers.php"  class="balance-text">
                            Available balance
                        </a>
                    </div>
                    <div class="bd-line"></div>
                    <a href="transfers.php" class="transfer">
                        <p>Transfer</p>
                        <div class="ellipsis">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <a href="transfers.php"  class="details">
                        Details
                    </a>
                    <a class="type-number" href="#">
                        <p>Account Number</p>
                        <p>2827702302</p>
                    </a>
                    <a class="type-number" href="transfers.php" >
                        <p>Routing Number</p>
                        <p>030303030</p>
                    </a>
                </div>
                <div class="bd">
                    <a href="transfers.php"  class="bd-type">
                        Credit Card
                    </a>
                    <div class="bd-line"></div>
                    <div class="balance">
                        <a href="transfers.php" class="balance-figures">
                            <p>$568,000.00</p>
                        </a>
                        <a href="transfers.php"  class="balance-text">
                            Available balance
                        </a>
                    </div>
                    <div class="bd-line"></div>
                </div>
            </div>
        </div>
    </main>
    <script>

        const today = new Date();
        const hour = today.getHours();
        let timeOfDay;

        if (hour < 12) {
            timeOfDay = 'morning';
        } else if (hour < 18) {
            timeOfDay = 'afternoon';
        } else {
            timeOfDay = 'evening';
        }

        const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        const month = monthNames[today.getMonth()];
        const day = today.getDate();
        const year = today.getFullYear();
        const formattedDate = `${month} ${day}, ${year}`;
        const formattedTime = `Good ${timeOfDay}`;

        document.getElementById('dateOutput').textContent = formattedDate;
        document.getElementById('timeOutput').textContent = formattedTime;
    </script>

    <script src="dashboard.js"></script>
</body>
<script src="//code.tidio.co/qxir3eqphzl98gyvbojezqtur0y9wo8g.js" async></script>
</html>