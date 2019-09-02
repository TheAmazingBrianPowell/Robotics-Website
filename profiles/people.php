<?php
  if(substr($_SERVER['REQUEST_URI'],-1) != '/') {
    header('Location: .');
    exit();
  }
?>
<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta charset = "UTF-8">
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link rel="icon" href="/resources/favicon.ico">
    <?php
      echo $head;
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo str_replace('-', ' ', substr($_SERVER['REQUEST_URI'], 20, -1)); ?></title>
  </head>
  <body>
    <h1><?php echo str_replace('-', ' ', substr($_SERVER['REQUEST_URI'], 20, -1)); ?></h1>
    <nav>
      <span>|</span>
      <a href = "http://www.roseburg.k12.or.us/rhs/" rel="noreferrer" target = "_blank"><img src = "/resources/feather.png" title = "Roseburg High School" alt = "RHS Feather"></a>
      <span>|</span>
      <a href = "/">Home</a>
      <span>|</span>
      <a href = "../..">Profiles</a>
      <span>|</span>
      <a href = "https://www.firstinspires.org/robotics/ftc" target = "_blank" rel="noreferrer"><img src = "/resources/FIRST_logo.png" title = "First Tech Challenge" alt = "FTC Logo"></a>
      <span>|</span>
    </nav>
    <img src = "photo.png"><br>
    <pre><?php echo $message ?></pre>
  <body>
</html>
