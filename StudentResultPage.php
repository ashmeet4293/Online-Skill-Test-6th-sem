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
		<title>Student Result</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- CSS -->
		<link href="css/report.css" rel="stylesheet">
	</head>
	<body>
		<?php
			include 'StudentButtonPage.php';
		?>
		<div class = "container-fluid">
			<div class = "table-responsive">
				<table class = "table table-hover table-bordered">
					<tr class = "success">
						<th>Exam Date</th>
						<th>Subject Name</th>
						<th>Marks Obtained</th>
						<th>Remarks</th>
					</tr>
					<tr class = "info">
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>
	<?php
		}
	?>