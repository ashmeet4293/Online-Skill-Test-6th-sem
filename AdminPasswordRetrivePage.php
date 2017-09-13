<!DOCTYPE>
	<html>
		<head>
			<title>Password Retrive</title>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- Bootstrap Core CSS -->
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<!-- CSS -->
			<link rel="StyleSheet" href="css/adminlogin.css" type = "Text/CSS">

		</head>
		<body>
			<div class = "btn-group btn-group-xs" style = "margin:5px 5px">
				<a href = "AdminPage.php"><button type="button" class="btn btn-primary" name = "home">Home</button></a>
				<a href = "LogoutPage.php"><button type="button" class="btn btn-warning" name = "logout" style="float:right">Logout</button></a>
			</div>
			<div class="container" style = "margin-top:20px">
				<div class="row">
					<div class="col-sm-6 col-md-4 col-md-offset-4">
						<div class="account-wall">
							<img class="profile-img" src="./img/team/changePassword.jpg" alt="admin">
							<form class="form-signin" method = "POST">
								<input type="text" name = "username" class="form-control" placeholder="Enter Username..." required autofocus>
								<input type="text" name = "getPassword" class="form-control" placeholder="Enter Your Security Answer..." required autofocus>
								<button class="btn btn-lg btn-success btn-block" type="submit" name = "btnGetPassword">Get Password</button> 
							</form>
						</div>
					</div>
				</div>
			</div>
		</body>
	</html>