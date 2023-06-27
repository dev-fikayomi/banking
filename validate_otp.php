<?php
// Retrieve the OTP code from the database
$stmt = $mysqli->prepare("SELECT otp FROM otp_codes WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($otp_code_db);
$stmt->fetch();
$stmt->close();

// Verify the OTP code entered by the user
if ($otp_code_db == $_POST['otp']) {
    // Delete the OTP code from the database
    $stmt = $mysqli->prepare("DELETE FROM otp WHERE user_id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->close();
    // Proceed with the transfer
} else {
    // Display an error message
    $_SESSION['error'] = "Invalid OTP code.";
    header("Location: transfer.php");
    exit();
}
?>