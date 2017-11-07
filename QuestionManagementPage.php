<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:HomePage.php");
} else {

    $mysqli = new mysqli("localhost", "root", "system", "oes");
    $update=false;
    if (isset($_POST['btnSignup'])) {

        $subjectId = $_POST['subject'];
        $questionId = $_POST['questionID'];
        $question = $_POST['question'];
        $option1 = $_POST['option1'];
        $option2 = $_POST['option2'];
        $option3 = $_POST['option3'];
        $option4 = $_POST['option4'];
        $answer = $_POST['answer'];

        try {

            $insertquery = "INSERT INTO question(subjectName,Question,option1,option2,option3,option4,answer)
							VALUES ('$subjectId','$question','$option1','$option2','$option3','$option4','$answer')";

            if ($mysqli->query($insertquery) === TRUE) {
                $msg = "Question Inserted Successfully";
            } else {
                $error_msg = "Unable To Register";
            }
        } catch (Exception $ex) {
            $message = ($ex->getTrace());
            echo $message;
        }
    } else {
        $subjectId = "";
        $questionId = "";
        $question = "";
        $option1 = "";
        $option2 = "";
        $option3 = "";
        $option4 = "";
        $answer = "";
    }

//    $mysqli = new mysqli("localhost", "root", "system", "oes");

    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $update = true;
        $query = "SELECT * FROM question WHERE questionId=" . $id;
        $record = $mysqli->query($query);

        if (count($record) == 1) {
            $row = mysqli_fetch_array($record);
            $subjectId = $row["subjectName"];
            $questionId = $row["questionId"];
            $question = $row["Question"];
            $option1 = $row["option1"];
            $option2 = $row["option2"];
            $option3 = $row["option3"];
            $option4 = $row["option4"];
            $answer = $row["answer"];

            if (isset($_POST['btnUpdate'])) {
                $subjectId = $_POST['subject'];
                $questionId = $_POST['questionID'];
                $question = $_POST['question'];
                $option1 = $_POST['option1'];
                $option2 = $_POST['option2'];
                $option3 = $_POST['option3'];
                $option4 = $_POST['option4'];
                $answer = $_POST['answer'];

                $updateSql = "UPDATE question SET subjectName='" . $subjectId . "',question='" . $question . "',option1='" . $option1 .
                        "',option2='" . $option2 . "',option3='" . $option3 . "',option4='" . $option4 . "',answer='" . $answer
                        . "' WHERE questionId=" . $questionId;

                if (($mysqli->query($updateSql)) === TRUE) {
                    echo "Question update Successfully";
                    $subjectId = "";
                    $questionId = "";
                    $question = "";
                    $option1 = "";
                    $option2 = "";
                    $option3 = "";
                    $option4 = "";
                    $answer = "";
                    $update = false;
                } else {
                    echo "Question cannot updated ";
                }
            }
        }
    } else if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $query = "DELETE FROM question WHERE questionId=" . $id;
        if ($mysqli->query($query) === TRUE) {
            echo "Question Deleted Succesfully";
        }
    }
}
?>
<!DOCTYPE>
<html>
    <head>
        <title>Add Question</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- CSS -->
        <link rel="StyleSheet" href="css/question.css" type = "Text/CSS">
    </head>
    <body>
        <?php
        include 'ButtonPage.php';
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="account-wall">
                        <img class="profile-img" src="./img/team/addQuestions.jpg" alt="Question">
                        <form class="form-addQuestions" method = "POST">
                            <select name="subject" class="form-control" required="required">
                                <option value="na" selected="">Select Subject Name...</option>
                                <option value="C">C</option>
                                <option value="Java">Java</option>
                                <option value="C++">C++</option>
                            </select>
                            <input type="text" name = "questionID" class="form-control" placeholder="Question ID..." value="<?php echo $questionId; ?>">
                            <textarea rows= "5" name = "question" class="form-control" placeholder="Enter Question..." required autofocus value="<?php echo $question; ?>"></textarea>
                            <input type="text" name = "option1" class="form-control" placeholder="Option1..." required autofocus value="<?php echo $option1; ?>">
                            <input type="text" name = "option2" class="form-control" placeholder="Option2..." required autofocus value="<?php echo $option2; ?>">
                            <input type="text" name = "option3" class="form-control" placeholder="Option3..." required autofocus value="<?php echo $option3; ?>">
                            <input type="text" name = "option4" class="form-control" placeholder="Option4..." required autofocus value="<?php echo $option4; ?>">
                            <input type="text" name = "answer" class="form-control" placeholder="Answer..." required autofocus value="<?php echo $answer; ?>">
                            <?php if ($update == false): ?>
                                <button class="btn btn-sm btn-success" type="submit" name = "btnSignup">Add</button>
                            <?php else: ?>
                                <button class="btn btn-sm btn-success" type="submit" name = "btnUpdate">Update</button>

                            <?php endif ?>
                            <button class="btn btn-sm btn-primary" type="button" name = "btnLoadTable" style="float:right">Load Table</button>

                        </form>
                    </div>
                </div>
                <div class="col-sm-6 col-md-9">
                    <div class = "table-responsive">
                        <table class = "table table-hover table-bordered">
                            <thead>
                                <tr class = "success">
                                    <th>Subject Name</th>
                                    <th>Question ID</th>
                                    <th>Question</th>
                                    <th>Option 1</th>
                                    <th>Option 2</th>
                                    <th>Option 3</th>
                                    <th>Option 4</th>
                                    <th>Answer</th>
                                    <th colspan = "2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!isset($_SESSION['username'])) {
                                    header("location:HomePage.php");
                                } else {
                                    $mysqli = new mysqli("localhost", "root", "system", "oes");



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
                                        . "<td> " . $row["answer"] . "</td>"
                                        ?>
                                    <td><a href = "QuestionManagementPage.php?edit=<?php echo $row['questionId']; ?>" class = "btn-warning" style = "text-decoration:none;">Edit</a></td>
                                    <td><a href = "QuestionManagementPage.php?delete=<?php echo $row['questionId']; ?>" class = "btn-danger" style = "text-decoration:none;">Delete</a></td>
                                    <?php
                                    "</td></tr>";
                                }
                            }
                            ?> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
