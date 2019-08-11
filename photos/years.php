<?php
  //If we visted the index.php file in this directory, redirect to the directory itself
  if(substr($_SERVER['REQUEST_URI'],-1) != '/') {
    //redirect to current directory
    header('Location: .');
  }
?>
<!DOCTYPE html>
<!--
  Copy and past is great...
  But its even better when you use PHP require
  And you don't need as much storage
  YAY!!!
  '(When you have a bad code IDE, the apostrophe...)
-->
<html>
  <head>
    <title>PHOTOS</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link rel="icon" href="/resources/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <h1>PHOTOS</h1>
    <nav>
      <span>|</span>
      <a href = "http://www.roseburg.k12.or.us/rhs/" target = "_blank"><img src = "/resources/feather.png"></a>
      <span>|</span>
      <a href = "/">Home</a>
      <span>|</span>
      <select>
        <option>All Years</option>
        <?php
          //basically the same as events.php in the same directory, just look at that for comments
          $myDirectory=opendir(".");
          while($entryName=readdir($myDirectory)) {
            $dirArray[]=$entryName;
          }
          for($index=0; $index < count($dirArray); $index++) {
            if(substr($dirArray[$index], -3) != 'php' && $dirArray[$index][0] != '.') {
              echo '<option>' . str_replace('_',' ',$dirArray[$index]) .'</option>';
            }
          }
          closedir($myDirectory);
          $myDirectory2=opendir("..");
          while($entryName2=readdir($myDirectory2)) {
            $dirArray2[]=$entryName2;
          }
          for($i=0; $i < count($dirArray2); $i++) {
            if(substr($dirArray2[$i], -3) != 'php' && substr($dirArray2[$i], -2) != 'js' && substr($dirArray2[$i], -3) != 'css' && $dirArray2[$i][0] != '.') {
              echo '<option>' . $dirArray2[$i] .'</option>';
            }
          }
          closedir($myDirectory2);
        ?>
      </select>
      <script src = "../script2.js"></script>
      <span>|</span>
      <a href = "https://www.firstinspires.org/robotics/ftc" target = "_blank"><img src = "/resources/FIRST_logo.png"></a>
      <span>|</span>
    </nav>
    <?php
      $di = new RecursiveDirectoryIterator('.');
      $stuff = [];
      foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
        if(substr($filename, -2) == '..') {
          echo '<h2>' . str_replace('_',' ',substr($filename, 2, -3)) . '</h2>';
          continue;
        }
        if(substr($filename, -3) == 'jpg' || substr($filename, -3) == 'JPG') {
          echo '<div><a href = ' . substr($filename, 2) . ' target = "_blank"><img src = ' . substr($filename, 2) . '></a></div>';
          continue;
        }
        if(substr($filename, -3) == 'mov' || substr($filename, -3) == 'MOV') {
          echo '<video src = ' . substr($filename, 2) . ' controls></video>';
        }
      }
    ?>
  </body>
</html>
