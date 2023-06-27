<?php
require __DIR__ . "/dbcon.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $stmt = $mysqli->prepare("INSERT INTO admin (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $stmt->close();

    header("Location: yh.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Registration</title>
</head>
<body>
    <h1>Admin Registration</h1>
    <form method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>
