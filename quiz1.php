<?php
    $path = "./";
    $page = "quiz1";
    $questions = array(
                    "What is the correct definition of an Operating System?", 
                    "True/False: The Kernel is the part of Unix that users are directly able to interact with.", 
                    "True/False: Unix originally started  development in 1969.");

    $answers = array(
                    "An Operating System is a software that supports the hardware and resources of a device",
                    "False",
                    "True");

    $question1 = array(
                    "An Operating System is a software that supports the hardware and resources of a device", 
                    "An Operating System is a hardware that supports the hardware and resources of a device", 
                    "An Operating System is a software handles and controls the memory of a device",
                    "An Operating System is a hardware that produces the image you see on your monitor");

    $question2 = array(
                    "True", 
                    "False");

    $question3 = array(
                    "True", 
                    "False");

    $choices = array($question1, $question2, $question3);

    $next = "unit2section1.php";
    
    $quizNum = 1;
    include $path.'assets/inc/header.php';
    include $path.'assets/inc/nav.php';
    include $path.'assets/inc/quiz.php';
    
?>

</body>
</html>