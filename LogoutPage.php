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
			<title>Online Skill Test</title>
			<!-- Bootstrap Core CSS -->
			<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
			<!-- CSS -->
			<link rel="StyleSheet" href="css/adminlogin.css" type = "Text/CSS">
			
		</head>
		<body>
			<div class = "row">
				<div class="col-sm-6 col-md-10 col-md-offset-2" style = "margin-top:100px">
					<?php
						unset($_SESSION['username']);
						session_destroy();
						echo "<img src='./img/logout.png' class='img-responsive' alt='logout'>";
					?>
				</div>
			</div>
			<div class = "row" style = "margin-top:15px">
				<div class="col-sm-6 col-md-10 col-md-offset-2 center-block"> 
					<a href='HomePage.php'><button class="btn btn-success center-block">HomePage</button></a>
				</div>
			</div>
		</body>
	</html>
	<?php
		}
	?>