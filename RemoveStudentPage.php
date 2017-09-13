<!DOCTYPE>
	<html>
		<head>
			<title>Online Skill Test</title>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- Bootstrap Core CSS -->
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<!-- CSS -->
			<link rel="StyleSheet" href="css/registration.css" type = "Text/CSS">

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
							<img class="profile-img" src="./img/team/deleteStudent.jpg" alt="admin">
							<form class="form-signup" method = "POST">
								<input type="text" name = "userID" class="form-control" placeholder="Enter userID..." required autofocus style="width:50%; float:left">
								<button class="btn btn-lg btn-info btn-block" type="submit" name = "btnSearch" style="width:45%;float:right;">Search</button>
								<input type="text" name = "fullname" class="form-control" placeholder="Full Name..." required autofocus>
								<input type="email" name = "email" class="form-control" placeholder="Email..." required autofocus>
								<input type="text" name = "username" class="form-control" placeholder="Username..." required autofocus>
								<input type="password" name = "password" class="form-control" placeholder="Password..." required autofocus>
								<input type="password" name = "confirmPassword" class="form-control" placeholder="Confirm Password..." required autofocus>
								<select name="subject" class="form-control" required="required">
									<option value="na" selected="">Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="Other">Other</option>
								</select>
								<input type="date" name = "birthDate" class="form-control" placeholder="Date of Birth..." required autofocus>
								<input type="text" name = "address" class="form-control" placeholder="Address..." required autofocus>
								<input type="phone" name = "phone" class="form-control" placeholder="Phone..." required autofocus>
								<select name="question" class="form-control" required="required">
									<option value="na" selected="">Select Your Security Question</option>
									<option value="1">What Is your favorite book?</option>
									<option value="2">What is your favorite food?</option>
									<option value="3">What is your pet’s name?</option>
									<option value="4">What is your favorite color?</option>
									<option value="5">What is your movie?</option>
								</select>
								<input type="text" name = "answer" class="form-control" placeholder="Your Answer..." required autofocus>
								<button class="btn btn-lg btn-danger btn-block" type="submit" name = "btnRemove">Remove</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</body>
	</html>