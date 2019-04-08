<html>
<head>
	<title>Login Page</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container-fluid">
		<!--Header-->
		<div class="row bg-primary">
			<div class="col-4"></div>
			<div class="col-4 beautify">
				<center>
					<h1>Login Page</h1>	
				</center>				
			</div>
			<div class="col-4"></div>
		</div>

		<!--Body-->
		<div class="row " style="min-height: 300px;margin-top: 30px">
			<div class="col-4"></div>
			<div class="col-4 bg-secondary" style="padding-top: 30px;">
				<!--login form-->
				<form action="validate.php" method="post">
					<input class="form-control" placeholder="email" type="email" name="emailId" required=""><br>
					<input class="form-control" placeholder="password" type="password" name="pass" required=""><br>
					<center>
						<input class="btn btn-primary make-center" type="submit" value="Login"><br>	
					</center>
					<a class="make-center" href="register.php"><h3>Register Here</h3></a>
				</form>
			</div>
			<div class="col-4"></div>
		</div>

	</div>
</body>
</html>