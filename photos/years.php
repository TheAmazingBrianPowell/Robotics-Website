<?php
  //If we visted the index.php file in this directory, redirect to the directory itself
  if(substr($_SERVER['REQUEST_URI'],-1) != '/') {
    //redirect to current directory
    header('Location: .');
    exit();
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
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Photos <?php echo str_replace(['_','/'], ' ', substr($_SERVER['REQUEST_URI'],8,9)); ?></title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link rel="icon" href="/resources/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <h1>PHOTOS</h1>
    <nav>
      <a href = "http://www.roseburg.k12.or.us/rhs/" target = "_blank" rel="noreferrer" title = "Roseburg High School"><img src = "/resources/feather.png" alt = "Roseburg High School"></a>
      <span>&nbsp&nbsp</span>
      <a href = "/">Home</a>
      <span>&nbsp&nbsp</span>
      <select aria-label = "Filter">
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
      <span>&nbsp&nbsp</span>
      <a href = "https://www.firstinspires.org/robotics/ftc" target = "_blank" rel="noreferrer" title = "First Tech Challenge"><img src = "/resources/FIRST_logo.png" alt = "First Tech Challenge"></a>
    </nav>
    <?php
      $di = new RecursiveDirectoryIterator('.');
      $prevName = "";
      $first = false;
      foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
        if(substr($filename, -3) != 'mov' && substr($filename, -3) != 'MOV' && substr($filename, -3) != 'jpg' && substr($filename, -3) != 'JPG') continue;
        if(str_replace('/',' ',str_replace('_',' ',preg_replace('/^.[^\/]*\/(.*)\/[^\/]*$/', '$1', $filename))) != $prevName) {
          echo (($first) ? '</section>' : '') . '<section><h2>' . str_replace('/',' ',str_replace('_',' ',preg_replace('/^.[^\/]*\/(.*)\/[^\/]*$/', '$1', $filename))) . '</h2>';
	  $first = true;
        }
        $prevName = str_replace('/',' ',str_replace('_',' ',preg_replace('/^.[^\/]*\/(.*)\/[^\/]*$/', '$1', $filename))); 
        if(substr($filename, -3) == 'jpg' || substr($filename, -3) == 'JPG') {
          echo '<div><a href = ' . str_replace(' ', '%20',substr($filename, 2)) . ' target = "_blank"><img src = "/resources/loading.png" data-src = ' . str_replace(' ', '%20',substr($filename, 2)) . ' alt = "' . str_replace('_', ' ', substr($filename,strpos($filename, '/', 12) + 1, -4)) . '"></a></div>';
          continue;
        }
        if(substr($filename, -3) == 'mov' || substr($filename, -3) == 'MOV') {
          echo '<video src = ' . str_replace(' ', '%20',substr($filename, 2)) . ' controls></video>';
        }
      }
    ?>
  <script src = "../script2.js"></script>
  </body>
</html>
