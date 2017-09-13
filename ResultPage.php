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
		<link href="css/studentdetail.css" rel="stylesheet">
	</head>
	<body>
		<div class = "btn-group btn-group-xs" style = "margin:5px 5px">
			<a href = "AdminPage.php"><button type="button" class="btn btn-primary" name = "home">Home</button></a>
			<a href = "LogoutPage.php"><button type="button" class="btn btn-warning" name = "logout" style="float:right">Logout</button></a>
		</div>
		<div class = "table-responsive">
			<table class = "table table-hover table-bordered">
				<tr class = "success">
					<th>Student ID</th>
					<th>Student Name</th>
					<th>Username</th>
					<th>Exam Date</th>
					<th>Subject Name</th>
					<th>Marks Obtained</th>
					<th>Remarks</th>
				</tr>
			</table>
		</div>
	</body>
</html>