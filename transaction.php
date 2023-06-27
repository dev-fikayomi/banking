<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login-appexi.php");
    exit();
}

$user_id = $_SESSION['user_id'];

require __DIR__ . "/dbcon.php";

$stmt = $mysqli->prepare("SELECT * FROM transactions WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();

$transactions = array();
while ($row = $result->fetch_assoc()) {
    $transactions[] = $row;
}
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="\appexi project\appex-i-bank-logo.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <title>Appexxi Bank|transaction</title>
        <!-- <link rel="stylesheet" href="transaction.css"> -->
    </head>

    <body>
        <div class="background"></div>
        <main>
            
            <div class="container">

            <h1 class="text-center">Transactions History</h1>
                <table class="table col-9">
                    <thead>
                        <thead>
                            <tr>
                                <th>Transaction ID</th>
                                <th>Receiver Name</th>
                                <th>Account Number</th>
                                <th>Bank Name</th>

                                <th>Amount</th>
                                <th>Date</th>
                                <!-- <th>Country</th> -->
                                <th>Details</th> <!-- new column for link -->
                            </tr>
                        </thead>
                    <tbody>


                    <tbody>
                        <?php
                        require __DIR__ . "/dbcon.php";
                        $stmt = $mysqli->prepare("SELECT * FROM transactions WHERE user_id = ?");
                        $stmt->bind_param("i", $_SESSION['user_id']);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            
                                <tr>
                                    <td>
                                        <?php echo $row['transaction_id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['receiver_name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['account_number']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['bank_name']; ?>
                                    </td>
                                    <!-- <td><?php echo $row['swift_code']; ?></td> -->
                                    <td>
                                        <?php echo $row['amount']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['date']; ?>
                                    </td>
                                    <!-- <td><?php echo $row['country']; ?></td> -->
                                  <td> <a href="transaction_details.php?id=<?php echo $row['transaction_id']; ?>">Receipt</a> </td> 

                                </tr>
                            
                            <?php
                        }
                        $stmt->close();
                        ?>
                    </tbody>
                </table>
                <table>


                </table>

            </div>

            <table class="table">

                <tbody>

                </tbody>
            </table>
            <div class="transactions">
                <!-- <div>
                    <p class="sub-head">Reference</p>
                    <p>A2736473547</p>
                    <p>A0204046483</p>
                    <p>A0298360350</p>
                    <p>A9370000738</p>
                    <p>A2574902681</p>
                    <p>A0929083828</p>
                    <p>A1635978322</p>
                </div> -->
                <!-- <div>
                    <p class="sub-head">Account Type</p>
                    <p>Checking</p>
                    <p>Checking</p>
                    <p>Checking</p>
                    <p>Checking</p>
                    <p>Checking</p>
                    <p>Checking</p>
                    <p>Checking</p>
                </div> -->
                <!-- <?php while ($row = $result->fetch_assoc()): ?>
           
           
                <div>
                    <p class="sub-head">Bank Name</p>
                    <p>Citi Bank</p>
                    <p>BANCO DI GUAYAQUIL</p>
                    <p>Torque ank</p>
                    <p>Zhai ojuko</p>
                    <p>west Bank</p>
                    <p>Sun trust Bnk</p>
                    <p>money Bank</p>
                    <p><?php echo $row['bank_name']; ?></p>
                </div>
                <div>
                    <p class="sub-head">Reciever's Name</p>
                    <p>Jones Parker</p>
                    <p>Rede thomas</p>
                    <p>Girona bans</p>
                    <p>Toruke bamigbe</p>
                    <p>West nev</p>
                    <p>Ruby gold</p>
                    <p>ino jus knw</p>
                    <p><?php echo $row['receiver_name']; ?></p>
                </div>
                <div>
                    <p class="sub-head">Account Number</p>
                    <p>1028288468</p>
                    <p>42003645324</p>
                    <p>4200369224</p>
                    <p>2556828468</p>
                    <p>4200345424</p>
                    <p>334282886468</p>
                    <p>12003204024</p>
                    <p><?php echo $row['account_number']; ?></p>
                </div>
                <div class="amount">
                    <p class="sub-head">Amount</p>
                    <p>4000</p>
                    <p>650000</p>
                    <p>30030</p>
                    <p>200000</p>
                    <p>19000</p>
                    <p>554400</p>
                    <p>1000</p>
                    <p><?php echo $row['amount']; ?></p>
                </div>
                <div>
                    <p class="sub-head">Date</p>
                    <p>2023-03-21 12:38:31</p>
                    <p>2023-03-12 18:38:31</p>
                    <p>2023-03-27 18:38:31</p>
                    <p>2023-03-25 18:38:31</p>
                    <p>2023-03-01 18:38:31</p>
                    <p>2023-03-03 18:38:31</p>
                    <p>2023-03-28 18:38:31</p>
                    <p><?php echo $row['date']; ?></p>
                </div>
                <?php endwhile; ?> -->
            </div>
            </div>
        </main>
    </body>
    <script src="//code.tidio.co/qxir3eqphzl98gyvbojezqtur0y9wo8g.js" async></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>

    </html>