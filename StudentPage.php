	<?php
		session_start();
		if(!isset($_SESSION['username'])){
			header("location:HomePage.php");
		}
		else{
	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" />
	
	<!-- CSS -->
	<link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">

    <!-- Custom CSS: -->
    <link href="css/studentpage.css" rel="stylesheet">

    <!-- Custom Fonts from Google -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    
</head>

<body>

    <!-- Navigation -->
    			<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
							<i class="fa fa-bars"></i>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
						<ul class="nav navbar-nav">
							<li><a href="StudentPage.php">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Test Paper<b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="TestpaperPage.php">C</a></li>
									<li><a href="#">Java</a></li>
									<li><a href="#">Python</a></li>
								</ul>
							</li>
							<li><a href="StudentResultPage.php">View Result</a></li>
							<li><a href="StudentChangePasswordPage.php">Change Password</a></li>
							<li><a href="LogoutPage.php">Logout</a></li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>

	<!-- Header -->
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>STUDENT ZONE</h1>
            </div>
        </div>
    </header>
     	
    <!-- Copyright etc -->
	<footer>
        <div class="small-print">
        	<div class="container">
        		<p>&copy;Online Skill Test</p>
        	</div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    
    <!-- Custom Javascript -->
    <script src="js/custom.js"></script>

</body>
</html>
	<?php
		}
	?>
