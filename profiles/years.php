<?php
  if(substr($_SERVER['REQUEST_URI'],-1) != '/') {
    header('Location: .');
    exit();
  }
?>
<!DOCTYPE html>
<!--
  Links to years.php using the require statement in PHP
  The php directory looping is the same concept as what is used in the photos and notebooks display
-->
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>PROFILES</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link rel="icon" href="/resources/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <h1>Profiles</h1>
    <nav>
      <span>|</span>
      <a href = "http://www.roseburg.k12.or.us/rhs/" target = "_blank" rel="noreferrer" title = "Roseburg High School"><img src = "/resources/feather.png" alt = "Roseburg High School"></a>
      <span>|</span>
      <a href = "/">Home</a>
      <span>|</span>
      <select>
        <option>All Years</option>
        <?php
          $myDirectory=opendir("..");
          while($entryName=readdir($myDirectory)) {
            $dirArray[]=$entryName;
          }
          for($index=0; $index < count($dirArray); $index++) {
            if($dirArray[$index][0] == '2') {
              echo '<option>' . $dirArray[$index] .'</option>';
            }
          }
          closedir($myDirectory);
        ?>
      </select>
      <span>|</span>
      <a href = "https://www.firstinspires.org/robotics/ftc" target = "_blank" rel="noreferrer" title = "First Tech Challenge"><img src = "/resources/FIRST_logo.png" alt = "First Tech Challenge"></a>
      <span>|</span>
    </nav>
    <?php
          $myDirectory2=opendir(".");
          while($entryName2=readdir($myDirectory2)) {
            $dirArray2[]=$entryName2;
          }
          for($index2=0; $index2 < count($dirArray2); $index2++) {
            if(substr($dirArray2[$index2], -1) != 'p' && $dirArray2[$index2][0] != '.') {
              echo '<figure><a href = ' . $dirArray2[$index2] . ' target = "_blank"><img src = ' . $dirArray2[$index2] . '/photo.png><br><figcaption>' . str_replace("-", "&nbsp", $dirArray2[$index2]) . '</figcaption></a></figure>';
            }
          }
          closedir($myDirectory2);
    ?>
  <script src = "../script.js"></script>
  </body>
</html>
