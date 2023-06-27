<?php
  // retrieve the transaction ID from the URL parameter
  $transaction_id = $_GET['id'];

  // retrieve the transaction details from the database
  require __DIR__ . "/dbcon.php";
  $stmt = $mysqli->prepare("SELECT * FROM transactions WHERE transaction_id = ?");
  $stmt->bind_param("s", $transaction_id);
  $stmt->execute();
  $result = $stmt->get_result();
  $transaction = $result->fetch_assoc();
  $stmt->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer-receipt</title>
    <link rel="stylesheet" href="transaction-receipt.css">
</head>
<body>
    <div class="background"></div>
    <main>
        <img class="logo" src="appex-i-bank-logo.png" alt="logo">
        <p class="receipt">
            Transaction Receipt
        </p>
        <div class="line"></div>
        <div class="receipt-description">
            <section>
                <p>Date</p>
                <p><?php echo $transaction['date']; ?></p>
            </section>
            <section>
                <p>Reference</p>
                <p><?php echo $transaction['transaction_id']; ?></p>
            </section>
            <section>
                <p>Status</p>
                <p>Approved</p>
            </section>
            <section>
                <p>Account Type</p>
                <p>Checking</p>
            </section>
            <section>
                <p>Receiver's Bank Name</p>
                <p><?php echo $transaction['bank_name']; ?></p>
            </section>
            <section>
                <p>Receiver's Account Number</p>
                <p><?php echo $transaction['account_number']; ?></p>
            </section>
            <section>
                <p>Receiver's Name</p>
                <p><?php echo $transaction['receiver_name']; ?></p>
            </section>
            <section>
                <p>Amount</p>
                <p>$<?php echo $transaction['amount']; ?></p>
            </section>
            <!-- <section>
                <p>Momo</p>
            </section> -->
        </div>
        <img class="water-mark" src="appex-i-bank-logo.png" alt="">
    </main>
</body>
</html>


<!-- display the transaction details -->
<!-- <h1>Transaction Details</h1>
<p>Transaction ID: <?php echo $transaction['transaction_id']; ?></p>
<p>Receiver Name: </p>
<p>Account Number: </p>
<p>Bank Name: </p>
<p>SWIFT Code: <?php echo $transaction['swift_code']; ?></p>
<p>Amount: </p>
<p>Date: </p>
<p>Country: <?php echo $transaction['country']; ?></p> -->
