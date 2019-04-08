<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";


$iproductName=$_POST["productName"];
$idescription=$_POST["description"];
$iprice=$_POST["price"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO products (productName, description,price)
VALUES ('$iproductName','$idescription','$iprice')";

if ($conn->query($sql) === TRUE) {
	header("Location: showProducts.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>