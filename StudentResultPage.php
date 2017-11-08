<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:HomePage.php");
} else {
    $mysqli = new mysqli("localhost", "root", "system", "oes");
    $query = "SELECT Reg_Date,SubjectName,marks_obtained,remarks FROM students WHERE Uname='" . $_SESSION['username'] . "'";
    $record = $mysqli->query($query);
    if (count($record) == 1) {
        $row = mysqli_fetch_array($record);
        $regDate = $row['Reg_Date'];
        $subjectName = $row['SubjectName'];
        $marksObtained = $row['marks_obtained'];
        $remarks = $row['remarks'];
    }
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
                            <td><?php echo $regDate ?></td>
                            <td><?php echo $subjectName ?></td>
                            <td><?php echo $marksObtained ?></td>
                            <td><?php echo $remarks ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </body>
    </html>
    <?php
}
?>