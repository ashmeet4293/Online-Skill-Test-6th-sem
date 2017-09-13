<!DOCTYPE>
<html>
	<head>
		<title>Student Report</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- CSS -->
		<link href="css/report.css" rel="stylesheet">
	</head>
	<body>
		<div class = "btn-group btn-group-xs" style = "margin:5px 5px">
			<a href = "AdminPage.php"><button type="button" class="btn btn-primary" name = "home">Home</button></a>
			<a href = "LogoutPage.php"><button type="button" class="btn btn-warning" name = "logout" style="float:right">Logout</button></a>
		</div>
		
		<div class = "row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<div class="account-wall">
					<form class="form-signup" method = "POST">
						<input type="text" name = "userID" class="form-control" placeholder="Enter userID..." required autofocus style="width:50%; float:left">
						<button class="btn btn-md btn-info btn-block" type="submit" name = "btnSearch" style="width:45%; float:right; ">Search</button>
					</form>
				</div>
			</div>
		</div>
		
		<div class = "row">
			<div class = "col-md-12">
				<div class = "panel-body">
					<div class = "table-responsive">
						<h3 style="text-align:center;">Student Detail</h3>
						<table class = "table table-hover table-striped table-bordered">
							<tr class = "warning">
								<th>Student ID:</th>
								<td></td>
								<th>Username:</th>
								<td></td>
							</tr>
							<tr class = "info">
								<th>Student Name:</th>
								<td></td>
								<th>Email:</th>
								<td></td>
							</tr>
							<tr class = "warning">
								<th>Gender:</th>
								<td></td>
								<th>Date Of Birth:</th>
								<td></td>
							</tr>
							<tr class = "info">
								<th>Address:</th>
								<td></td>
								<th>Phone:</th>
								<td></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		
		<div class = "row">
			<div class = "col-md-12">
				<div class = "panel-body">
					<div class = "table-responsive">
						<h3 style="text-align:center;">Examination Detail</h3>
						<table class = "table table-hover table-striped table-bordered">
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
			</div>
		</div>
		<div class = "row">
			<div class="col-md-offset-4 col-sm-6 col-lg-3">
				<form class="form-signup" method = "POST">
					<button class="btn btn-md btn-success btn-block" type="submit" name = "btnPrint" style="width:35%;">Print</button>
				</form>
			</div>
		</div>
	</body>
</html>