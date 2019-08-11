<?php
  //If the person looks for the index.php file instead of the directory without the file, it will redirect them to the directory
  if(substr($_SERVER['REQUEST_URI'],-1) != '/') {
    //redirect to the current directory ('.') <- the dot means current directory
    header('Location: .');
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>PHOTOS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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
          //Open current directory
          $myDirectory=opendir(".");

          //Loop through all files in current directory
          while($entryName=readdir($myDirectory)) {
            $dirArray[]=$entryName;
          }

          //Loop through all files in current directory (combine both loops?)
          for($index=0; $index < count($dirArray); $index++) {
            //don't show all files ending with .php, .css, or .js
            if(substr($dirArray[$index], -3) != 'php' && $dirArray[$index][0] != '.' && substr($dirArray[$index], -3) != 'css' && substr($dirArray[$index], -2) != 'js') {
              echo '<option>' . str_replace('_',' ',$dirArray[$index]) .'</option>';
            }
          }

          //close directory
          closedir($myDirectory);
        ?>
      </select>
      <script src = "script.js"></script>
      <span>|</span>
      <a href = "https://www.firstinspires.org/robotics/ftc" target = "_blank"><img src = "/resources/FIRST_logo.png"></a>
      <span>|</span>
    </nav>
    <?php
      //Recursive Directory Iterator, YAY! this loops through items in directory, then loops through all subdirectories and subdirectories of those directories
      $di = new RecursiveDirectoryIterator('.');
      foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
        //get all folders in directory and display their titles
        if(substr($filename, -2) == '..') {
          echo '<h2>' . str_replace('/',' ',str_replace('_',' ',substr($filename, 2, -3))) . '</h2>';
          continue;
        }
        //get all images and display them as ... IMAGES!!!
        if(substr($filename, -3) == 'jpg' || substr($filename, -3) == 'JPG') {
          echo '<div><a href = ' . substr($filename, 2) . ' target = "_blank"><img src = ' . substr($filename, 2) . '></a></div>';
          continue;
        }
        //get all (mp3?) videos and display in a video element
        if(substr($filename, -3) == 'mov' || substr($filename, -3) == 'MOV') {
          echo '<video src = ' . substr($filename, 2) . ' controls></video>';
        }
      }
    ?>
  </body>
</html>
