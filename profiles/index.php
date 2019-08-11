<!DOCTYPE html>
<html>
  <head>
    <title>PROFILES</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link rel="icon" href="/resources/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <h1>PROFILES</h1>
    <nav>
      <span>|</span>
      <a href = "http://www.roseburg.k12.or.us/rhs/" target = "_blank"><img src = "/resources/feather.png"></a>
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
      <a href = "https://www.firstinspires.org/robotics/ftc" target = "_blank"><img src = "/resources/FIRST_logo.png"></a>
      <span>|</span>
    </nav>
    <?php
      $di = new RecursiveDirectoryIterator('.');
      $stuff = [];
      foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
        if(substr($filename, -1) == 'l') {
          array_push($stuff, $filename);
        }
      }
      for($i = count($stuff) - 1; $i >=0 ; $i--) {
        echo '<figure><a href = ' . substr($stuff[$i], 2, $stuff[$i]->length - 10) . '><img src = ' . substr($stuff[$i], 2, $stuff[$i]->length - 10) . 'photo.png><br><figcaption>' . str_replace("-", "&nbsp", substr($stuff[$i], 12, $stuff[$i]->length - 11)) . '</figcaption></a></figure>';
      }
    ?>
  <script src = "script.js"></script>
  </body>
</html>
