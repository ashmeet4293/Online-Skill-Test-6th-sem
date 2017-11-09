<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:HomePage.php");
} else {
    $mysqli = new mysqli("localhost", "root", "system", "oes");
    $update = false;
    if (isset($_POST['btnAdd'])) {
        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $gender = $_POST['gender'];
        $birthDate = $_POST['birthDate'];
//        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $regDate = date("Y-m-d H:i:s");
        $question = $_POST['question'];
        $answer = $_POST['answer'];

        $password_length = strlen($password);
        if ($password_length <= 6) {
            $error_msg = "Password Length Should Be More Than 6";
        } else if ($password != $confirmPassword) {
            $error_msg = "Password Donot Match";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_msg = "Email Is Incorrect";
        } else {

            try {

                $insertquery = "INSERT INTO students(Fname,Email,Gender,DOB,Uname,Pass,Confirm_Pass,security_question,Answer,reg_date,address)
							VALUES ('$name','$email','$gender','$birthDate','$username','$password','$confirmPassword','$question','$answer','$regDate','$address')";

                if ($mysqli->query($insertquery) === TRUE) {
                    $msg = "Registered Successfully";
                } else {
                    $error_msg = "Unable To Register";
                }
            } catch (Exception $ex) {
                $message = ($ex->getTrace());
            }
        }
        if (isset($_POST['btnLoadTable'])) {
            echo "Load button Pressed";
        }
    } else {
        $name = "";
        $email = "";
        $username = "";
        $password = "";
        $confirmPassword = "";
        $gender = "";
        $birthDate = "";
//            $phone = $row['phone'];
        $address = "";
        $regDate = "";
        $question = "";
        $answer = "";
    }

//    $sqli = new mysqli("localhost", "root", "system", "oes");
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $update = true;

        try {
            $selectQuery = "SELECT * FROM students WHERE s_id=" . $id;

            if (!$studentData = $mysqli->query($selectQuery)) {
                echo "ERROR : " . mysqli_error($mysqli);
            }
        } catch (Exception $ex) {
            echo "Execption : " . $ex;
        }

        if (count($studentData) == 1) {
            $row = mysqli_fetch_array($studentData);
            $name = $row['Fname'];
            $email = $row['Email'];
            $username = $row['Uname'];
            $password = $row['Pass'];
            $confirmPassword = $row['Confirm_Pass'];
            $gender = $row['Gender'];
            $birthDate = $row['DOB'];
//            $phone = $row['phone'];
            $address = $row['Address'];
//            $regDate = $row('Reg_Date');
            $question = $row['security_question'];
            $answer = $row['Answer'];

            if (isset($_POST['btnUpdate'])) {
                $name = $_POST['fullname'];
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $confirmPassword = $_POST['confirmPassword'];
                $gender = $_POST['gender'];
                $birthDate = $_POST['birthDate'];
//                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $regDate = date("Y-m-d H:i:s");
                $question = $_POST['question'];
                $answer = $_POST['answer'];

                $updateSql = "UPDATE students SET Fname='" . $name . "',Email='" . $email . "',Uname='" . $username
                        . "',Pass='" . $password . "',Confirm_Pass='" . $confirmPassword . "',Gender='" . $gender . "',DOB='" . $birthDate
                        . "',Address='" . $address . "',security_question='" . $question . "',Answer='" . $answer
                        . "' WHERE s_id=" . $id;

                if (($mysqli->query($updateSql)) === TRUE) {
                    echo "Student update Successfully";
                    $name = "";
                    $email = "";
                    $username = "";
                    $password = "";
                    $confirmPassword = "";
                    $gender = "";
                    $birthDate = "";
//            $phone = $row['phone'];
                    $address = "";
                    $regDate = "";
                    $question = "";
                    $answer = "";
                    $update = false;
                } else {
                    echo "Student  cannot updated ";
                }
            }
        }
    } else if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $query = "DELETE FROM students WHERE s_id=" . $id;
        if ($mysqli->query($query) === TRUE) {
            echo "Student Deleted Succesfully";
        }
    }
}
?>





<!DOCTYPE>
<html>
    <head>
        <title>Student Management</title>
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
                <div class="col-sm-6 col-md-3">
                    <div class="account-wall">
                        <img class="profile-img" src="./img/team/addStudent.jpg" alt="admin">
                        <form class="form-signup" method = "POST">
                            <p style="font-size:15px;color:red;text-align:center;font-family:verdana;"><?php
                                if (isset($error_msg)) {
                                    echo $error_msg;
                                }
                                ?></p>
                            <p style="font-size:15px;color:green;text-align:center;font-family:verdana;"><?php
                                if (isset($msg)) {
                                    echo $msg;
                                }
                                ?></p>
                            <input type="text" name = "fullname" class="form-control" placeholder="Full Name..." required autofocus value="<?php echo $name; ?>">
                            <input type="email" name = "email" class="form-control" placeholder="Email..." required autofocus value= "<?php echo $email; ?>" >
                            <input type="text" name = "username" class="form-control" placeholder="Username..." required autofocus value= "<?php echo $username; ?>">
                            <input type="password" name = "password" class="form-control" placeholder="Password..." required autofocus value= "<?php echo $password; ?>">
                            <input type="password" name = "confirmPassword" class="form-control" placeholder="Confirm Password..." required autofocus value= "<?php echo $confirmPassword; ?>">
                            <select name="gender" class="form-control" required="required">
                                <option value="" selected="">Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                            <input type="date" name = "birthDate" class="form-control" placeholder="Date of Birth..." required autofocus value= "<?php echo $birthDate; ?>">
                            <input type="text" name = "address" class="form-control" placeholder="Address..." required autofocus value= "<?php echo $address; ?>">
                            <!--<input type="phone" name = "phone" class="form-control" placeholder="Phone..." required autofocus value= "<?php echo $p; ?>">-->
                            <select name="question" class="form-control" required="required" value= "<?php echo $question; ?>">
                                <option value="" selected="">Select Your Security Question</option>
                                <option value="Which is your favorite book?">Which is your favorite book?</option>
                                <option value="Which is your favorite food?">Which is your favorite food?</option>
                                <option value="What is your pet’s name?">What is your pet’s name?</option>
                                <option value="Which is your favorite color?">Which is your favorite color?</option>
                                <option value="Which is your favorite movie?">Which is your favorite movie?</option>
                            </select>
                            <input type="text" name = "answer" class="form-control" placeholder="Your Answer..." required autofocus value= "<?php echo $answer; ?>">
                            <?php if ($update == false): ?>
                                <button class="btn btn-sm btn-success" type="submit" name = "btnAdd">Add</button>
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
                            <thead style="font-size:12px; text-align:center;">
                                <tr class = "success">
                                    <th>Student Name</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Gender</th>
                                    <th>Date Of Birth</th>
                                    <th>Address</th>
                                    <!--<th>Phone</th>-->
                                    <th colspan = "2">Action</th>
                                </tr>
                            </thead>
                            <tbody style="font-size:13px;">
                                <?php
                                if (!isset($_SESSION['username'])) {
                                    header("location:HomePage.php");
                                } else {
//                                    $mysqli = new mysqli("localhost", "root", "system", "oes");



                                    $sql = "SELECT * FROM students";
                                    $result = $mysqli->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>"
                                        . "<td>" . $row["Fname"] . "</td>"
                                        . "<td>" . $row["Email"] . "</td>"
                                        . "<td> " . $row["Uname"] . "</td>"
                                        . "<td> " . $row["Gender"] . "</td>"
                                        . "<td>" . $row["DOB"] . "</td>"
                                        . "<td> " . $row["Address"] . "</td>"
                                        ?>
                                    <td><a href = "StudentManagementPage.php?edit=<?php echo $row['s_id']; ?>" class = "btn-warning" style="text-decoration:none;">Edit</a></td>"
                                    <td><a href = "StudentManagementPage.php?delete=<?php echo $row['s_id']; ?>" class = "btn-danger" style="text-decoration:none;">Delete</a></td>"
                                    <?php
                                    "</td></tr>";
                                }
                            }
                            ?> 
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
