<main>
    <div id="navBtn">
    <a href="#nav" class="lines">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </a> 
    </div>
    <form action="#"  method="post" name="quiz<?php echo $quizNum;?>" id="quiz<?php echo $quizNum;?>">
        <?php
            // Loop through the questions
            for ($i = 0; $i < count($questions); $i++) {

                if (isset($images)) {
                    echo "<img class=\"question-img\" src=\"" . $images[$i] . "\">";
                }
                
                $correct = "\"\"";

                // If the answer was incorrect, mark that question with an 'incorrect' class
                if ($_POST && !($_POST["question" . ($i + 1)] == $answers[$i])) {
                    $correct = "\"incorrect\"";
                }


                echo "<h4 class=" . $correct . "> ".$questions[$i]."</h4>";
                
                // Loop through the choices for that question
                for ($x = 0; $x < count($choices[$i]); $x++) {
                    $questionName = "\"question". ($i + 1) . "\"";
                    $choiceVal = $choices[$i][$x];

                    echo "<div> <input type=\"radio\" name=".$questionName." value=\"".$choices[$i][$x]."\"> <label for=".$questionName.">". $choiceVal . "</label></div>";

                }
            }
        ?>
        <input id="quiz-submit" class="start " type="submit" value="Submit Quiz">

        <?php
            // If there are posts, display the score
            if ($_POST && (count($_POST) == count($questions))) {
                $score = 0;

                // For each correct response, increment the score
                for ($x = 0; $x < count($_POST); $x++) {
                    if ($_POST["question" . ($x + 1)] == $answers[$x]) {
                        $score++;
                    }
                }

                // Print the total score
                echo "<br/>";
                $scoreString = $score . "/" . count($questions);
                
                // ID for results div is 'quiz-results'
                echo
                    "<div id=\"quiz-results\">
                        <h2>Your Score: " . $scoreString . "</h2>
                    </div>";

                // Show the 'next section' button
                echo 
                    "<a href=\"" . $next . "\"
                        <button class=\"start\">Next Section -></button>
                    </a>";
            }

            // If there are no posts, print a message telling the user to answer all questions
            if ($_POST && (count($_POST) != count($questions)) && $quizNum != 5) {
                echo 
                    "<div id=\"quiz-results\">
                        <p>Please answer all questions before submitting<p>
                    </div>";
            }
        ?>
        
    </form>
</main>