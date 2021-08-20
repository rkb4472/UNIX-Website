<?php
    $path = "./";
    $page = "quiz5";
    $questions = array(
                    "You want to find txt files that start like “Te” and are 4 letters long, what would be the best Wild card to use in this scenario", 
                    "T/F -r-xrwxrw- The permissions given to owners of the file are read and write.");

    $answers = array(
                    "[]",
                    "");

    $question1 = array(
                    "*", 
                    "?", 
                    "[]");

    $question2 = array(
                    "True", 
                    "False");

    $choices = array($question1, $question2);
    
    $quizNum = 5;
    include $path.'assets/inc/header.php';
    include $path.'assets/inc/nav.php';
    include $path.'assets/inc/quiz.php';
    
?>

</body>
</html>