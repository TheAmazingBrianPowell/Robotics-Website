<?php
  if(substr($_SERVER['REQUEST_URI'],-1) != '/') {
    header('Location: .');
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Profiles</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link rel="icon" href="/resources/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <h1>PROFILES</h1>
    <nav>
      <span>|</span>
      <a href = "http://www.roseburg.k12.or.us/rhs/" target = "_blank" rel="noreferrer" title = "Roseburg High School"><img src = "/resources/feather.png" alt = "Roseburg High School"></a>
      <span>|</span>
      <a href = "/">Home</a>
      <span>|</span>
      <select>
        <option>All Years</option>
        <?php
          $myDirectory=opendir(".");
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
      $di = new RecursiveDirectoryIterator('.');
      $stuff = [];
      foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
          if(substr($filename, -2) == '..' && strlen($filename) == 14) {
            echo '<h2>' . str_replace('/',' ',str_replace('_',' ',substr($filename, 2, -3))) . '</h2></div>';
            continue;
          }
          //echo $filename;
          if(substr($filename, -1) == 'g')
            echo '<figure><a href = ' . substr($filename, 2, -9) . '><img src = ' . substr($filename, 2, -9) . 'photo.png><br><figcaption>' . str_replace("-", "&nbsp", substr($filename, 12, -10)) . '</figcaption></a></figure>';
          }
    ?>
  <script src = "script.js"></script>
  </body>
</html>
