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
  <button class="start" onClick="location.href='unit2section2.php';">Next Section -></button>
  <h2 class="unixtutorial"> Unit Two - Directories </h2>
  <h3>Section One: Brief Refresher on Directories </h3>
  <p>
    A directory is a certain type of file that stores a list of files. It stores any type of file - whether it is ordinary, 
    a directory, etc. It also stores information about those files.
  </p>
  <p>
    The organization structure for files and directories in Unix is a hierarchy. Each directory can have more directories 
    (subdirectories) and/or files in it. The organization structure is called a directory tree because it can be pictured as a tree:
  </p>  
  <img src="./assets/images/unit2img1.png" alt="UNIX Directory Tree" width="500">
  <p>
    The root of the hierarchy is the slash character (/) and all other directories are below it in the hierarchy/directory tree.
  </p>
</main>
</body>
</html>