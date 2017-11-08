<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:HomePage.php");
} else {
    $studentId ="";
    $username = "";
    $studentName = "";
    $email = "";
    $gender = "";
    $dateOfBirth = "";
    $address = "";
    $regDate = "";
    $subjectName = "";
    $marksObtained = "";
    $remarks = "";



    $mysqli = new mysqli("localhost", "root", "system", "oes");
    if (isset($_POST['btnSearch'])) {
        $id = $_POST['userID'];
        $query = "SELECT * FROM students WHERE s_id=" . $id;
        $record = $mysqli->query($query);
        if (count($record) == 1) {
            $row = mysqli_fetch_array($record);
            $studentId = $row['s_id'];
            $username = $row['Uname'];
            $studentName = $row['Fname'];
            $email = $row['Email'];
            $gender = $row['Gender'];
            $dateOfBirth = $row['DOB'];
            $address = $row['Address'];
            $regDate = $row['Reg_Date'];
            $subjectName = $row['SubjectName'];
            $marksObtained = $row['marks_obtained'];
            $remarks = $row['remarks'];
        } else {
            
        }
    }
    ?>
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
            <?php
            include 'ButtonPage.php';
            ?>	
            <div class = "row">
                <div class = "container-fluid">
                    <div class="col-sm-6 col-md-4 col-md-offset-4">
                        <div class="account-wall">
                            <form class="form-signup" method = "POST">
                                <input type="text" name = "userID" class="form-control" placeholder="Enter userID..." required autofocus style="width:50%; float:left">
                                <button class="btn btn-md btn-info btn-block" type="submit" name = "btnSearch" style="width:45%; float:right; ">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class = "row">
                <div class = "container">
                    <div class = "col-md-12">
                        <div class = "panel-body">
                            <div class = "table-responsive">
                                <h3 style="text-align:center;">Student Detail</h3>
                                <table class = "table table-hover table-striped table-bordered">
                                    <tr class = "warning">
                                        <th>Student ID:</th>
                                        <td><?php echo $studentId ?></td>
                                        <th>Username:</th>
                                        <td><?php echo $username ?></td>
                                    </tr>
                                    <tr class = "info">
                                        <th>Student Name:</th>
                                        <td><?php echo $studentName ?></td>
                                        <th>Email:</th>
                                        <td><?php echo $email ?></td>
                                    </tr>
                                    <tr class = "warning">
                                        <th>Gender:</th>
                                        <td><?php echo $gender ?></td>
                                        <th>Date Of Birth:</th>
                                        <td><?php echo $dateOfBirth ?></td>
                                    </tr>
                                    <tr class = "info">
                                        <th>Address:</th>
                                        <td><?php echo $address ?></td>
                                        <th>Phone:</th>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class = "row">
                <div class = "container">
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
                                        <td><?php echo $regDate ?></td>
                                        <td><?php echo $subjectName ?></td>
                                        <td><?php echo $marksObtained ?></td>
                                        <td><?php echo $remarks ?></td>
                                    </tr>
                                </table>
                            </div>
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
    <?php
}
?>