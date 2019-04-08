<html>
<head>
	<title>Product List</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">

</head>
<body>
	<div class="container-fluid">
		<div class="row bg-warning">
			<div class="col-4">
				<a class="make-center" href="welcome.php"><h3>Product Entry</h3></a>
			</div>
			<div class="col-4 beautify">
				<center>
					<h1>Products List</h1>	
				</center>				
			</div>
			<div class="col-4">
				<a class="make-center" href="login.php"><h3>Logout</h3></a>
			</div>
		</div>
	</div>


</body>
</html>
	


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

//selecting details from products 
$sql = "SELECT * from products";
$result = $conn->query($sql);



 echo '<div style="margin-top: 30px"><center><table border="1" cellspacing="2" cellpadding="2">
<tr>
      <th>Product Id</th>
      <th>Product Name</th>
      <th>Description</th>
      <th>Price</th>
    </tr>';
 while($row = mysqli_fetch_array($result))
          {
          echo "<tr><td>" . $row['productId'] . "</td><td> " . $row['productName'] . "</td><td>". $row['description'] .
          "</td><td>". $row['price'] ."</td></tr>"; 
          //these are the fields that you have stored in your database table employee
          }
 echo "</table></center></div>";
 mysqli_close($conn);
?>
