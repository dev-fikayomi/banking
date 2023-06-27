<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "login_db";
$conn = mysqli_connect($host, $user, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// Query the database for the registered users
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
  // Output the table header
  echo "<table>";
  echo "<tr><th>Username</th><th>Email</th></tr>";

  // Loop through each row and output the data in the table
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "</tr>";
  }

  // Output the table footer
  echo "</table>";
} else {
  // No rows returned, show an error message
  echo "No registered users found.";
}

// Close the database connection
mysqli_close($conn);
?>