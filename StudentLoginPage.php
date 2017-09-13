<?php
$mysqli = new mysqli("localhost", "root", "system", "oes");

if (isset($_POST['btnLogin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = 'select * from students where email = "' . $email . '" and Pass = "' . $password . '"';
    if ($mysqli->query($result) == true) {
        session_start();
        $_SESSION['username'] = $email;
        header('location:StudentPage.php');
    } else {
        echo "Invalid Account";
    }
//	
}
?>
<!DOCTYPE>
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- CSS -->
        <link rel="StyleSheet" href="css/studentlogin.css" type = "Text/CSS">

    </head>
    <body>
        <div class="container" style = "margin-top:50px">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <div class="account-wall">
                        <img class="profile-img" src="./img/team/kundan.jpg" alt="admin">
                        <form class="form-signin" method = "POST">
                            <input type="text" name = "email" class="form-control" placeholder="Email..." required autofocus>
                            <input type="password" name = "password" class="form-control" placeholder="Password..." required>
                            <button class="btn btn-lg btn-success btn-block" type="submit" name = "btnLogin">Login</button>
                            <p class="text-center new-account">Click <a href="RegistrationPage.php">Sign Up</a> To Create Account</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>