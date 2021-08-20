<?php
    $path = "./";
    $page = "Unit 1 Section 2";
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
  <button class="start" onClick="location.href='quiz1.php';">Unit One Quiz -></button>
  <h2 class="unixtutorial"> Unit One - Introduction </h2>
  <h3>Section Two: Function & Terminology</h3>
  <p> How Does UNIX Function? </p>
  <p>
    <span class="underline">The Kernel:</span>
  </p>
  <p>
    The Kernel is the innermost part of UNIX and handles all of the tasks that are given to 
    it by the users through the shell, There is only one type of kernel.
  </p>
  <p>
    <span class="underline">The Shell:</span>
  </p>
  <p>
    The Shell is the part of UNIX that the users are most able to interact with, shells come 
    in many different forms such as C shell and the Bourne Again SHell also known as BASH, Users 
    using the shell to interact with the kernel is how users are able to do all the functions UNIX 
    has available.
  </p>
  <h4>UNIX File Terminology</h4>
  <p>
    A Path: A Path refers to the to the route to a file such as: <br/>
    C:\Users\NAME\Documents\Homework.txt <br/>
    This would be the path to someones file Homework.txt <br/>
    Sometimes the term relative path comes up, this means the path from one item to the next. <br/>
  </p>
  <p>
    A Directory: A directory is like a super file in a way. A directory, holds all files and objects 
    within your operating system. When you load up a unix terminal for the first time you start in the 
    home directory. 
  </p>
  <p>
    A File: A file is a pretty broad term. A file at its core is anything that can hold data, including other files.

  </p>  
</main>
</body>
</html>