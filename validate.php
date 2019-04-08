<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

// creating connection
$conn = new mysqli($servername, $username, $password, $dbname);

// checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//saving user inserted value in login form in local variables
$uemail=$_POST["emailId"];	
$upass=$_POST["pass"];

//validating value from database with values in local variables
$sql = "SELECT username, password,email FROM users where email='$uemail' and password='$upass'";
$result = $conn->query($sql);


//if value exists in database
if ($result->num_rows > 0) {
    // redirect to welcome page
    header("Location: welcome.php");
} else {
	//user entered wrong credentials,hence redirected to login page
    header("Location: login.php");
}
//closing connection
$conn->close();
?>