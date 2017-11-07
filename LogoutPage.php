	<?php
		session_start();
		if(!isset($_SESSION['username'])){
			header('location:HomePage.php');
		}
		else{
	?>
	<!DOCTYPE>
	<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="description" content="Online Skill Test">
			<meta name="author" content="Kundan Chaudhary, Pawan Tiwary, Santosh Aryal">
			<title>Logout</title>
			<!-- Bootstrap Core CSS -->
			<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
			<!-- CSS -->
			<link rel="StyleSheet" href="css/login.css" type = "Text/CSS">
			
		</head>
		<body>
			<div class = "jumbotron">
				<div class = "row">
					<div class="col-sm-6 col-md-10 col-md-offset-2">
						<?php
							unset($_SESSION['username']);
							session_destroy();
							echo "<img src='./img/logout.png' class='img-responsive' alt='logout'>";
						?>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-4 col-md-offset-4" style="margin-top:5%;width:20%;">
						<a href='HomePage.php'class="btn btn-success btn-block center-block">Home Page</a>
					</div>
				</div>
				</div>
		</body>
	</html>
	<?php
		}
	?>