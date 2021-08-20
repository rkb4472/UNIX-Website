<?php
    $path = "./";
    $page = "Unit 2 Section 2";
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
  <button class="start" onClick="location.href='unit2section3.php';">Next Section -></button>
  <h2 class="unixtutorial"> Unit Two - Directories </h2>
  <h3>Section Two: Viewing Files and Directories </h3>
  <h4> Home Directory </h4>
  <p>
    This is the directory that you end up in when you first login to unix. The name of your home directory is your username. Your home directory is the location of all of your files and subdirectories. In order to navigate to your home directory at anytime you can use the following command: cd ~
  </p>    
  <p>
    The ~ is what brings you back to your home directory. 
  </p>
  <p>
    If you would like to go to another user’s home directory you use the command: cd ~username <br>
    Except you would replace username with their actual username.
  </p>
  <p>
    To go to your last directory you use the following command -
  </p>
  <img src="./assets/images/unit2img2.png" alt="example code of cd ~ command">
  <p> And you will learn more about this cd command later on.  </p>

  <h4> Pathnames </h4>
  <p> Pathnames indicate the position of files in the hierarchy. Different elements of a pathname are separated by a slash (/). </p>
  <p> Absolute pathnames - <br>
        This means you are describing the location of a file in relation to the root. <br> 
        Absolute pathnames always start with a slash (/). <br>
        Examples: <br>
        /usr/passwords <br>
        /users/rkb/test/notes 
  </p>
  <p>
    Relative Pathnames - <br>
    This means you are describing the location of a file in relation to your current working directory. <br>
    Relative pathnames never start with a slash (/). <br>
    Examples: <br>
    ISTE240/exer <br>
    temp/test/dir2 <br>
</p>
 <h4> Viewing Files/Directoories </h4>
 <h4>Working Directory </h4>
 <p> When you are working in Unix, the directory that you are currently “working in” is called your working directory. </p>
 <p> 
    In order to find out where you are located within the hierarchy (your current working directory), you would use the following command: pwd <br>
    pwd <br>
    Example:
 </p>
 <img src="./assets/images/unit2img3.png" alt="example code of pwd command">
 <p>
 If you would like to view the contents of a directory or list directories you use the ls command. <br>
ls dirname (replace dirname with the actual name of the directory) <br>
This command will list the contents of your current working directory in alphabetical order (except for files that do not begin with a dot). <br>
If you just use the command ls it will list the contents of the current directory that you are in. <br>
Example:
</p>
<img src="./assets/images/unit2img4.png" alt="example code of ls command">
<p>
There are some variations of the ls command that will adjust the files and directories you view and the information you see about them in the output. <br>
Command: ls -a <br>
ls -a <br>
lists all the files including files whose names begin with a dot (.) <br>
files that begin with a dot (.) are called hidden files <br>
Command: ls -l <br>
This command is the long listing of the directory files. It lists more than just the filename. It also lists permissions information, owner of the file, length of the file, date and time of the last change to the file. <br>
Example:
</p>
<img src="./assets/images/unit2img5.png" alt="example code of ls -a and ls -a">
<p>
Command: ls -la <br>
This combines the previous two commands (ls -l and ls -a).
</p>
<h4> Types of Directories </h4>
<p>
This section goes over the two following types of directories: . (dot) and .. (dot dot). <br>
Filename . (dot) means the current working directory. <br>
Filename .. (dot dot) means the directory one level above the current working directory (also known as the parent directory).
</p>
</main>
</body>
</html>