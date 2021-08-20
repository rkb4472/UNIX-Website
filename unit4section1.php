<?php
    $path = "./";
    $page = "Unit 2 Section 1";
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
  <button class="start" onClick="location.href='quiz4.php';">Unit Four Quiz -></button>
  <h2 class="unixtutorial"> Unit Four - Pipes and Filters </h2>
  <h3>Section One: Introduction </h3>
  <p> 
      This chapter covers the different ways you can sort through directories 
      for files using the sort command. Later we will cover the use of pipes in Unix, 
      symbols that are used to combine two commands in a single statement or have sent to a file.  
  </p>
    <h4> -Sort </h4>
    <p> 
    A command that will take the contents of a file and order them alphabetically line by line. 
    The example below shows off the use of the default function. With the use of options the sort command 
    becomes a useful way to organize the contents of .txt files.
    </p>
    <div class="sort">
      <img class="sortpic" src="./assets/images/unit4img1.png" alt="example code for sort command" width="248">
      <h4>Before Sort -></h4>
      <h4>Command -></h4>
      <h4>After Sort -></h4>
    </div>
    <p class="clear">
      So before the sort, the list in the text file is Carrot, Banana, Orange, Apple. The command is sort sortEx.txt. After this command, the list in the text file goes Apple, Banana, Carrot, Orange.
    </p>
    <h4>Sort Command Extensions </h4>
    <p> This is a list of the most useful options for the sort command to help order or remove specifics from the desired .txt file:  </p>

    <img src="./assets/images/unit4table1.PNG" alt="table for sort command options">
    <h4> -wc </h4>
    <p> The word count command or wc for short is a command that counts the lines, words, and characters from a file and outputs it to the shell. 
        Below is an example of the command and displays the lines, words, and characters in that order. </p>
    <img src="./assets/images/unit4img2.png" alt="example code for wc command" width="350">
    <p>(replace example) </p>
    <h4>-wc Command Options</h4>
    <p> This is a list of the options that can be used on the wc command that can count certain aspects of a file including words, lines, and characters. </p>
    <img src="./assets/images/unit4table2.PNG" alt="table for wc command options">

    <h4>Pipes</h4>
    <p>The | symbol is used to allow the user to use two Unix commands in a single statement. This opens the door to many different possibilities but is mainly 
        a great way to make the process a whole lot easier. Try using previously taught commands in conjunction with the | symbol to see the possible outcomes.</p>

    <img src="./assets/images/unit4table3.PNG" alt="table of | options">
</main>
</body>
</html>