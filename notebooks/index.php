<!DOCTYPE html>
<!--
  This page displays all the notebooks and loops through them with php, because I am way too lazy just to write out the html code
-->
<html>
  <head>
    <title>NOTEBOOKS</title>
    <link rel="stylesheet" type="text/css" href="/profiles/style.css">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link rel="icon" href="/resources/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <h1>NOTEBOOKS</h1>
    <nav>
      <span>|</span>
      <a href = "http://www.roseburg.k12.or.us/rhs/" target = "_blank"><img src = "/resources/feather.png"></a>
      <span>|</span>
      <a href = "/">Home</a>
      <span>|</span>
      <select>
        <option>All Years</option>
        <?php
          //Opens the current directory
          $myDirectory=opendir(".");
          while($entryName=readdir($myDirectory)) {
            $dirArray[]=$entryName;
          }

          //Loops through every item in the directory, so, all the pdf files, css files, js files, and php files and folders in the the notebooks directory
          for($index=0; $index < count($dirArray); $index++) {
            //Finds only the folders with the first letter of 2, YES, its a letter when its in a string NOT a number
            if($dirArray[$index][0] == '2') {
              //Adds an option element to the select element with the title of the folder
              echo '<option>' . $dirArray[$index] .'</option>';
            }
          }
          //closes the directory
          closedir($myDirectory);
        ?>
      </select>
      <span>|</span>
      <a href = "https://www.firstinspires.org/robotics/ftc" target = "_blank"><img src = "/resources/FIRST_logo.png"></a>
      <span>|</span>
    </nav>
    <?php
      //recursive directory iterator, loops through all folders within folders within folders, etc. within a root folder, this case its the current directory ('.')
      $di = new RecursiveDirectoryIterator('.');
      $stuff = [];
      //adds all files that end with an pdf to the array
      foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
        if(substr($filename, -3) == 'pdf') {
          array_push($stuff, $filename);
        }
      }
      //loops through array backwards!
      for($i = count($stuff) - 1; $i >=0 ; $i--) {
        echo '<a href = ' . substr($stuff[$i], 2) . ' target = "_blank">' . str_replace("/", "&nbsp", substr($stuff[$i], 2, $stuff[$i]->length - 4)) . '</a><br>';
      }
    ?>
  <!--
      Hey, its NOT an inline script, YAY!!!
  -->
  <script src = "script.js"></script>
  </body>
</html>
