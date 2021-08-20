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
  <button class="start" onClick="location.href='quiz5.php';">Unit Five Quiz -></button>
  <h2 class="unixtutorial"> Unit Five - General Usage Guidelines </h2>
  <h3>Section One: Introduction </h3>
  <p> 
     In Unit 5 the goal is to provide some extra information that adds to the rest of the Units, while not necessarily being built by the other Units.
  </p>
    <h4> Wild Cards </h4>
    <p> 
    Wild cards are special characters that are used to select multiple objects. There are 3 different types of wild cards as listed below:
    </p>
    <img src="./assets/images/unit5table1.PNG" alt="table of different types of wild cards">
    <p> Overall Wild Cards provide a ton of utility when managing large directories, and allow you to search for much more specific files.  </p>

    <h4> File Permissions and Security </h4>
    <p>When looking through your Unix files and directories you may have noticed that there appears to be a “jumbled mess” of characters before your file names similar to </p>
    
    <h4 class="text"><strong>d<span class="blue">rwx</span><span class="green">r-x</span><span class="red">r-x</span></strong></h4>
    <p> What appears to the untrained eye is actually a really compact description of who can access, edit and execute your files. </p>
    <p>
        Let's take a look at the first character in this chain d This character will either be d or - depending on if the file is a file, - , or a directory, d. <br>

        The next set of characters are where things get interesting rwx ,  The first 3 rwx permissions are what the Owner of the file is able to do, the r stands for Read , w stands for Write, and the X stands for execute, so in this case the owner is able to read, write and execute the file. <br>

        The next 3 characters are for the group, r-x, which unless you are dealing with multiple people in your file system you won’t have to worry about it so much, in this case the group is given the permission to read and execute the file. <br>

        The final 3 characters are for everyone r-x, of course you wouldn’t want a random person going around making edits to your file so they are only given permissions to read and execute the file.
    </p>

    <h4> The chmod Command </h4>
    <p> In order to change permissions of a file, we use the chmod command here is the chmod command with all of its attributes: </p>
    <p><strong><span class="red">chmod</span> <span class="lblue">{a,u,g,o}</span><span class="purple">{+,-}</span><span class="orange">{r,w,x}</span><span class="blue">files</span></strong></p>
    <p>
        Let's take it apart <br>

        Chmod is simply the command name <br>

        {a,u,g,o} This portion of the command describes what groups you want to give these permissions to 
    </p>

    <img src="./assets/images/unit5table2.PNG" alt="table of use of {a,u,g,o} section of chmod command">
    <p>
        <strong><span class="purple">{+,-}</span></strong> <br>
        The plus and minus simply represent if you want to add or subtract permissions from that object. <br>

        <strong><span class="orange">{r,w,x}</span></strong><br>
        This attribute refers to the permissions that were mentioned above, read, write and execute. <br>

        <strong><span class="blue">Files</span></strong><br>
        Finally this attribute is what file you want to give these permissions to.
    </p>
    
    </main>
</body>
</html>