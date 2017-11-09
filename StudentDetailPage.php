<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:HomePage.php");
} else {
    $mysqli = new mysqli("localhost", "root", "system", "oes");
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!isset($_SESSION['username'])) {
                                header("location:HomePage.php");
                            } else {
//                                    $mysqli = new mysqli("localhost", "root", "system", "oes");



                                $sql = "SELECT * FROM students";
                                $result = $mysqli->query($sql);
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>"
                                    . "<td>" . $row["s_id"] . "</td>"
                                    . "<td>" . $row["Fname"] . "</td>"
                                    . "<td> " . $row["Email"] . "</td>"
                                    . "<td> " . $row["Uname"] . "</td>"
                                    . "<td> " . $row["Gender"] . "</td>"
                                    . "<td>" . $row["DOB"] . "</td>"
                                    . "<td> " . $row["Address"] . "</td>"
                                    ?>
                                    <?php
                                    "</tr>";
                                }
                            }
                            ?> 
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </body>
    </html>
    <?php
}
?>