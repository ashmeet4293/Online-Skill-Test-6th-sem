<?php
session_start();
$session_username=$_SESSION['username'];
if (!isset($session_username)) {
    header("location:HomePage.php");
    
} else {
    $mysqli = new mysqli("localhost", "root", "system", "oes");
    if (isset($_POST['btnChange'])) {

        $current_password = $_POST['currentPassword'];
        $newPassword = $_POST['newPassword'];
        $confirmPassword = $_POST['confirmPassword'];

        $sql = "SELECT * from students WHERE Fname ='" . $session_username . "' AND Pass ='" . $current_password . "'";
        $result = $mysqli->query($sql);
        if (count($result) == 1) {

            $updateSql = "UPDATE students SET Pass='" . $newPassword . "'";
//            $updatedRecord=
            if ($mysqli->query($updateSql) === TRUE) {
                echo "PAssword updated Successfully ";
            } else {
                $error_msg = "Unable To Update Password" . $mysqli->error;
                echo $error_msg;
            }
        } else {
            echo "Current password donot matched";
        }
    }
    ?>
    <!DOCTYPE>
    <html>
        <head>
            <title>Change Password</title>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Bootstrap Core CSS -->
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <!-- CSS -->
            <link rel="StyleSheet" href="css/login.css" type = "Text/CSS">

        </head>
        <body>
            <?php
            include 'StudentButtonPage.php';
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-md-offset-4">
                        <div class="account-wall">
                            <img class="profile-img" src="./img/team/changePassword.jpg" alt="admin">
                            <form class="form-signin" method = "POST">
                                <input type="password" name = "currentPassword" class="form-control" placeholder="Enter Current Password..." required autofocus>
                                <input type="password" name = "newPassword" class="form-control" placeholder="Enter New Password..." required>
                                <input type="password" name = "confirmPassword" class="form-control" placeholder="Confirm Password..." required>
                                <button class="btn btn-md btn-success btn-block" type="submit" name = "btnChange">Change</button>
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