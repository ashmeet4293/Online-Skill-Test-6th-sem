	<?php
		$id = '101';
		$user = 'student';
		$pass = '12345';
		if (isset($_POST['btnLogin'])){
			/*require 'ConnectionPage.php';
			$username = $_POST['username'];
			$password = $_POST['password'];
			$userid = $_POST['userid'];
			$result = mysqli_query($conn,'select * from adminlogin where Username = "'.$username.'" and Password = "'.$password.'"');
			if(mysqli_num_rows($result)==1){
				session_start();
				$_SESSION['username'] = $username;
				header('location:StudentPage.php');
			}
			else{
				echo "Invalid Account";
			}*/
			$username = $_POST['username'];
			$password = $_POST['password'];
			$userid = $_POST['userid'];
			if($username==$user and $password==$pass and $userid==$id){
				session_start();
				$_SESSION['username'] = $username;
				header('location:StudentPage.php');
			}
		}
	?>
<!DOCTYPE>
	<html>
		<head>
			<title>Login</title>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- Bootstrap Core CSS -->
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<!-- CSS -->
			<link rel="StyleSheet" href="css/studentlogin.css" type = "Text/CSS">

		</head>
		<body>
			<div class="container" style = "margin-top:50px">
				<div class="row">
					<div class="col-sm-6 col-md-4 col-md-offset-4">
						<div class="account-wall">
							<img class="profile-img" src="./img/team/kundan.jpg" alt="admin">
							<form class="form-signin" method = "POST">
								<input type="text" name = "userid" class="form-control" placeholder="UserID..." required autofocus>
								<input type="text" name = "username" class="form-control" placeholder="Username..." required autofocus>
								<input type="password" name = "password" class="form-control" placeholder="Password..." required>
								<button class="btn btn-lg btn-success btn-block" type="submit" name = "btnLogin">Login</button>
								<p class="text-center new-account">Click <a href="RegistrationPage.php">Sign Up</a> To Create Account</p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</body>
	</html>