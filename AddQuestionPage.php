<!DOCTYPE>
<?php
    $subjectId=$_POST['subjectID'];
    $questionId=$_POST['questionID'];
    $question=$_POST['question'];
    $option1=$_POST['option1'];
    $option2=$_POST['option2'];
    $option3=$_POST['option3'];
    $option4=$_POST['option4'];
    $answer=$_POST['answer'];
    
    
?>
<html>
    <head>
        <title>Online Skill Test</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- CSS -->
        <link rel="StyleSheet" href="css/registration.css" type = "Text/CSS">
    </head>
    <body>
        <div class = "btn-group btn-group-xs" style = "margin:5px 5px">
            <a href = "AdminPage.php"><button type="button" class="btn btn-primary" name = "home">Home</button></a>
            <a href = "LogoutPage.php"><button type="button" class="btn btn-warning" name = "logout" style="float:right">Logout</button></a>
        </div>
        <div class="container" style = "margin-top:20px">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <div class="account-wall">
                        <img class="profile-img" src="./img/team/addQuestions.jpg" alt="Question">
                        <form class="form-signup" method = "POST">
                            <input type="text" name = "subjectID" class="form-control" placeholder="Subject ID..." required autofocus>
                            <input type="text" name = "questionID" class="form-control" placeholder="Question ID..." required autofocus>
                            <textarea rows= "5" name = "question" class="form-control" placeholder="Enter Question..." required autofocus></textarea>
                            <input type="text" name = "option1" class="form-control" placeholder="Option1..." required autofocus>
                            <input type="text" name = "option2" class="form-control" placeholder="Option2..." required autofocus>
                            <input type="text" name = "option3" class="form-control" placeholder="Option3..." required autofocus>
                            <input type="text" name = "option4" class="form-control" placeholder="Option4..." required autofocus>
                            <input type="text" name = "answer" class="form-control" placeholder="Answer..." required autofocus>
                            <button class="btn btn-lg btn-success btn-block" type="submit" name = "btnSignup">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>