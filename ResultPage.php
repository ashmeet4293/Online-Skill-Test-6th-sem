<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:HomePage.php");
} else {
    
    ?>
    <!DOCTYPE>
    <html>
        <head>
            <title>Result</title>
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
            <div class = "container-fluid">
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
                        <tr class = "info">

                            <?php
                            $mysqli = new mysqli("localhost", "root", "system", "oes");

                            $sql = "SELECT * FROM students";
                            $result = $mysqli->query($sql);

                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>"
                                . "<td>" . $row["s_id"] . "</td>"
                                . "<td>" . $row["Fname"] . "</td>"
                                . "<td> " . $row["Uname"] . "</td>"
                                . "<td> " . $row["Reg_Date"] . "</td>"
                                . "<td>" . $row["SubjectName"] . "</td>"
                                . "<td> " . $row["marks_obtained"] . "</td>"
                                . "<td>" . $row["remarks"] . "</td>"
                                ." </tr>"
                                        
                            
                            ?>
                            <?php
                            }
                            ?>

                    </table>
                </div>
            </div>
        </body>
    </html>
    <?php
}
?>