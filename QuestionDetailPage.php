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
            <title>Question Detail</title>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Bootstrap Core CSS -->
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <!-- CSS -->
            <link href="css/question.css" rel="stylesheet">
        </head>
        <body>
            <?php
            include_once 'ButtonPage.php';
            ?>
            <div class = "row">
                <div class="col-sm-6 col-md-12">
                    <div class="container-fluid">
                        <div class = "table-responsive">
                            <table class = "table table-hover table-bordered">
                                <tr class = "success">
                                    <th>Subject Name</th>
                                    <th>Question ID</th>
                                    <th>Question</th>
                                    <th>Option 1</th>
                                    <th>Option 2</th>
                                    <th>Option 3</th>
                                    <th>Option 4</th>
                                    <th>Answer</th>
                                </tr>
                                <?php
                   
                                    $sql = "SELECT * FROM question";
                                    $result = $mysqli->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>"
                                        . "<td>" . $row["subjectName"] . "</td>"
                                        . "<td>" . $row["questionId"] . "</td>"
                                        . "<td> " . $row["Question"] . "</td>"
                                        . "<td> " . $row["option1"] . "</td>"
                                        . "<td>" . $row["option2"] . "</td>"
                                        . "<td> " . $row["option3"] . "</td>"
                                        . "<td>" . $row["option4"] . "</td>"
                                        ?>
                                        <?php
                                        "</tr>";
                                    }
                                
                                ?> 
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </html>
    <?php
}
?>