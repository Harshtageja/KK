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
$sql = "SELECT username,password FROM Accounts where username='$_POST[name]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
	echo "<table>
<tr>
<th>username</th>
<th>password</th>
</tr>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
  echo "</tr>";
}
echo "</table";
} 

$conn->close();
?>
</body>
</html>