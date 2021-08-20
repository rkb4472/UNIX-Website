<?php
    $path = "./";
    $page = "Unit 3 Section 2";
    include $path.'assets/inc/header.php';
    include $path.'assets/inc/nav.php';
?>

<main>
    <div id="navBtn">
    <a href="#nav" class="lines">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </a> 
    </div>
    <button class="start" onClick="location.href='unit3section3.php';">Next Section -></button>
    <h2 class="unixtutorial"> Unit Three - File Management </h2>
    <h3>Section Two: File Creation</h3>

    <h4>The Touch Command:</h4>

    <p>
        The touch command is used to create new, empty files. Touch also has several options to change file access and 
        modification times. These options are as follows:
    </p>

    <img src="./assets/images/unit3table2.PNG" alt="table of touch command options">

    <p>
        Here’s an example of the basic touch command being used in the command line
    </p>
    <img src="./assets/images/unit3img1.PNG" alt="example code of touch command">

    <h4>The Vi Command:</h4>
    <p>
        Another way to create a file is by using the vi command. The vi command opens a simple text editor for you to enter information into. 
        If the file entered into the command does not exist, then it will be created. If the file does exist, the text editor will display the 
        first page of that file for you to edit.
    </p>
    <p>
        The vi text editor is quite dissimilar to most text editors that you might be familiar with such as Microsoft Word or notepad, 
        but the basic commands are as follows:
    </p>
    <img src="./assets/images/unit3table3.PNG" alt="table for vi text editor commands">

    <p>
        Below is an example of creating a new file and writing to that file with the vi command.
    </p>
    <img src="./assets/images/unit3img2.png" alt="example code of creating a file and writing to it with vi">
 </main>
</body>
</html>