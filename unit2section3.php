<?php
    $path = "./";
    $page = "Unit 2 Section 3";
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
  <button class="start" onClick="location.href='quiz2.php';">Unit Two Quiz -></button>
  <h2 class="unixtutorial"> Unit Two - Directories </h2>
  <h3>Section Three: Creating, Deleting, and Moving Between Directories </h4>
  <p>
    Directories can be created using the following command: mkdir dirname. <br>
    Then you replace dirname with the absolute or relative pathname of the directory that you are going to create.
</p>
<p>
Relative: mkdir mydir <br>
This creates the directory mydir in the current directory.
</p>
<img src="./assets/images/unit2img6.png" alt="example code of mkdir command">
<p>
Absolute: mkdir /test/mydir <br>
This creates the directory mydir in the test directory. <br>
Example:
</p>
<img src="./assets/images/unit2img7.png" alt="example code of mkdir command with absolute path">
<p>
If you would like to create more than one directory, add a space between the two pathnames of the directories you want to create. 
An example is the following: <br>
mkdir mydir2 mydir3 <br>
This creates the directories mydir2 and mydir3 in the current directory.
</p>
<img src="./assets/images/unit2img8.png" alt="example code of mkdir command to create multiple directories">
<p>The mkdir command will not give any output if it successfully creates the directory.</p> 

<p> Creating parent directories: <br>
If you’re creating a directory, the parent directories may not have been created so you will get an error. <br>
mkdir dir1/test/dirname <br>
You will get an error that will look like the following: <br>
mkdir: Failed to make directory “dir1/test/dirname” <br>
No such file or directory <br>
The solution to this problem is to use the -p  command because this creates all of the directories you need even if they did not exist before. <br>
Example: mkdir -p dir1/test/dirname <br>
This will successfully create the directory named dirname with this pathname without errors. <br>
Example: </p>

<img src="./assets/images/unit2img9.png" alt="example code of mkdir -p command">
<h4> Changing Directories </h4>
<p> In order to change directory, you use the cd command and the relative or absolute path. <br>
Relative Path - <br>
Example: cd dir1 <br>
This will change into the directory named dir1 </p>
<img src="./assets/images/unit2img10.png" alt="example code of cd command with relative path">
<p>Absolute Path - <br>
Example: cd /dir1/test <br>
This will change to the directory /dir1/test. </p>
<img src="./assets/images/unit2img11.png" alt="example code of cd command with absolute path">
<p> If you want to go up a directory you use .. <br>
Example: cd .. will bring you to the parent directory of the directory that you are in </p>
<img src="./assets/images/unit2img12.png" alt="example code of cd .. command">

<h4> Renaming Directories: </h4>
<p> You can rename a directory using the mv command. <br>
Example: mv olddir newdir <br>
This renames the directory olddir to newdir. </p>

<p>IMPORTANT COMMANDS FOR UNIT 2</p>
<img src="./assets/images/unit2Table.PNG" alt="table listing Unit 2 commands">
</main>
</body>
</html>