<?php
    $path = "./";
    $page = "quiz4";
    $questions = array(
                    "Which of the following would be used to sort a file numerically AND prints the first line?", 
                    "Which of the following would ONLY count the number of words from a file?", 
                    "Which of the following would be used to add the last two lines from a text file from one file to another existing file without overwriting the output file?");

    $answers = array(
                    "",
                    "",
                    "tail -n 2 *filename1* >> *filename2*");

    $question1 = array(
                    "sort -n *filename* > head -n 1", 
                    "sort -n *filename* | head -n 1", 
                    "head -n 1 *filename* > sort -n",
                    "sort -n *filename* >> head -n 1");

    $question2 = array(
                    "wc -x *filename*", 
                    "wc -c *filename*",
                    "wc -w *filename*",
                    "wc -l *filename*");

    $question3 = array(
                    "tail -n 2 *filename1* >> *filename2*", 
                    "head -n 2 *filename1* >> *filename2*",
                    "tail -n 2 *filename1* > *filename2*",
                    "tail -n 1 *filename1* >> *filename2*");


    $choices = array($question1, $question2, $question3);

    $next = "unit2section5.php";
    
    $quizNum = 4;
    include $path.'assets/inc/header.php';
    include $path.'assets/inc/nav.php';
    include $path.'assets/inc/quiz.php';
    
?>

</body>
</html>