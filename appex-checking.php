
<?php
require __DIR__ . "/dbcon.php";
// Generate a random OTP code
$otp_code = rand(100000, 999999);

// Store the OTP code in the database
$stmt = $mysqli->prepare("INSERT INTO otp (user_id, otp_code) VALUES (?, ?)");
$stmt->bind_param("is", $user_id, $otp_code);
$stmt->execute();
$stmt->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checking</title>
    <link rel="shortcut icon" href="\appexi project\appex-i-bank-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="appex-checking.css">
</head>
<body>
    <div class="background"></div>
    <main>
        <h2 class="sub-head">
            Schedule Transfer
        </h2>
        <!-- <p class="amount">
            Amount
        </p> -->
        <!-- <p class="amount-digit">
            $0.00
        </p> -->
        <div class="repeat">
            <p>Repeat Transfer</p>
            <a onclick="togg()" class="btn-space" href="#">
                <span class="switch"></span>
            </a>
        </div>
        <a href="#" class="item">
            <div>
                <p class="from">Transfer From</p>
                <p class="item-text">Appex | Bank Checking (null)</p>
            </div>
            <span>
                &gt;
            </span>
        </a>
        <div class="line"></div>
        <div class="transfer-date">
            <div>
                <p class="date-text">Transfer On</p>
                <p id="dateOutput" class="date"></p>
            </div>
            <!-- <img src="" alt="time"> -->
        </div>
        <div class="line"></div>
    
        <form method="post" action="transfer.php">
            <div>
                <label for="">
                    Receiver's Bank Name
                </label>
                <input type="text"  id="bank_name" name="bank_name" required>
            </div>
            <section class="line"></section>
            <div>
                <label for="">
                    Amount
                </label>
                <input type="number"  id="amount" name="amount" min="0" max="<?php echo $balance; ?>" required>
            </div>
            <section class="line"></section>
            <div>
                <label for="">
                    Receiver's Account Number
                </label>
                <input type="text" id="account_number" name="account_number" required>
            </div>
            <section class="line"></section>
            <div>
                <label for="">
                    Receiver's Name
                </label>
                <input type="text" id="receiver_name" name="receiver_name" required>
            </div>
            <section class="line"></section>
            <div>
                <label for="">
                    Receiver's Swift Code
                </label>
                <input type="tel"  id="swift_code" name="swift_code" required>
            </div>
            <section class="line"></section>
            <div>
                <label for="">
                    Receiver's Country
                </label>
                <input type="text" id="country" name="country" required>
            </div>
            <section class="line"></section>
            <div>
                <label for="">
                    Transaction Date
                </label>
                <input type="text" id="date" name="date" value="<?php echo date('Y-m-d'); ?>" disabled>
            </div>
            <section class="line"></section>
            
            <div>
                <label for="">
                    Memo (Optional)
                </label>
                <input type="text">
            </div>
            <div class="line"></div>
            <div class="description">
                <!-- <img src="\appexi project\bell.svg" width="30px" alt="bell"> -->
                <p>
                    Transfers scheduled after 11:pm ET or non business days between Banking demo accounts are processed the next business day.
                </p>
            </div>
            <button type="submit" name="submit">
                TRANSFER
            </button>
        </form>
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
    <script src="checking.js"></script>
    <script src="//code.tidio.co/qxir3eqphzl98gyvbojezqtur0y9wo8g.js" async></script>
</body>
</html>