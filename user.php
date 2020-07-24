<html>
<head>
	
	<style type="text/css">
		table{
			border-collapse: collapse;
			width: 100%;

		}
		table,td,th{
			border:1px solid black;
		}
	</style>
</head>
<body>
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBg";

// Create connection
$conn =new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT username,password FROM Accounts where username='$_POST[name]' AND password='$_POST[password]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
	echo("<h2>".$_POST['name']."We found your account");
	}
	else{
	echo("<script>alert('No account Found')</script>");
}

$conn->close();
?>
</body>
</html>