<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:HomePage.php");
} else {
    $mysqli = new mysqli("localhost", "root", "system", "oes");
    if(isset($_POST['btnAdd'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $securityQuestion = $_POST['question'];
        $securityAnswer = $_POST['answer'];

        $password_length = strlen($password);
        if ($password_length <= 6) {
            $error_msg = "Password Length Should Be More Than 6";
        } else if ($password != $confirmPassword) {
            $error_msg = "Password Donot Match";
        } else {

            try {

                $insertquery = "INSERT INTO admin(Admin_name,password,security_question,Answer)
							VALUES ('$username','$password','$securityQuestion','$securityAnswer')";

                if ($mysqli->query($insertquery) === TRUE) {
                    $msg = "Admin Added Successfully";
                } else {
                    $error_msg = "Unable To Register";
                }
            } catch (Exception $ex) {
                $message = ($ex->getTrace());
                echo $message;
            }
        }
        $mysqli->close();
    }
    ?>
    <!DOCTYPE>
    <html>
        <head>
            <title>Add Admin</title>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Bootstrap Core CSS -->
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <!-- CSS -->
            <link rel="StyleSheet" href="css/student.css" type = "Text/CSS">

        </head>
        <body>
            <?php
            include 'ButtonPage.php';
            ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-md-offset-4">
                        <div class="account-wall">
                            <img class="profile-img" src="./img/team/addStudent.jpg" alt="admin">
                            <form class="form-signup" method = "POST">
                                <!--<input type="text" name = "id" class="form-control" placeholder="Enter ID..." required autofocus>-->
                                <input type="text" name = "username" class="form-control" placeholder="Enter Username..." required autofocus>
                                <input type="password" name = "password" class="form-control" placeholder="Enter Password..." required autofocus>
                                <input type="password" name = "confirmPassword" class="form-control" placeholder="Confirm Password..." required autofocus>
                                <select name="question" class="form-control" required="required">
                                    <option value="na" selected="">Select Your Security Question</option>
                                    <option value="1">What Is your favorite book?</option>
                                    <option value="2">What is your favorite food?</option>
                                    <option value="3">What is your pet’s name?</option>
                                    <option value="4">What is your favorite color?</option>
                                    <option value="5">What is your movie?</option>
                                </select>
                                <input type="text" name = "answer" class="form-control" placeholder="Enter Answer..." required autofocus>
                                <button class="btn btn-md btn-success btn-block" type="submit" name = "btnAdd">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </html>
    <?php
}
?>