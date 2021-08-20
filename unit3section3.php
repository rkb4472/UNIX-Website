<?php
    $path = "./";
    $page = "Unit 3 Section 3";
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
    <button class="start" onClick="location.href='unit3section4.php';">Next Section -></button>
    <h2 class="unixtutorial"> Unit Three - File Management </h2>
    <h3>Section Three: File Reading</h3>

    <h4>The Cat Command:</h4>

    <p>
        The cat command stands for concatenate, and is used to read the contents of files without opening the file in a text editor. 
        Below, I will use cat to read the contents of the file I created with the vi command.
    </p>

    <img src="./assets/images/unit3img5.png" alt="example code of cat commmand">

    <p>
        The cat command can also be used to write to a file by using the > option. When writing to a file with the cat > 
        *filename* option, you can exit input mode by pressing *Control - D*. Here’s an example of that in action.
    </p>
    <img src="./assets/images/unit3img6.png" alt="example code of cat > *filename* command">

    <p>
        Notice the added -n option! The -n option adds line numbers to the text being read.
        As the name of the command implies, cat can also be used to concatenate 2 files:
    </p>

    <img src="./assets/images/unit3img7.png" alt="example code of cat -n command">

    <p>
        Here’s a list of all of the options for cat that we’ve covered, as well as some additional useful options:
    </p>
    <img src="./assets/images/unit3table4.PNG" alt="table with all of cat command options">
    
    <p>
        There’s a great deal more you can do with the cat command, so I encourage you to experiment 
        and explore some of the options that we didn’t discuss here.   
    </p>

    <h4>Head and Tail</h4>
    <p>
        The head and tail commands are used to read only the beginning or end of a given file or files. 
        This can be useful when trying to read small parts of a long file. By default, the head command 
        prints the first 10 lines of a file, while the tail command prints the last 10 lines. Here is a 
        demonstration of calling the head and tail commands on a file that holds the numbers 1 - 20:
    </p>
    <img src="./assets/images/unit3img8.png" alt="example code of head command">
    <img src="./assets/images/unit3img9.png" alt="example code of tail command">

    <p>
        The head and tail commands come with several options to change the formatting of the output. 
        For example, you can specify exactly how many lines you want to read with the -n option, like so:
    </p>
    <img src="./assets/images/unit3img10.PNG" alt="example code of -n option">

    <p>
        You can see that I used the option -n 15 on the head command to print the first 15 lines of the file. 
        Below is a more complete list of the options that can be used for the head and tail commands
    </p>
    <img src="./assets/images/unit3table5.PNG" alt="table for head and tail command options">

    <h4>The Grep Command</h4>
    <p>
        The grep command is used to search files for particular words or expressions. By default, grep prints all 
        of the lines in a file that contain the word/expression that you searched. For example, if I wanted to search 
        the file newfile1 for the word “enter”, I would do the following:  
    </p>
    <img src="./assets/images/unit3img11.png" alt="example code for grep command with enter">

    <p>
        You can see that searching for the word “enter” returned the 2nd line of the file. By default, 
        the grep search is case sensitive. If you want to ignore case in your search, simply use the -i option, like so:   
    </p>
    <img src="./assets/images/unit3img12.png" alt="example code for grep with -i option">

    <p>
        Notice how the word “THIS” in my grep search is in all caps, but the returned line is not. 
        If there is more than one matching line, then grep will return all matching lines:
    </p>
    <img src="./assets/images/unit3img13.png" alt="example code for grep command">

    <p>
        Grep can be used to search for more than just single words and expressions though! 
        It can also search for specific patterns, such as email addresses, through using regular expressions. 
        Regular expressions (commonly referred to as regex) are beyond the scope of this tutorial, 
        but I highly encourage you to look into them and see how powerful they can be. 
    </p>

    <p>
        As usual, here is a look at some of the most commonly used options when calling the grep command
    </p>
    <img src="./assets/images/unit3table6.PNG" alt="table of grep command options">
</main>
</body>
</html>