<?php
  //Open current directory
  $myDirectory=opendir(".");

  //Loop through all files in current directory
  while($entryName=readdir($myDirectory)) {
    $dirArray[]=$entryName;
  }

  $highestDirectory = 0;

  for($index=0; $index < count($dirArray); $index++) {
    //don't show all files ending with .php, .css, or .js
    if(substr($dirArray[$index], -3) != 'php' && $dirArray[$index][0] != '.' && substr($dirArray[$index], -3) != 'css' && substr($dirArray[$index], -2) != 'js') {
      if($highestDirectory < substr($dirArray[$index], 0, 4)) {
	$highestDirectory = substr($dirArray[$index],0,9);
      } 
      
    }
  }

  //close directory
  closedir($myDirectory);
  header("Location: ./$highestDirectory");
  exit();
?>