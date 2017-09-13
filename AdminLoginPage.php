	<?php
		
                
                $mysqli = new mysqli("localhost", "root", "system", "oes");

		if (isset($_POST['btnLogin'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$result = 'select * from admin where Admin_name = "'.$username.'" and Password = "'.$password.'"';
			if($mysqli->query($result)==true){
				session_start();
				$_SESSION['username'] = $username;
				header('location:AdminPage.php');
			}
			else{
				echo "Invalid Account";
			}
//			$username = $_POST["username"];
//			$password = $_POST["password"];
//			$question = $_POST["question"];
//			$answer = $_POST["answer"];
//			if($username==$user and $password==$pass){
//				//SELECT username,passwrod from admin wehre 
//                                session_start();
//				$_SESSION["username"]=$username;
//				header('location:AdminPage.php');
//			}
		}
	?>
<!DOCTYPE>
	<html>
		<head>
			<title>Admin Login</title>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- Bootstrap Core CSS -->
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<!-- CSS -->
			<link rel="StyleSheet" href="css/adminlogin.css" type = "Text/CSS">

		</head>
		<body>
			<div class="container" style = "margin-top:50px">
				<div class="row">
					<div class="col-sm-6 col-md-4 col-md-offset-4">
						<div class="account-wall">
							<img class="profile-img" src="./img/team/logo.jpg" alt="admin">
							<form class="form-signin" method = "POST">
								<input type="text" name = "username" class="form-control" placeholder="Username..." required autofocus>
								<input type="password" name = "password" class="form-control" placeholder="Password..." required>
								<select name="question" class="form-control" required="required">
									<option value="na" selected="">Select Your Security Question</option>
									<option value="1">What is your favorite book?</option>
									<option value="2">What is your favorite food?</option>
									<option value="3">What is your pet’s name?</option>
									<option value="4">What is your favorite color?</option>
									<option value="5">What is your movie?</option>
								</select>
								<input type="text" name = "answer" class="form-control" placeholder="Your Answer..." required autofocus>
								<button class="btn btn-lg btn-success btn-block" type="submit" name = "btnLogin">Login</button>
								&emsp;<a href = "AdminPasswordRetrivePage.php" style="color:black;">Forget Password?</a> &emsp;&emsp;&emsp;&emsp;&emsp;
								<a href = "HomePage.php" style="color:black;">Home</a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</body>
	</html>