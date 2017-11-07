<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:HomePage.php");
} else {
    //Get all the questions
    $mysqli = new mysqli("localhost", "root", "system", "oes");
    $resultArray = array();
    $correctAnswer = array();
    $selectQuery = "SELECT * FROM question WHERE subjectName='C'";
    $result = $mysqli->query($selectQuery);
    //mt_rand(10,100)
    while ($row = $result->fetch_assoc()) {
        $question1 = $row['Question'];
        $resultArray[] = $row;
        $correctAnswer[] = $row['answer'];
    } {

        if (isset($_POST['btnSubmit'])) {
            $answer = array();
            $selectedAnswer = array();
            $marks = 0;

            for ($i = 0; $i < 10; $i++) {

                $selectedAnswer[$i] = $_POST['Q' . ($i + 1)];
            }


            for ($i = 0; $i < 10; $i++) {
                $tempSelectedAnswer = $selectedAnswer[$i];
                $tempCorrectedAnswer = $correctAnswer[$i];
                if (strcmp($tempSelectedAnswer, $tempCorrectedAnswer)) {
//                    echo "<br>Length of selected answer : " . strlen($tempSelectedAnswer) . " SELECTE ANSWER : " . $tempSelectedAnswer;
//                    echo "<br>LEngth of Corrected Asnwer : " . strlen($tempCorrectedAnswer) . " Corrected ANSWER : " . $tempCorrectedAnswer . "<br><br>";
                } else {
                    $marks = $marks + 1;
                }
            }
            if ($marks > 8) {
                $remarks = "Excellent";
            } else if ($marks < 8 and $marks > 5) {
                $remarks = "Good";
            } else {
                $remarks = "Work Hard";
            }

            echo "<br>Your Total marks : " . $marks;
            $updateSql = "UPDATE students SET marks_obtained='" . $marks . "', remarks='" . $remarks."' , SubjectName='C'"
                    . " WHERE Uname='" . $_SESSION['username']."'";
            
            if (($mysqli->query($updateSql)) === TRUE) {
                echo "Data Changes to DAtabase Successfully";
            }else{
                echo 'Eroor : '.$updateSql;
            }
        }
        ?>
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta name="description" content="">
                <meta name="author" content="">

                <title>Test</title>

                <!-- Bootstrap Core CSS -->
                <link href="css/bootstrap.min.css" rel="stylesheet">
            </head>
            <body style = "background-color:#FFFFFF">
                <div class = "row">
        <?php
        include 'StudentButtonPage.php';
        ?>
                </div>
                <!-- Page Content -->

                <div class="container">
                    <form method="POST">
                        <div class="row">

                            <div class="col-md-12 col-sm-12 col-lg-12text-left" >
                                <div class = "form-group">
                                    <label>Q1. </label>
                                    <label id = "Question1"><?php echo ($resultArray[0]['Question']); ?></label>
                                    <div class = "radio">
                                        <label><input type="radio" name = "Q1" id="Q1Option1" value="<?php echo ($resultArray[0]['option1']); ?>"><?php echo ($resultArray[0]['option1']); ?></label>
                                    </div>
                                    <div class = "radio">
                                        <label><input type="radio" name = "Q1" id="Q1Option2" value="<?php echo ($resultArray[0]['option2']); ?>"><?php echo ($resultArray[0]['option2']); ?></label>
                                    </div>
                                    <div class = "radio">
                                        <label><input type="radio" name = "Q1" id="Q1Option3" value="<?php echo ($resultArray[0]['option3']); ?>"><?php echo ($resultArray[0]['option3']); ?></label>
                                    </div>
                                    <div class = "radio">
                                        <label><input type="radio" name = "Q1" id="Q1Option4" value="<?php echo ($resultArray[0]['option4']); ?>"><?php echo ($resultArray[0]['option4']); ?></label>
                                    </div>
                                </div>		
                                <hr/>

                                <div class = "form-group">
                                    <label>Q2. </label>
                                    <label id = "Question2"><?php echo ($resultArray[1]['Question']); ?></label>
                                    <div class = "radio">
                                        <label><input type="radio" name = "Q2" id="Q2Option1" value="<?php echo ($resultArray[1]['option1']); ?>"><?php echo ($resultArray[1]['option1']); ?></label>
                                    </div>
                                    <div class = "radio">
                                        <label><input type="radio" name = "Q2" id="Q2Option2" value="<?php echo ($resultArray[1]['option2']); ?>"><?php echo ($resultArray[1]['option2']); ?></label>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q2" id="Q2Option3" value="<?php echo ($resultArray[1]['option3']); ?>"><?php echo ($resultArray[1]['option3']); ?></label>
                                        </div>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q2" id="Q2Option4" value="<?php echo ($resultArray[1]['option4']); ?>"><?php echo ($resultArray[1]['option4']); ?></label>
                                        </div>
                                    </div>		
                                    <hr/>

                                    <div class = "form-group">
                                        <label>Q3. </label>
                                        <label id = "Question3"><?php echo ($resultArray[2]['Question']); ?></label>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q3" id="Q3Option1" value="<?php echo ($resultArray[2]['option1']); ?>"><?php echo ($resultArray[2]['option1']); ?></label>
                                        </div>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q3" id="Q3Option2" value="<?php echo ($resultArray[2]['option2']); ?>"><?php echo ($resultArray[2]['option2']); ?></label>
                                        </div>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q3" id="Q3Option3" value="<?php echo ($resultArray[2]['option3']); ?>"><?php echo ($resultArray[2]['option3']); ?></label>
                                        </div>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q3" id="Q3Option4" value="<?php echo ($resultArray[2]['option4']); ?>"><?php echo ($resultArray[2]['option4']); ?></label>
                                        </div>
                                    </div>		
                                    <hr/>

                                    <div class = "form-group">
                                        <label>Q4. </label>
                                        <label id = "Question4"><?php echo ($resultArray[3]['Question']); ?></label>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q4" id="Q4Option1" value="<?php echo ($resultArray[3]['option1']); ?>"><?php echo ($resultArray[3]['option1']); ?></label>
                                        </div>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q4" id="Q4Option2" value="<?php echo ($resultArray[3]['option2']); ?>"><?php echo ($resultArray[3]['option2']); ?></label>
                                        </div>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q4" id="Q4Option3" value="<?php echo ($resultArray[3]['option3']); ?>"><?php echo ($resultArray[3]['option3']); ?></label>
                                        </div>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q4" id="Q4Option4" value="<?php echo ($resultArray[3]['option4']); ?>"><?php echo ($resultArray[3]['option4']); ?></label>
                                        </div>
                                    </div>		
                                    <hr/>

                                    <div class = "form-group">
                                        <label>Q5. </label>
                                        <label id = "Question5"><?php echo ($resultArray[4]['Question']); ?></label>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q5" id="Q5Option1" value="<?php echo ($resultArray[4]['option1']); ?>"><?php echo ($resultArray[4]['option1']); ?></label>
                                        </div>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q5" id="Q5Option2" value="<?php echo ($resultArray[4]['option2']); ?>"><?php echo ($resultArray[4]['option2']); ?></label>
                                        </div>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q5" id="Q5Option3" value="<?php echo ($resultArray[4]['option3']); ?>"><?php echo ($resultArray[4]['option3']); ?></label>
                                        </div>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q5" id="Q5Option4" value="<?php echo ($resultArray[4]['option4']); ?>"><?php echo ($resultArray[4]['option4']); ?></label>
                                        </div>
                                    </div>		
                                    <hr/>

                                    <div class = "form-group">
                                        <label>Q6. </label>
                                        <label id = "Question6"><?php echo ($resultArray[5]['Question']); ?></label>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q6" id="Q6Option1" value="<?php echo ($resultArray[5]['option1']); ?>"><?php echo ($resultArray[5]['option1']); ?></label>
                                        </div>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q6" id="Q6Option2" value="<?php echo ($resultArray[5]['option2']); ?>"><?php echo ($resultArray[5]['option2']); ?></label>
                                        </div>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q6" id="Q6Option3" value="<?php echo ($resultArray[5]['option3']); ?>"><?php echo ($resultArray[5]['option3']); ?></label>
                                        </div>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q6" id="Q6Option4" value="<?php echo ($resultArray[5]['option4']); ?>"><?php echo ($resultArray[5]['option4']); ?></label>
                                        </div>
                                    </div>		
                                    <hr/>

                                    <div class = "form-group">
                                        <label>Q7. </label>
                                        <label id = "Question7"><?php echo ($resultArray[6]['Question']); ?></label>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q7" id="Q7Option1" value="<?php echo ($resultArray[6]['option1']); ?>"><?php echo ($resultArray[6]['option1']); ?></label>
                                        </div>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q7" id="Q7Option2" value="<?php echo ($resultArray[6]['option2']); ?>"><?php echo ($resultArray[6]['option2']); ?></label>
                                        </div>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q7" id="Q7Option3" value="<?php echo ($resultArray[6]['option3']); ?>"><?php echo ($resultArray[6]['option3']); ?></label>
                                        </div>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q7" id="Q7Option4" value="<?php echo ($resultArray[6]['option4']); ?>"><?php echo ($resultArray[6]['option4']); ?></label>
                                        </div>
                                    </div>		
                                    <hr/>

                                    <div class = "form-group">
                                        <label>Q8. </label>
                                        <label id = "Question8"><?php echo ($resultArray[7]['Question']); ?></label>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q8" id="Q8Option1" value="<?php echo ($resultArray[7]['option1']); ?>"><?php echo ($resultArray[7]['option1']); ?></label>
                                        </div>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q8" id="Q8Option2" value="<?php echo ($resultArray[7]['option2']); ?>"><?php echo ($resultArray[7]['option2']); ?></label>
                                        </div>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q8" id="Q8Option3" value="<?php echo ($resultArray[7]['option3']); ?>"><?php echo ($resultArray[7]['option3']); ?></label>
                                        </div>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q8" id="Q8Option4" value="<?php echo ($resultArray[7]['option4']); ?>"><?php echo ($resultArray[7]['option4']); ?></label>
                                        </div>
                                    </div>		
                                    <hr/>

                                    <div class = "form-group">
                                        <label>Q9. </label>
                                        <label id = "Question9"><?php echo ($resultArray[8]['Question']); ?></label>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q9" id="Q9Option1" value="<?php echo ($resultArray[8]['option1']); ?>"><?php echo ($resultArray[8]['option1']); ?></label>
                                        </div>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q9" id="Q9Option2" value="<?php echo ($resultArray[8]['option2']); ?>"><?php echo ($resultArray[8]['option2']); ?></label>
                                        </div>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q9" id="Q9Option3" value="<?php echo ($resultArray[8]['option3']); ?>"><?php echo ($resultArray[8]['option3']); ?></label>
                                        </div>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q9" id="Q9Option4" value="<?php echo ($resultArray[8]['option4']); ?>"><?php echo ($resultArray[8]['option4']); ?></label>
                                        </div>
                                    </div>		
                                    <hr/>

                                    <div class = "form-group">
                                        <label>Q10. </label>
                                        <label id = "Question10"><?php echo ($resultArray[9]['Question']); ?></label>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q10" id="Q10Option1" value="<?php echo ($resultArray[9]['option1']); ?>"><?php echo ($resultArray[9]['option1']); ?></label>
                                        </div>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q10" id="Q10Option2" value="<?php echo ($resultArray[9]['option2']); ?>"><?php echo ($resultArray[9]['option2']); ?></label>
                                        </div>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q10" id="Q10Option3" value="<?php echo ($resultArray[9]['option3']); ?>"><?php echo ($resultArray[9]['option3']); ?></label>
                                        </div>
                                        <div class = "radio">
                                            <label><input type="radio" name = "Q10" id="Q10Option4" value="<?php echo ($resultArray[9]['option4']); ?>"><?php echo ($resultArray[9]['option4']); ?></label>
                                        </div>
                                    </div>	
                                </div>
                            </div>
                            <!-- /.row -->
                            <!--<a href = "TestpaperPage.php?submit" class = "btn btn-success" style = "text-decoration:none;">submit</a>-->

                            <button type="submit" class="btn btn-success" name="btnSubmit">Submit</button>
                    </form>
                </div>

        <?php
    }
    ?>
            <!-- /.container -->

            <!-- jQuery Version 1.11.1 -->
            <script src="js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>
            <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        </body>
    </html>
    <?php
}
?>