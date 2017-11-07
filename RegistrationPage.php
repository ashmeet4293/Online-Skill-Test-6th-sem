	<?php
		$mysqli = new mysqli("localhost", "root", "system", "onlineskilltest");
		if (isset($_POST['btnSignup'])) {
			$name = $_POST['fullname'];
			$email = $_POST['email'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$confirmPassword = $_POST['confirmPassword'];
			$gender = $_POST['gender'];
			$birthDate = $_POST['birthDate'];
			$phone = $_POST['phone'];
			$address = $_POST['address'];
			$regDate = date("Y-m-d H:i:s");
			$question = $_POST['question'];
			$answer = $_POST['answer'];
			
			$password_length = strlen($password);
			if($password_length <= 6){
				$error_msg = "Password Length Should Be More Than 6";
			}
			else if($password != $confirmPassword){
				$error_msg = "Password Donot Match";
			}
			else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				$error_msg = "Email Is Incorrect";
			}
			else{
				$insertquery ="INSERT INTO students(Fname,Email,Gender,DOB,Uname,Pass,Confirm_Pass,security_question,Answer,reg_date,address)
						VALUES ('$name','$email','$gender','$birthDate','$username','$password','$confirmPassword','$question','$answer','$regDate','$address')";

				if($mysqli->query($insertquery) === TRUE){
					$msg = "Registered Successfully";
				}
				else{
					$error_msg = "Unable To Register";
				}
			}
		}
	?>
<!DOCTYPE>
<html>
    <head>
        <title>Registration</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- CSS -->
        <link rel="StyleSheet" href="css/registration.css" type = "Text/CSS">

    </head>
    <body>
        <div class="container" style = "margin-top:50px">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <div class="account-wall">
                        <img class="profile-img" src="./img/team/addStudent.jpg" alt="admin">
                        <form method = "POST" class="form-signup">
							<p style="font-size:15px;color:red;text-align:center;font-family:verdana;"><?php if (isset($error_msg)){echo $error_msg;}?></p>
							<p style="font-size:15px;color:green;text-align:center;font-family:verdana;"><?php if (isset($msg)){echo $msg;}?></p>
                            <input type="text" name = "fullname" class="form-control" placeholder="Full Name..." required autofocus>
                            <input type="email" name = "email" class="form-control" placeholder="Email..." required autofocus>
							<input type="text" name = "username" class="form-control" placeholder="Username..." required autofocus>
                            <input type="password" name = "password" class="form-control" placeholder="Password..." required autofocus>
                            <input type="password" name = "confirmPassword" class="form-control" placeholder="Confirm Password..." required autofocus>
                            <select name="gender" class="form-control" required="required">
                                <option value="" selected="">Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                            <input type="date" name = "birthDate" class="form-control" placeholder="Date of Birth..." required autofocus>
							<input type="phone" name = "phone" class="form-control" placeholder="Phone..." required autofocus>
                            <input type="text" name = "address" class="form-control" placeholder="Address..." required autofocus>
                            <select name="question" class="form-control" required="required">
                                <option value="" selected="">Select Your Security Question</option>
                                <option value="Which is your favorite book?">Which is your favorite book?</option>
                                <option value="Which is your favorite food?">Which is your favorite food?</option>
                                <option value="What is your pet’s name?">What is your pet’s name?</option>
                                <option value="Which is your favorite color?">Which is your favorite color?</option>
                                <option value="Which is your favorite movie?">Which is your favorite movie?</option>
                            </select>
                            <input type="text" name = "answer" class="form-control" placeholder="Your Answer..." required autofocus> 
                            <button class="btn btn-md btn-success btn-block" type="submit" name ="btnSignup">Sign Up</button>
                            <label>&emsp;<a href = "StudentLoginPage.php" style="color:black;text-decoration:none;">Already Registered?</a> &emsp;&emsp;&emsp;&emsp;<a href = "HomePage.php" style="color:black;text-decoration:none;">Home</a></label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>