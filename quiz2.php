<?php
    $path = "./";
    $page = "quiz2";

    $images = array(
        "./assets/images/dirTree.png",
        "",
        "./assets/images/dirTree2.png",
        "./assets/images/matching.png",
        "",
        ""
    );

    $questions = array(
        "If you were located in the home directory, how would you move to the mystuff directory?", 
        "Which command is correctly matched to what it does?", 
        "Which choice gives correct examples of ways to get to the directory jack using both absolute and relative pathnames (given the user is located in the usr directory)?",
        "What does the command ls -l list about the files in a directory?",
        "How would you rename a directory called homework to test?",
        "Which of the following is false?"
    );

    $answers = array(
        "cd mkl/mystuff",
        "cd .. -> brings you up a directory (into the parent directory)",
        "absolute: cd /usr/home/jack relative: cd home/jack",
        "I, II, III IV, and V",
        "mv homework test",
        "rmdir can be used to delete any directory and all of the files in that directory"
    );

    $question1 = array(
        "cd mkl/mystuff", 
        "ls mkl/mystuff", 
        "ls mystuff",
        "cd /mkl/mystuff"
    );

    $question2 = array(
        "cd .. -> brings you up a directory (into the parent directory)", 
        "ls -l -> lists all files even hidden files",
        "pwd -> long listing of files",
        "mkdir -> removes a directory"
    );

    $question3 = array(
        "absolute: cd root/usr/home/jack relative: cd home/jack", 
        "absolute: cd /usr/home/jack relative:cd usr/home/jack",
        "absolute: cd /usr/home/jack relative: cd home/jack",
        "absolute: cd home/jack relative: cd /usr/home/jack"
    );

    $question4 = array(
        "all of the above", 
        "I, II, and III",
        "I, II, III IV, and V ",
        "all except VI"
    );

    $question5 = array(
        "mv test", 
        "rmdir homework mkdir test",
        "mv homework test",
        "mkdir test rmdir homework"
    );
                    
    $question6 = array(
        "cd ~ brings you back to your home directory", 
        "ls home/test would list the hidden files of the directory called test (assuming home/test is the correct relative pathname)",
        "rmdir can be used to delete any directory and all of the files in that directory",
        "pwd prints the current working directory"
    );

    $next = "unit3section1.php";

    $choices = array($question1, $question2, $question3, $question4, $question5, $question6);
    
    $quizNum = 2;
    include $path.'assets/inc/header.php';
    include $path.'assets/inc/nav.php';
    include $path.'assets/inc/quiz.php';
    
?>

</body>
</html>