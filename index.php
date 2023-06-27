<?php


$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/dbcon.php";
    
    $sql = sprintf("SELECT * FROM users
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: dashboard.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="\appexi project\appex-i-bank-logo.png" type="image/x-icon">
    <title>login</title>
    <script src="/login.js"></script>
    <link rel="stylesheet" href="login-appexi.css">
</head>
<body>
    <div class="background"></div>
    <div class="login-container">
        <img src="appex-i-bank-logo.png" alt="logo-appexi" class="logo">
        <h1>Login Online Access</h1>
        <div id="welcomeMsg" style="display: none;"></div>
        <div class="line"></div>
        <?php if ($is_invalid): ?>
        <p style="color:red;text-align:center;">Invalid login</p>
        <?php endif; ?>
        <form method="post">
            <div>
                <label for="">
                    Username
                </label>
                <input type="text" name="email" id="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
            </div>
            <div>
                <label for="">
                    Password
                </label>
                <input type="password" name="password" id="password">
            </div>
            <button  >
                LOGIN
            </button>
        </form>
        <a href="#" class="forgotten-pwd">
            <!-- <img src="" alt="caution"> -->
            Forgotten Password?
        </a>
        <div class="enroll">
            <p>haven't enrolled yet?</p>
            <a href="enroll.html">Enroll now</a>
        </div>
    </div>
</body>
<script src="//code.tidio.co/qxir3eqphzl98gyvbojezqtur0y9wo8g.js" async></script>
</html>