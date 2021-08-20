<?php
    $path = "./";
    $page = "quiz3";
    $questions = array(
                    "Which command would you use to create an empty file while ensuring that the new file does not already exist?", 
                    "How would you exit the VI text editor without saving your changes?", 
                    "How many lines of text does the cat command print by default?",
                    "If two files named file_1 and file_2 existed in a directory, what would happen if the user entered the command: mv -n file_1 file_2",
                    "True or false: The rm command can delete directories by default");

    $answers = array(
                    "Touch -c *filename*",
                    ":q!",
                    "10",
                    "Nothing will happen",
                    "False");

    $question1 = array(
                    'Cat -n *filename*', 
                    'Touch -c *filename*', 
                    'Touch *filename*',
                    'Cat *filename*');

    $question2 = array(
                    ":q!", 
                    ":q",
                    ":x",
                    "*Escape*");

    $question3 = array(
                    "5", 
                    "10",
                    "15",
                    "20");

    $question4 = array(
                    "The user will be prompted to confirm if they want to overwrite the file_2", 
                    "file_1 will be renamed to file_2, and file_2 will be overwritten",
                    "file_1 will be renamed to file_2, and file_2 will be renamed to file_2~",
                    "Nothing will happen");

    $question5 = array(
                    "True", 
                    "False");

    $choices = array($question1, $question2, $question3, $question4, $question5);
    
    $next = "unit4section1.php";
    
    $quizNum = 3;
    include $path.'assets/inc/header.php';
    include $path.'assets/inc/nav.php';
    include $path.'assets/inc/quiz.php';
    
?>

</body>
</html>