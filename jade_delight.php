<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Jade Delight PHP</title>
<style type='text/css'>
	html,body,select {font-size: 25px;}
</style>
</head>

<body>


<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE myDB";

// sql to create table
$sql = "CREATE TABLE Products (
product VARCHAR(30) NOT NULL PRIMARY KEY,
price decimal(8, 2) NOT NULL
)";

$sql = "INSERT INTO Products (product, price)
VALUES ('Chicken Chop Suey','4.5')";

$sql .= "INSERT INTO Products (product, price)
VALUES ('Sweet and Sour Pork','6.25')";

$sql .= "INSERT INTO Products (product, price)
VALUES ('Shrimp Lo Mein','5.25')";

$sql .= "INSERT INTO Products (product, price)
VALUES ('Moo Shi Chicken','6.5')";

$sql .= "INSERT INTO Products (product, price)
VALUES ('Fried Rice','2.35')";


if ($conn->query($sql) === TRUE) {
  echo "Table Products created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}



$sql = "SELECT product, price FROM Products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["product"]."</td><td>".$row["price"]."</td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>

</body>
</html>
