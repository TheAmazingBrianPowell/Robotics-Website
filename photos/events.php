<?php
  if(substr($_SERVER['REQUEST_URI'],-1) != '/') {
    header('Location: .');
  }
?>
<!DOCTYPE html>
<!--
  Same old boring document, just linked to in a bunch of index.phps with their require to help save unnessesary coping and pasting!
  includes events.php document which is not accessible or discoverable on the website by itself
-->
<html>
  <head>
    <title>PHOTOS</title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
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
          //open parent directory
          $myDirectory=opendir("..");
          while($entryName=readdir($myDirectory)) {
            $dirArray[]=$entryName;
          }
          //loop through all items in parent directory
          for($index=0; $index < count($dirArray); $index++) {
            //don't get files ending with .php or beginning with a . (.DS_STORE or something on mac)
            if(substr($dirArray[$index], -3) != 'php' && $dirArray[$index][0] != '.') {
              //replace '_' with ' ' and display as an option element in the select element
              echo '<option>' . str_replace('_',' ',$dirArray[$index]) .'</option>';
            }
          }
          closedir($myDirectory);

          //open the parent of the parent directory
          $myDirectory2=opendir("../..");
          while($entryName2=readdir($myDirectory2)) {
            $dirArray2[]=$entryName2;
          }

          //loop through all items
          for($i=0; $i < count($dirArray2); $i++) {
            if(substr($dirArray2[$i], -3) != 'php' && substr($dirArray2[$i], -2) != 'js' && substr($dirArray2[$i], -3) != 'css' && $dirArray2[$i][0] != '.') {
              echo '<option>' . $dirArray2[$i] .'</option>';
            }
          }
          //close directory
          closedir($myDirectory2);
        ?>
      </select>
      <script src = "../../script3.js"></script>
      <span>|</span>
      <a href = "https://www.firstinspires.org/robotics/ftc" target = "_blank"><img src = "/resources/FIRST_logo.png"></a>
      <span>|</span>
    </nav>
    <?php
        //open current directory that's what a single dot means, a double dot is the parent directory
        $myDirectory2=opendir(".");
        while($entryName2=readdir($myDirectory2)) {
          $dirArray2[]=$entryName2;
        }
        //title the document what the current directory's name is.
        echo '<h2>' . str_replace('_',' ',str_replace('/',' ',substr($_SERVER['REQUEST_URI'],8))) . '</h2>';
        for($i=0; $i < count($dirArray2); $i++) {
          if($dirArray2[$i][0] != '.') {
            //display files that end with .jpg as images
            if(substr($dirArray2[$i],-3) == 'jpg' || substr($dirArray2[$i],-3) == 'JPG') {
              echo '<div><a href = ' . $dirArray2[$i] . ' target = "_blank"><img src = ' . $dirArray2[$i] . '></a></div>';
              //continue to next loop iteration
              continue;
            }

            //display .mov files as videos
            if(substr($dirArray2[$i],-3) == 'mov' || substr($dirArray2[$i],-3) == 'MOV') {
              echo '<video src = ' . $dirArray2[$i] . ' controls></video>';
            }
          }
        }
        closedir($myDirectory2);
    ?>
  </body>
</html>
