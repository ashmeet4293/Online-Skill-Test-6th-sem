	<?php
		session_start();
		if(!isset($_SESSION['username'])){
			header("location:HomePage.php");
		}
		else{
	?>
<!DOCTYPE>
<html>
	<head>
		<title>Student Details</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- CSS -->
		<link rel="stylesheet" href="css/student.css" type = "TEXT/CSS">
	</head>
	<body>
		<?php
			include 'ButtonPage.php';
		?>
		<div class = "container-fluid">
			<div class = "table-responsive">
				<table class = "table table-hover table-bordered">
					<thead>
						<tr class = "success" style="text-align:center;">
							<th>Student ID</th>
							<th>Student Name</th>
							<th>Email</th>
							<th>Username</th>
							<th>Gender</th>
							<th>Date Of Birth</th>
							<th>Address</th>
							<th>Phone</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>
	<?php
		}
	?>