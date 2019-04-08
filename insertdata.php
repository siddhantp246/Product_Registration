<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

//saving user inserted value in registration form in local variables
$uname=$_POST["name"];
$upass=$_POST["pass"];
$uemail=$_POST["emailId"];

// creating connection
$conn = new mysqli($servername, $username, $password, $dbname);
// checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//inserting values in database,in users table
$sql = "INSERT INTO users (username, password, email)
VALUES ('$uname','$upass','$uemail')";

if ($conn->query($sql) === TRUE) {
	//redirect to welcome page, if successfully inserted
	header("Location: welcome.php");
} else {
	//show error message if insertion failed
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//closing connection
$conn->close();
?>