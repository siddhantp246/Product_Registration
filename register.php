<html>
<head>
	<title>Registration Page</title>
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
					<h1>Registration Page</h1>	
				</center>				
			</div>
			<div class="col-4"></div>
		</div>

		<!--Body-->
		<div class="row " style="min-height: 300px;margin-top: 30px">
			<div class="col-4"></div>
			<div class="col-4 bg-secondary" style="padding-top: 30px;">
				<!--register form-->
				<form action="insertdata.php" method="post">
					<input class="form-control" placeholder="enter username" type="text" name="name" required=""><br>
					<input class="form-control" placeholder="enter email" type="email" name="emailId" required=""><br>
					<input class="form-control" placeholder="enter password" type="password" name="pass" required=""><br>
					<center>
						<input class="btn btn-primary make-center" type="submit" value="Register"><br>	
					</center>
				</form>
			</div>
			<div class="col-4"></div>
		</div>

	</div>
</body>
</html>