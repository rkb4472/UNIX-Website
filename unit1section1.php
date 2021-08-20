<?php
    $path = "./";
    $page = "Unit 1 Section 1";
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
  <button class="start" onClick="location.href='unit1section2.php';">Next Section -></button>
  <h2 class="unixtutorial"> Unit One - Introduction </h2>
  <h3>Section One: History & Introduction</h3>
  <p>
    UNIX is an operatsing system that was originally started development at MIT in 1969s but was given its name UNIX in the 1970s. 
    An operating system is a type of software that supports the hardware of a device and resources on a computer. It was worked on by 
    Dennis Ritchie, Ken Thompson two huge creators in computing. UNIX doesn’t actually stand for anything its name has undergone many 
    changes throughout the process of it finally ending up at UNIX.
  </p>
  <h4>What is UNIX?</h4>
  <p>
    Almost all current popular operating systems have some form of unix environment.
    UNIX is currently used most often in Linux, another operating system most commonly found on Servers. 
    If you are on a non linux operating system A common place you’ll find UNIX is in a file transfer service, or remote computing service, 
    or your Terminal.
  </p>  
</main>
</body>
</html>
