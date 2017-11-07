<?php
$mysqli = new mysqli("localhost", "root", "system", "oes");

if (isset($_POST['btnLogin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = 'select * from admin where Admin_name = "' . $username . '" and Password = "' . $password . '"';
    $result=$mysqli->query($sql);
   
    if ( $result-> num_rows >0) {
        session_start();
        $_SESSION['username'] = $username;
        header('location:AdminPage.php');
    } 
	else {
        echo "Invalid Account";
    }
}
?>
<!DOCTYPE>
<html>
    <head>
        <title>Admin Login</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- CSS -->
        <link rel="StyleSheet" href="css/login.css" type = "Text/CSS">

    </head>
    <body>
        <div class="container-fluid" style = "margin-top:50px">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <div class="account-wall">
                        <img class="profile-img" src="./img/team/logo.jpg" alt="admin">
                        <form class="form-signin" method = "POST">
                            <input type="text" name = "username" class="form-control" placeholder="Username..." required autofocus>
                            <input type="password" name = "password" class="form-control" placeholder="Password..." required>
                            <button class="btn btn-md btn-success btn-block" type="submit" name = "btnLogin">Login</button>
                            <br/><label>&emsp;<a href = "AdminPasswordRetrivePage.php" style="color:black;text-decoration:none;">Forget Password?</a> &emsp;&emsp;&emsp;&emsp;<a href = "HomePage.php" style="color:black;text-decoration:none;">Home</a></label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>