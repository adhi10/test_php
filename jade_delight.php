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

$conn->close();
?>

</body>
</html>