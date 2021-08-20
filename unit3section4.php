<?php
    $path = "./";
    $page = "Unit 3 Section 4";
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
    <button class="start" onClick="location.href='quiz3.php';">Unit Three Quiz -></button>
    <h2 class="unixtutorial"> Unit Three - File Management </h2>
    <h3>Section Four: File Manipulation</h3>

    <h4>The MV Command</h4>

    <p>
        The MV command is used to move files to another directory, and to rename files. In this section, 
        we’ll be focusing more on the latter. As an example of how this command works, let's say we want 
        to change the name of newfile1 to oldfile1. To do this, we would do something like the following:
    </p>

    <img src="./assets/images/unit3img14.png" alt="example code for mv command">

    <p>
        Notice how newfile1 becomes oldfile1. By default, mv does not warn the user if the new file already exists, 
        so be sure not to accidentally overwrite any files. There are options that can be added to the mv command 
        that ask the user for confirmation if the new file already exists. One of these options is the -i option. Here’s an example of how that looks:
    </p>
    <img src="./assets/images/unit3img15.png" alt="example code for mv command with -i option">

    <p>
        Because testfile already exists, mv prompts the user to make sure if they actually want to overwrite the file. Here, I said no.
    </p>

    <p>
        Another option that prevents files from being overwritten is the -n option. This option does not prompt the user, 
        but it does refuse to write to the file. Here is a list of the main options for the mv command:
    </p>

    <img src="./assets/images/unit3table7.PNG" alt="table of mv command options">

    <h4>The Rm Command</h4>
    <p>
        The rm command is used to delete files. By default, rm can’t delete directories, 
        but it can be made to delete directories with the addition of some options. Here's an example of a simple use case for rm:
    </p>
    <img src="./assets/images/unit3img16.png" alt="example code of rm command">

    <p>
        Like most other commands, rm can be used on multiple files at once, like so:
    </p>
    <img src="./assets/images/unit3img17.png" alt="example code of rm command on multiple files">

    <p>
        There’s not too much else to say about rm, so here’s a list of the main options for its use.
    </p>
    <img src="./assets/images/unit3table8.PNG" alt="table of rm command options">

</main>
</body>
</html>