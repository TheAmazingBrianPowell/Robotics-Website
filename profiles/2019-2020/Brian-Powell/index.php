<?php
$message =
"<div style='width:100%;text-align:center;'><a href='https://www.testdome.com/cert/c5e0b9b2cb754f89bd6800bad6770f32' target = '_blank' class='testdome-certificate-stamp silver' style = 'display:inline-block;'><span class='testdome-certificate-name'>Brian Powell</span><span class='testdome-certificate-test-name'>PHP, MySQL, and SQL </span><span class='testdome-certificate-card-logo'>TestDome<br />Certificate</span></a><a href='https://www.testdome.com/cert/6e384210e0c7463fbc5b6ebfc6ef1c7c' target = '_blank' class='testdome-certificate-stamp silver' style = 'display:inline-block;'><span class='testdome-certificate-name'>Brian Powell</span><span class='testdome-certificate-test-name'>HTML/CSS and JavaScript </span><span class='testdome-certificate-card-logo'>TestDome<br />Certificate</span></a></div>
Hello, I am the main programmer for Aries, and the creator of this website. I program in HTML, CSS, Javascript, PHP, Python, Java, SQL, and a few libraries of Javascript. I play three instruments and participate in two sports (Cross Country and Tennis) as well as one club (Robotics!).<br><br>&#8195I enjoy working on large projects, such as this one, and creating new things.
  To future web developers of this site: before editing any code, make sure you read all the comments on all the pages! Here are some examples of how the profiles pages work:

  You can use lists with simple HTML tags<ol><li>Hey</li><li>Hola</li></ol>Hey

remember to use a backslash to escape double quotes!
don't be bad. \"don't be bad\"
preformated text using the <code>pre</code> tag allows for the spaces to not condense into a single space, ever line break will count.

load images and more with html code.
<h1>Oh Noes!</h1>
<img src = '/resources/ohnoes.jpg' width = '100%' alt = 'Oh noes the error buddy from khan academy'>
<span style = 'color:red'>Use inline styles for simple styling</span>
You can also use links to go to your favorite page! <a href = '#'>Back to top!</a>
Or put in a cool form(why would you though?) <form action = '#anchor' method = 'POST' id = 'anchor'><input type = 'password' name = 'pass'>
<input type = 'submit'></form>Unless you could use php, which you can! For example, the time of the page reload was...<br>" . date("d-m-Y h:i:sa") . "
" . (isset($_POST['pass']) ? "<span style='color:red;'>By the way, the password was wrong</span><br>Bye!" : "<span style='color:green;'>Try entering something in the password field too!</span>") . "";

//101% chance you will never need to use the head variable. Unless you're me and you want to add some external cascading style sheets...
$head = '<!--
  HELLO!!!
  Welcome to my profile!
  Website Creation Date: Friday August 2 2019, has no domain name currently, and is hosted by my computer.
-->
<link rel="stylesheet" type="text/css" href="https://www.testdome.com/content/source/stylesheets/embed.css" media = "screen, print">';
require $_SERVER['DOCUMENT_ROOT'] . '/profiles/people.php';
?>
