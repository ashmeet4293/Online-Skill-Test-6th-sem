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
			<link rel="StyleSheet" href="css/login.css" type = "Text/CSS">

		</head>
		<body>
			<div class="container" style = "margin-top:10%">
				<div class="row">
					<div class="col-sm-6 col-md-4 col-md-offset-4">
						<div class="account-wall">
							<img class="profile-img" src="./img/team/changePassword.jpg" alt="student">
							<form class="form-signin" method = "POST">
								<input type="text" name = "id" class="form-control" placeholder="Enter ID..." required autofocus>
								<input type="text" name = "username" class="form-control" placeholder="Enter Username..." required autofocus>
								<input type="text" name = "getPassword" class="form-control" placeholder="Enter Your Security Answer..." required autofocus>
								<button class="btn btn-md btn-success btn-block" type="submit" name = "btnGetPassword">Get Password</button> 
								<br/><a href = "HomePage.php" class="btn btn-md btn-primary btn-center" style="margin-left:35%">Home</a></label>
							</form>
						</div>
					</div>
				</div>
			</div>
		</body>
	</html>