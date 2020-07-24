<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql="INSERT INTO Accounts (username,password) VALUES ('$_POST[name]','$_POST[password]')";
if ($conn->query($sql) === TRUE) {
 include 'thankyou.html';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>