<html>
<head>
	<title>Register Product</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container-fluid">
		<!--header-->
		<div class="row bg-warning">
			<div class="col-4"></div>
			<div class="col-4 beautify">
				<center>
					<h1>Welcome Page</h1>	
				</center>				
			</div>
			<div class="col-4">
				<a class="make-center" href="showProducts.php"><h3>Product List</h3></a>
			</div>
		</div>

		<!--body-->
		<div class="row " style="min-height: 300px;margin-top: 30px">
			<div class="col-4"></div>
			<!--product form-->
			<div class="col-4 bg-info" style="padding-top: 30px;">
				<form action="insertProduct.php" method="post">
					<input class="form-control" placeholder="enter Product Name" type="text" name="productName" required=""><br>
					<input class="form-control" placeholder="enter Description" type="text" name="description" required=""><br>
					<input class="form-control" placeholder="enter Price" type="text" name="price" required=""><br>
					<center>
						<input class="btn btn-dark make-center" type="submit" value="Submit"><br>	
					</center>
				</form>
			</div>
			<div class="col-4"></div>
		</div>

	</div>
</body>
</html>