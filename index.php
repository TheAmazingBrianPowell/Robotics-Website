<?php
  //If we visted the index.php file in this directory, redirect to the directory itself
  if(substr($_SERVER['REQUEST_URI'],-1) != '/') {
    //redirect to current directory
    header('Location: .');
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- meta UTF-8 should be in the first 1024 bytes of data on this page! -->
    <meta charset="UTF-8">
    <title>RHS Robotics</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link rel="icon" href="resources/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="rhs, robotics, roseburg, high school, FTC, tech">
    <meta name="google-site-verification" content="O6-Dc-Hyl5fwdAXeFvv5bVHZvjdmJO4JhK6cdQdM_zg" />
    <meta name="description" content="The Roseburg High School Robotics program is a competitive, student run club which enables students to design, build, program, and compete at FTC competitions.">
  </head>
<!--
  HELLO EVERYONE!!!
  WELCOME TO THE RHS ROBOTICS SITE!!!
  Web developers, there are many comments left on this site to describe portions of the code, so feel free to search through the code
    Created By: Brian Powell in August, 2019

  _/_/_/_/_/_/_/_/_/_/_/_/            _/                      _/       _/_/_/_/_/_/_/_/_/_/
  _/                     _/           _/                      _/     _/
  _/                      _/          _/                      _/   _/
  _/                       _/         _/                      _/   _/
  _/                       _/         _/                      _/   _/
  _/                       _/         _/                      _/   _/
  _/                       _/         _/                      _/   _/
  _/                       _/         _/                      _/   _/
  _/                       _/         _/                      _/    _/
  _/                       _/         _/                      _/     _/
  _/                       _/         _/                      _/       _/_/_/_/_/_/_/_/
  _/                      _/          _/                      _/                       _/
  _/                     _/           _/_/_/_/_/_/_/_/_/_/_/_/_/                         _/
  _/                    _/            _/                      _/                          _/
  _/_/_/_/_/_/_/_/_/_/_/              _/                      _/                          _/
  _/                   _/             _/                      _/                          _/
  _/                    _/            _/                      _/                          _/
  _/                     _/           _/                      _/                          _/
  _/                      _/          _/                      _/                         _/
  _/                       _/         _/                      _/                       _/
  _/                        _/        _/                      _/     _/_/_/_/_/_/_/_/_/
  _/                         _/       _/                      _/
  _/                          _/      _/                      _/
  _/                           _/     _/                      _/             ROBOTICS
  _/                            _/    _/                      _/
  _/                             _/   _/                      _/
-->
  <body>
    <!--Header-->
    <h1><a class = "hiddenLink" href = "http://www.roseburg.k12.or.us/rhs/" target = "_blank" rel="noreferrer" title = "Roseburg High School" alt = "Roseburg High School">RHS</a> ROBOTICS</h1>

    <!--Navigation Bar-->
    <nav>
      <a href = "http://www.roseburg.k12.or.us/rhs/" target = "_blank" rel="noreferrer" title = "Roseburg High School"><img src = "resources/feather.png" alt = "Roseburg High School Feather"></a>
      <span>&nbsp&nbsp</span>
      <a href = "/photos/">Photos</a>
      <span>&nbsp&nbsp</span>
      <a href = "#teams">Teams</a>
      <span>&nbsp&nbsp</span>
      <a href = "#events">Events</a>
      <span>&nbsp&nbsp</span>
      <a href = "https://www.firstinspires.org/robotics/ftc" target = "_blank" rel="noreferrer" title = "First Tech Challenge"><img src = "resources/FIRST_logo.png" alt = "FIRST Tech Challenge Logo"></a>
    </nav>

    <!--About Us Container-->
    <section id = "about">
      <h2>About Us</h2>
      <p>
        Welcome to Roseburg High School's Robotics Website! The RHS Robotics program is a competitive, student run club that allows for unique experience of the FIRST Tech Challenge Program.
        <br><br>The FIRST FTC competition enables students to design, build, program, and compete with a robot, hopefully in that order, in their new challenge each year. This year, the challenge is named Skystone, and the playing field looks like this:<br>
        <img src = "/resources/first_field_skystone.png" width = 100%" alt = "The FTC playing field includes many different obstacles. This year the main goal is to tranport and stack the yellow and black stones"><br><br>
        This club started in 2017 as a group of high-schoolers building robots and programming them to do certain obstacles for fun. As the months went on, the club began to grow and compete against other teams in local competitions. As of 2020, the club has 30 members split among three teams, <a href = "/teams/aries">Aries</a>, <a href = "https://scorpiorhsrobotics.com" target = "_blank" rel = "noreferrer">Scorpio</a>, and Taurus.
      </p>
      <h2>Scores</h2>
      <p>Scores can be found at <a href = "https://ftcscores.com" target = "_blank" rel = "noreferrer">FTCscores.com</a>. <a href = "https://ftcscores.com/team/15342" target = "_blank" rel = "noreferrer">Scores from Aries</a>, <a href = "https://ftcscores.com/team/13189" target = "_blank" rel = "noreferrer">scores from Scorpio</a>, and <a href = "https://ftcscores.com/team/15341" target = "_blank" rel = noreferrer">scores from Taurus</a> can all be found at this site.
      <h2>Links</h2>
      <ul>
        <li>Visit our <a href = "https://www.facebook.com/RoseburgHighSchoolRobotics" rel="noreferrer" target = "_blank">facebook page</a></li>
        <li>View the <a href = "https://github.com/TheAmazingBrianPowell/Robotics-Website" target = "_blank">code</a> to this website on Github!</li>
        <li><a href = "/resources/updated_donation_letter" target = "_blank">Sponsor Us</a></li>
      </ul>
      <br>
      <br>
	<iframe width="100%" src="https://www.youtube.com/embed/XiGB_8Ppnbs?start=111" title = "FIRST Tech Challenge Introduction Video" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <h2>Awards</h2>
      <ul>
	<li>Advancing team to Worlds (canceled) - Aries</li>
	<li>First Place Inspire Award - Super Qualifers - Aries</li>
        <li>First Place Inspire Award - League Meet - Aries</li>
        <li>Winning Alliance Award - League Meet - Aries</li>
        <li>Winning Alliance Award - League Meet - Taurus</li>
        <li>Innovative Award - League Meet - Scorpio</li>
	<li>Dean's List Finalist - Brian Powell - Aries</li>
      </ul>
    </section>
    <section id = "officers">
        <!-- The Officers side bar, is either side-by-side to the text or below it based on viewport size -->
        <h2>Officers</h2>

        <!-- Image and link to Officers profile page with caption -->
        <figure>
          <a href = "resources/members/Jace.jpg" target = "_blank">
            <img src = "resources/members/Jace.jpg" alt>
            <figcaption><span class = "names">Jace:</span><br>Co-President</figcaption>
          </a>
        </figure>
        <figure>
          <a href = "resources/members/Kou.jpg" target = "_blank">
            <img src = "resources/members/Kou.jpg" alt>
            <figcaption><span class = "names">Kou:</span><br>Co-President</figcaption>
          </a>
        </figure>
        <figure>
          <a href = "resources/members/Maddy.jpg" target = "_blank">
            <img src = "resources/members/Maddy.jpg" alt>
            <figcaption><span class = "names">Madeline:</span><br>Sergeant of Arms</figcaption>
          </a>
        </figure>
        <figure>
          <a href = "resources/members/Clara.jpg" target = "_blank">
            <img src = "resources/members/Clara.jpg" alt>
            <figcaption><span class = "names">Clara:</span><br>Media Specialist</figcaption>
          </a>
        </figure>
	<span id = "break"></span>
        <figure>
          <a href = "resources/members/Amy.JPG" target = "_blank">
            <img src = "resources/members/Amy.JPG" alt>
            <figcaption><span class = "names">Amy:</span><br>Secretary</figcaption>
          </a>
        </figure>
        <figure>
          <a href = "resources/members/Logan.JPG" target = "_blank">
            <img src = "resources/members/Logan.JPG" alt>
            <figcaption><span class = "names">Logan:</span><br>Treasurer</figcaption>
          </a>
        </figure>
        <figure>
          <a href = "resources/members/Brian.JPG" target = "_blank">
            <img src = "resources/members/Brian.JPG" alt>
            <figcaption><span class = "names">Brian:</span><br>Website Developer</figcaption>
          </a>
        </figure>
      </section>

    <!-- The Team SVG graphics (USE SVGS, THE A TAG CAN BE USED IN THEM FOR ACCURATE SHAPED LINKS!) -->
    <section id = "teams">
      <h2>Teams</h2>
      <figure id = "scorpio">
        <figcaption>Scorpio</figcaption>
        <svg viewbox = "0,0,940,940"><title>Scorpio</title><g transform="translate(-550 -1850)"><a xlink:href="https://scorpiorhsrobotics.com" rel="noreferrer" target = "_blank" rel="noreferrer"><circle cx="1017" cy="2322" r="427" stroke="none" stroke-width="10" fill="transparent"/><path d=" M 586.431 2323.69 C 586.431 2087.483 779.359 1896 1017.348 1896 C 1131.635 1896 1241.24 1941.06 1322.053 2021.267 C 1402.865 2101.475 1448.265 2210.259 1448.265 2323.69 C 1448.265 2559.896 1255.337 2751.38 1017.348 2751.38 C 779.359 2751.38 586.431 2559.896 586.431 2323.69 L 586.431 2323.69 Z " fill="none" stroke-width="10" stroke="rgb(255,153,0)" stroke-linejoin="miter" stroke-linecap="square" stroke-miterlimit="3"/><path d=" M 847.343 2398.098 L 766.246 2437.311 L 841.135 2380.633 L 847.343 2398.098 Z  M 828.756 2336.412 L 742.063 2362.844 L 825.353 2318.084 L 828.756 2336.412 Z  M 840.231 2244.878 L 739.829 2266.155 L 839.954 2263.724 L 840.231 2244.878 Z  M 873.352 2183.78 L 779.034 2186.875 L 868.128 2201.621 L 873.352 2183.78 Z  M 1270.377 2517.836 L 1179.921 2541.838 L 1179.706 2541.755 L 1158.631 2592.568 L 1158.509 2592.682 L 1158.505 2592.873 L 1158.395 2593.138 L 1158.501 2593.11 L 1157.023 2670.69 L 1191.167 2584.388 L 1249.221 2568.888 L 1249.014 2569.388 L 1249.684 2568.838 L 1249.716 2568.85 L 1249.74 2568.793 L 1299.342 2528.135 L 1270.658 2517.159 L 1270.377 2517.836 Z  M 1311.465 2558.601 L 1274.418 2635.786 L 1274.462 2635.93 L 1274.774 2635.841 L 1230.823 2664.177 L 1178.543 2663.393 L 1226.891 2649.55 L 1255.5 2575.574 L 1255.022 2575.719 L 1255.616 2575.202 L 1255.596 2575.136 L 1255.743 2575.092 L 1303.757 2533.271 L 1311.432 2558.289 L 1311.646 2558.224 L 1311.504 2558.521 L 1311.523 2558.583 L 1311.465 2558.601 Z  M 764.323 2517.836 L 854.779 2541.838 L 854.994 2541.755 L 876.069 2592.569 L 876.191 2592.682 L 876.195 2592.872 L 876.305 2593.138 L 876.199 2593.11 L 877.677 2670.69 L 843.532 2584.388 L 785.479 2568.888 L 785.686 2569.388 L 785.016 2568.838 L 784.984 2568.85 L 784.961 2568.793 L 735.358 2528.135 L 764.042 2517.159 L 764.323 2517.836 Z  M 723.235 2558.601 L 760.282 2635.786 L 760.238 2635.93 L 759.925 2635.841 L 803.877 2664.177 L 856.156 2663.393 L 807.809 2649.55 L 779.2 2575.574 L 779.678 2575.719 L 779.084 2575.202 L 779.104 2575.136 L 778.957 2575.092 L 730.943 2533.271 L 723.268 2558.289 L 723.054 2558.224 L 723.196 2558.521 L 723.177 2558.583 L 723.235 2558.601 Z  M 1187.11 2398.098 L 1268.207 2437.311 L 1193.318 2380.633 L 1187.11 2398.098 Z  M 1205.696 2336.412 L 1292.389 2362.844 L 1209.099 2318.085 L 1205.696 2336.412 Z  M 1201.143 2335.73 M 1194.221 2244.878 L 1294.623 2266.155 L 1194.499 2263.723 L 1194.221 2244.878 Z  M 1161.101 2183.78 L 1255.418 2186.875 L 1166.325 2201.621 L 1161.101 2183.78 Z  M 1024.124 2035.545 L 1026.596 2028.983 L 1008.033 2011.177 L 972.599 2008.555 L 1010.555 1997.261 L 1049.669 2015.37 L 1055.817 2054.735 L 1036.525 2086.94 L 1036.338 2086.502 L 1036.263 2086.958 L 1008.376 2102.1 L 978.786 2089.286 L 969.776 2058.165 L 988.129 2032.173 L 1020.027 2030.881 L 1024.124 2035.545 Z " fill-rule="evenodd" fill="rgb(0,0,0)"/><path d=" M 847.671 2398.098 L 766.574 2437.311 L 841.463 2380.633 L 847.671 2398.098 Z " fill="rgb(0,0,0)"/><path d=" M 829.085 2336.412 L 742.392 2362.844 L 825.682 2318.084 L 829.085 2336.412 Z " fill="rgb(0,0,0)"/><path d=" M 840.56 2244.878 L 740.158 2266.155 L 840.282 2263.724 L 840.56 2244.878 Z " fill="rgb(0,0,0)"/><path d=" M 873.68 2183.78 L 779.363 2186.875 L 868.456 2201.621 L 873.68 2183.78 Z " fill="rgb(0,0,0)"/><path d=" M 1270.705 2517.836 L 1180.249 2541.838 L 1180.035 2541.755 L 1158.96 2592.568 L 1158.837 2592.682 L 1158.834 2592.873 L 1158.724 2593.138 L 1158.829 2593.11 L 1157.352 2670.69 L 1191.496 2584.388 L 1249.549 2568.888 L 1249.342 2569.388 L 1250.013 2568.838 L 1250.044 2568.85 L 1250.068 2568.793 L 1299.67 2528.135 L 1270.986 2517.159 L 1270.705 2517.836 Z " fill="rgb(0,0,0)"/><path d=" M 1311.794 2558.601 L 1274.746 2635.786 L 1274.791 2635.93 L 1275.103 2635.841 L 1231.152 2664.177 L 1178.872 2663.393 L 1227.22 2649.55 L 1255.828 2575.574 L 1255.351 2575.719 L 1255.945 2575.202 L 1255.924 2575.136 L 1256.072 2575.092 L 1304.085 2533.271 L 1311.761 2558.289 L 1311.975 2558.224 L 1311.832 2558.521 L 1311.851 2558.583 L 1311.794 2558.601 Z " fill="rgb(0,0,0)"/><path d=" M 764.652 2517.836 L 855.108 2541.838 L 855.322 2541.755 L 876.397 2592.569 L 876.52 2592.682 L 876.523 2592.872 L 876.633 2593.138 L 876.528 2593.11 L 878.005 2670.69 L 843.861 2584.388 L 785.808 2568.888 L 786.015 2569.388 L 785.344 2568.838 L 785.313 2568.85 L 785.289 2568.793 L 735.687 2528.135 L 764.371 2517.159 L 764.652 2517.836 Z " fill="rgb(0,0,0)"/><path d=" M 723.563 2558.601 L 760.611 2635.786 L 760.566 2635.93 L 760.254 2635.841 L 804.205 2664.177 L 856.485 2663.393 L 808.137 2649.55 L 779.529 2575.574 L 780.006 2575.719 L 779.412 2575.202 L 779.433 2575.136 L 779.285 2575.092 L 731.272 2533.271 L 723.596 2558.289 L 723.382 2558.224 L 723.525 2558.521 L 723.506 2558.583 L 723.563 2558.601 Z " fill="rgb(0,0,0)"/><path d=" M 1187.438 2398.098 L 1268.535 2437.311 L 1193.646 2380.633 L 1187.438 2398.098 Z " fill="rgb(0,0,0)"/><path d=" M 1206.025 2336.412 L 1292.718 2362.844 L 1209.428 2318.085 L 1206.025 2336.412 Z " fill="rgb(0,0,0)"/><path d=" M 1194.55 2244.878 L 1294.952 2266.155 L 1194.827 2263.723 L 1194.55 2244.878 Z " fill="rgb(0,0,0)"/><path d=" M 1161.429 2183.78 L 1255.747 2186.875 L 1166.653 2201.621 L 1161.429 2183.78 Z " fill="rgb(0,0,0)"/><path d=" M 1024.453 2035.545 L 1026.924 2028.983 L 1008.362 2011.177 L 972.927 2008.555 L 1010.884 1997.261 L 1049.998 2015.37 L 1056.146 2054.735 L 1036.853 2086.94 L 1036.666 2086.502 L 1036.592 2086.958 L 1008.705 2102.1 L 979.115 2089.286 L 970.104 2058.165 L 988.458 2032.173 L 1020.355 2030.881 L 1024.453 2035.545 Z " fill="rgb(0,0,0)"/><path d=" M 1067.919 2452.684 Q 1068.104 2452.989 1081.675 2475.253 L 1081.528 2475.375 L 1085.443 2481.417 L 1050.777 2494.353 L 1068.404 2476.317 L 1061.482 2470.093 L 1029.654 2470.093 L 1036.689 2483.108 L 1020.496 2470.093 L 1014.84 2470.093 L 998.647 2483.108 L 1005.681 2470.093 L 973.866 2470.093 L 966.945 2476.317 L 984.572 2494.353 L 949.906 2481.417 L 953.82 2475.374 L 953.674 2475.253 Q 967.431 2452.689 967.437 2452.679 L 967.343 2452.679 L 967.343 2452.679 L 928.367 2333.172 L 973.022 2196.251 L 1062.331 2196.251 L 1106.985 2333.172 L 1068.009 2452.684 L 1067.919 2452.684 Z  M 872.772 2202.813 L 941.197 2248.465 L 941.236 2248.4 L 946.367 2251.819 L 954.498 2226.644 L 954.673 2226.358 L 878.064 2184.739 L 872.772 2202.813 L 872.772 2202.813 L 872.772 2202.813 Z  M 1238.36 2472.367 L 1179.268 2446.799 L 1159.228 2479.114 L 1215.281 2525.453 L 1215.476 2525.139 L 1273.474 2508.405 L 1256.294 2480.036 L 1238.379 2472.324 L 1238.36 2472.367 L 1238.36 2472.367 L 1238.36 2472.367 Z  M 890.871 2006.214 L 919.11 2068.741 L 939.978 2048.53 L 934.163 2009.92 L 890.871 2006.214 L 890.871 2006.214 L 890.871 2006.214 Z  M 1088.949 1966.378 L 984.769 1927.25 L 992.498 1973.564 L 1058.048 1991.515 L 1088.949 1966.378 L 1088.949 1966.378 L 1088.949 1966.378 Z  M 1120.474 2093.255 L 1059.38 2191.374 L 977.623 2191.463 L 1073.377 2086.528 L 1120.474 2093.255 L 1120.474 2093.255 L 1120.474 2093.255 Z  M 1120.738 2088.454 L 1091.939 1970.344 L 1059.777 1996.506 L 1073.906 2081.765 L 1120.738 2088.454 L 1120.738 2088.454 L 1120.738 2088.454 Z  M 851.868 2396.531 L 934.385 2394.346 L 934.38 2394.271 L 940.554 2394.104 L 932.511 2368.902 L 932.487 2368.568 L 845.557 2378.774 L 851.868 2396.531 L 851.868 2396.531 L 851.868 2396.531 Z  M 833.638 2335.73 L 914.883 2346.166 L 914.888 2346.103 L 926.067 2347.648 L 921.132 2332.995 L 925.218 2320.782 L 914.333 2320.224 L 914.372 2320.304 L 830.19 2317.16 L 833.638 2335.73 L 833.638 2335.73 L 833.638 2335.73 Z  M 845.087 2245.219 L 940.744 2271.56 L 932.704 2296.08 L 844.808 2264.2 L 845.087 2245.219 L 845.087 2245.219 L 845.087 2245.219 Z  M 922.729 2071.995 L 974.889 2087.892 L 966.861 2059.834 L 942.778 2052.578 L 922.729 2071.995 L 922.729 2071.995 L 922.729 2071.995 Z  M 1080.048 2430.076 L 1080.17 2429.37 L 1164.246 2443.371 L 1164.244 2443.378 L 1174.905 2445.12 L 1155.027 2475.987 L 1154.943 2476.505 L 1154.74 2476.432 L 1154.421 2476.928 L 1154.512 2476.349 L 1082.287 2450.1 L 1073.66 2447.273 L 1079.963 2429.465 L 1080.048 2430.076 L 1080.048 2430.076 L 1080.048 2430.076 Z  M 979.89 1927.325 L 892.816 2001.564 L 936.236 2005.281 L 987.761 1974.494 L 979.89 1927.325 L 979.89 1927.325 L 979.89 1927.325 Z  M 955.309 2430.075 L 955.187 2429.37 L 871.111 2443.371 L 871.113 2443.378 L 860.452 2445.12 L 880.33 2475.987 L 880.414 2476.505 L 880.616 2476.432 L 880.936 2476.928 L 880.845 2476.349 L 953.07 2450.1 L 961.697 2447.273 L 955.394 2429.465 L 955.309 2430.075 L 955.309 2430.075 L 955.309 2430.075 Z  M 796.997 2472.367 L 856.089 2446.799 L 876.129 2479.114 L 820.076 2525.453 L 819.881 2525.139 L 761.883 2508.405 L 779.063 2480.036 L 796.978 2472.324 L 796.997 2472.367 L 796.997 2472.367 L 796.997 2472.367 Z  M 1183.241 2396.53 L 1100.724 2394.346 L 1100.73 2394.271 L 1094.556 2394.104 L 1102.598 2368.902 L 1102.623 2368.568 L 1189.553 2378.774 L 1183.241 2396.53 L 1183.241 2396.53 L 1183.241 2396.53 Z  M 1120.227 2346.165 L 1120.222 2346.103 L 1109.043 2347.648 L 1113.977 2332.995 L 1109.892 2320.782 L 1120.776 2320.225 L 1120.738 2320.304 L 1204.92 2317.16 L 1201.472 2335.73 L 1120.227 2346.165 L 1120.227 2346.165 Z  M 1190.023 2245.22 L 1094.365 2271.56 L 1102.405 2296.08 L 1190.302 2264.2 L 1190.023 2245.22 L 1190.023 2245.22 L 1190.023 2245.22 Z  M 1162.337 2202.813 L 1093.913 2248.465 L 1093.873 2248.4 L 1088.743 2251.819 L 1080.611 2226.645 L 1080.437 2226.358 L 1157.045 2184.739 L 1162.337 2202.813 L 1162.337 2202.813 L 1162.337 2202.813 Z " fill-rule="evenodd" fill="rgb(255,153,0)"/></a></g></svg>
      </figure>
      <figure id = "aries">
        <figcaption>Aries</figcaption>
        <svg viewbox = "0,0,1100,1100"><title>Aries</title><g transform="translate(-460 -2750)"><a xlink:href="teams/aries"><rect x="0" y="0" width="710" height="710" transform = "translate(1018,2790)rotate(45)" fill="transparent" stroke="none"/><path d=" M 1067.833 3578.598 L 1097.459 3462.187 L 1117.385 3451.835 L 1116.808 3451.835 L 1160.49 3317.701 L 1160.566 3317.763 L 1160.5 3317.671 L 1160.566 3317.467 L 1160.053 3317.05 L 1122.744 3265.274 L 1018.084 3201.848 L 1017.827 3201.639 L 1017.937 3201.55 L 1017.811 3201.626 L 1017.593 3201.449 L 1016.089 3202.67 L 912.327 3265.538 L 875.135 3317.048 L 874.62 3317.467 L 874.833 3317.467 L 874.62 3317.467 L 874.686 3317.671 L 874.62 3317.763 L 874.696 3317.701 L 918.466 3452.106 L 918.975 3452.106 L 938.321 3462.157 L 938.321 3462.157 L 967.353 3578.598 L 1017.593 3604.92 L 1067.833 3578.598 Z " fill="rgb(255,153,0)"/><path d=" M 853.213 3323.411 L 844.667 3371.28 L 827.85 3351.378 L 853.213 3323.411 L 853.213 3323.411 Z " fill="rgb(0,0,0)"/><path d=" M 808.706 3366.207 L 822.37 3355.551 L 839.026 3376.166 L 839.282 3376.25 L 811.581 3398.479 L 808.319 3366.128 L 808.361 3366.094 L 808.706 3366.207 L 808.706 3366.207 Z " fill="rgb(0,0,0)"/><path d=" M 784.984 3371.968 L 784.928 3371.191 L 785.3 3371.163 L 785.321 3371.109 L 785.35 3371.16 L 802.02 3369.923 L 804.28 3401.609 L 787.188 3402.876 L 787.184 3402.823 L 772.453 3403.867 L 784.984 3371.968 L 784.984 3371.968 Z " fill="rgb(0,0,0)"/><path d=" M 757.806 3360.763 L 757.832 3360.702 L 778.264 3369.282 L 763.529 3403.795 L 761.973 3403.141 L 761.975 3403.169 L 721.112 3386.108 L 753.435 3358.938 L 757.806 3360.763 L 757.806 3360.763 Z " fill="rgb(0,0,0)"/><path d=" M 733.415 3338.606 L 748.158 3355.945 L 715.644 3382.756 L 698.65 3362.77 L 698.821 3362.629 L 677.494 3337.284 L 723.81 3326.778 L 733.533 3338.333 L 733.415 3338.606 L 733.415 3338.606 Z " fill="rgb(0,0,0)"/><path d=" M 714.403 3289.224 L 714.616 3289.174 L 722.376 3321.835 L 676.601 3332.461 L 673.079 3317.636 L 661.189 3267.936 L 712.298 3280.428 L 714.403 3289.224 L 714.403 3289.224 Z " fill="rgb(0,0,0)"/><path d=" M 719.75 3247.605 L 713.449 3273.213 L 662.957 3260.733 L 662.612 3260.813 L 662.651 3260.657 L 662.566 3260.636 L 669.835 3231.096 L 669.968 3231.129 L 677.543 3200.561 L 721.936 3238.932 L 719.789 3247.596 L 719.75 3247.605 L 719.75 3247.605 Z " fill="rgb(0,0,0)"/><path d=" M 1134.251 3233.686 L 1134.596 3234.095 L 1165.931 3201.63 L 1107.193 3131.961 L 1106.599 3130.652 L 1042.062 3196.948 L 1120.228 3248.091 L 1134.251 3233.686 L 1134.251 3233.686 Z " fill="rgb(0,0,0)"/><path d=" M 800.846 3188.265 L 763.844 3199.351 L 744.984 3125.548 L 786.633 3113.069 L 786.719 3113.406 L 829.53 3100.153 L 811.348 3185.167 L 800.953 3188.385 L 800.846 3188.265 L 800.846 3188.265 Z " fill="rgb(0,0,0)"/><path d=" M 861.832 3197.843 L 861.58 3198.866 L 861.068 3198.707 L 861.002 3198.783 L 860.919 3198.757 L 860.897 3198.654 L 819.93 3185.996 L 840.152 3103.925 L 839.497 3100.935 L 840.79 3101.335 L 840.853 3101.079 L 882.503 3113.948 L 882.436 3114.219 L 924.27 3127.161 L 861.832 3197.843 L 861.832 3197.843 Z " fill="rgb(0,0,0)"/><path d=" M 901.594 3233.686 L 901.249 3234.095 L 869.914 3201.63 L 928.653 3131.96 L 929.247 3130.652 L 993.783 3196.948 L 915.617 3248.091 L 901.594 3233.686 L 901.594 3233.686 Z " fill="rgb(0,0,0)"/><path d=" M 1182.632 3323.411 L 1191.178 3371.28 L 1207.996 3351.378 L 1182.632 3323.411 L 1182.632 3323.411 Z " fill="rgb(0,0,0)"/><path d=" M 1227.14 3366.207 L 1213.475 3355.551 L 1196.82 3376.166 L 1196.564 3376.25 L 1224.264 3398.479 L 1227.527 3366.128 L 1227.485 3366.094 L 1227.14 3366.207 L 1227.14 3366.207 Z " fill="rgb(0,0,0)"/><path d=" M 1250.862 3371.969 L 1250.917 3371.191 L 1250.545 3371.163 L 1250.524 3371.109 L 1250.496 3371.16 L 1233.825 3369.923 L 1231.566 3401.609 L 1248.658 3402.876 L 1248.662 3402.823 L 1263.392 3403.867 L 1250.862 3371.969 L 1250.862 3371.969 Z " fill="rgb(0,0,0)"/><path d=" M 1278.04 3360.763 L 1278.014 3360.702 L 1257.582 3369.282 L 1272.316 3403.795 L 1273.872 3403.141 L 1273.871 3403.169 L 1314.734 3386.108 L 1282.411 3358.938 L 1278.04 3360.763 L 1278.04 3360.763 Z " fill="rgb(0,0,0)"/><path d=" M 1302.43 3338.606 L 1287.688 3355.945 L 1320.202 3382.756 L 1337.195 3362.77 L 1337.025 3362.629 L 1358.352 3337.284 L 1312.036 3326.778 L 1302.312 3338.333 L 1302.43 3338.606 L 1302.43 3338.606 Z " fill="rgb(0,0,0)"/><path d=" M 1321.443 3289.224 L 1321.229 3289.174 L 1313.469 3321.835 L 1359.244 3332.461 L 1362.772 3317.616 L 1374.657 3267.936 L 1323.547 3280.428 L 1321.443 3289.224 L 1321.443 3289.224 Z " fill="rgb(0,0,0)"/><path d=" M 1316.095 3247.605 L 1322.397 3273.213 L 1372.889 3260.733 L 1373.233 3260.813 L 1373.195 3260.657 L 1373.28 3260.636 L 1366.011 3231.096 L 1365.877 3231.129 L 1358.302 3200.561 L 1313.91 3238.932 L 1316.057 3247.596 L 1316.095 3247.605 L 1316.095 3247.605 Z " fill="rgb(0,0,0)"/><path d=" M 1279.931 3200.263 L 1278.945 3201.132 L 1309.396 3234.67 L 1355.368 3194.113 L 1352.839 3191.328 L 1352.934 3191.315 L 1298.22 3130.576 L 1279.931 3200.263 L 1279.931 3200.263 Z " fill="rgb(0,0,0)"/><path d=" M 1017.348 2789.361 L 510.581 3292.333 L 1017.348 3795.304 L 1524.115 3292.333 L 1017.348 2789.361 L 1017.348 2789.361 Z " fill="none" stroke-width="10" stroke="rgb(255,153,0)" stroke-linejoin="miter" stroke-linecap="square" stroke-miterlimit="3"/><path d=" M 1060.078 3473.627 L 1060.373 3526.079 L 1051.532 3474.407 L 1051.237 3421.955 L 1060.078 3473.627 L 1060.078 3473.627 L 1060.078 3473.627 L 1060.078 3473.627 L 1060.078 3473.627 L 1060.078 3473.627 L 1060.078 3473.627 Z  M 1045.73 3592.611 L 1041.431 3594.863 L 1041.431 3594.863 L 1020.203 3588.296 L 1045.73 3592.611 L 1045.73 3592.611 L 1045.73 3592.611 L 1045.73 3592.611 L 1045.73 3592.611 L 1045.73 3592.611 Z  M 989.126 3592.694 L 1015.144 3588.296 L 993.507 3594.99 L 993.507 3594.99 L 989.126 3592.694 L 989.126 3592.694 L 989.126 3592.694 L 989.126 3592.694 L 989.126 3592.694 Z  M 974.258 3475.877 L 983.099 3424.205 L 982.804 3476.657 L 973.963 3528.329 L 974.258 3475.877 L 974.258 3475.877 L 974.258 3475.877 L 974.258 3475.877 L 974.258 3475.877 Z  M 1060.793 3405.89 L 1102.835 3394.922 L 1109.515 3352.561 L 1060.793 3405.89 L 1060.793 3405.89 L 1060.793 3405.89 L 1060.793 3405.89 Z  M 974.564 3405.865 L 932.521 3394.897 L 925.842 3352.536 L 974.564 3405.865 L 974.564 3405.865 L 974.564 3405.865 Z  M 1019.023 3574.957 L 1017.566 3586.005 L 1016.328 3574.957 L 976.714 3546.105 L 1058.637 3546.105 L 1019.023 3574.957 L 1019.023 3574.957 Z " fill-rule="evenodd" fill="rgb(0,0,0)"/><path d=" M 1235 3188.265 L 1272.002 3199.351 L 1290.862 3125.548 L 1249.212 3113.069 L 1249.126 3113.406 L 1206.316 3100.153 L 1224.497 3185.167 L 1234.892 3188.385 L 1235 3188.265 L 1235 3188.265 Z " fill="rgb(0,0,0)"/><path d=" M 1174.014 3197.843 L 1174.266 3198.866 L 1174.777 3198.707 L 1174.844 3198.783 L 1174.926 3198.757 L 1174.949 3198.654 L 1215.915 3185.996 L 1195.693 3103.925 L 1196.348 3100.935 L 1195.055 3101.335 L 1194.992 3101.079 L 1153.343 3113.948 L 1153.409 3114.219 L 1111.576 3127.161 L 1174.014 3197.843 L 1174.014 3197.843 Z " fill="rgb(0,0,0)"/><path d=" M 755.915 3200.263 L 756.9 3201.132 L 726.449 3234.67 L 680.478 3194.113 L 683.006 3191.328 L 682.912 3191.315 L 737.626 3130.576 L 755.915 3200.263 L 755.915 3200.263 Z " fill="rgb(0,0,0)"/><path d=" M 1060.323 3471.065 L 1060.617 3523.517 L 1051.777 3471.845 L 1051.482 3419.393 L 1060.323 3471.065 L 1060.323 3471.065 L 1060.323 3471.065 L 1060.323 3471.065 L 1060.323 3471.065 L 1060.323 3471.065 L 1060.323 3471.065 Z " fill="rgb(0,0,0)"/><path d=" M 1045.974 3590.05 L 1041.675 3592.302 L 1041.675 3592.302 L 1020.448 3585.735 L 1045.974 3590.05 L 1045.974 3590.05 L 1045.974 3590.05 L 1045.974 3590.05 L 1045.974 3590.05 L 1045.974 3590.05 Z " fill="rgb(0,0,0)"/><path d=" M 989.371 3590.133 L 1015.389 3585.735 L 993.752 3592.429 L 993.752 3592.429 L 989.371 3590.133 L 989.371 3590.133 L 989.371 3590.133 L 989.371 3590.133 L 989.371 3590.133 Z " fill="rgb(0,0,0)"/><path d=" M 974.503 3473.316 L 983.343 3421.644 L 983.049 3474.096 L 974.208 3525.768 L 974.503 3473.316 L 974.503 3473.316 L 974.503 3473.316 L 974.503 3473.316 L 974.503 3473.316 Z " fill="rgb(0,0,0)"/><path d=" M 1061.038 3403.329 L 1103.08 3392.361 L 1109.76 3349.999 L 1061.038 3403.329 L 1061.038 3403.329 L 1061.038 3403.329 L 1061.038 3403.329 Z " fill="rgb(0,0,0)"/><path d=" M 974.808 3403.304 L 932.766 3392.336 L 926.087 3349.975 L 974.808 3403.304 L 974.808 3403.304 L 974.808 3403.304 Z " fill="rgb(0,0,0)"/><path d=" M 1019.267 3572.396 L 1017.811 3583.444 L 1016.573 3572.396 L 976.959 3543.544 L 1058.882 3543.544 L 1019.267 3572.396 L 1019.267 3572.396 Z " fill="rgb(0,0,0)"/></a></g></svg>
      </figure>
      <figure id = "taurus">
        <figcaption>Taurus</figcaption>
        <svg viewbox="0,0,1030,1030"><title>Taurus</title><g transform="translate(-500 25)"><polygon points="572,115 1450,115 1020,820" fill = "transparent"/><path d=" M 955.523 509.8 L 905.988 281.518 L 905.942 281.518 L 905.942 217.714 L 1129.734 217.714 L 1129.734 281.494 L 1129.783 281.494 L 1080.243 509.8 L 1080.335 509.8 L 1017.678 534.613 L 955.022 509.8 L 955.523 509.8 Z " fill="rgb(255,153,0)"/><path d=" M 1310.147 201.285 L 1280.894 207.25 L 1280.953 207.452 L 1250.511 221.778 L 1202.567 226.529 L 1202.567 226.401 L 1202.322 226.37 L 1202.272 226.123 L 1202.27 226.363 L 1134.282 217.808 L 1134.282 280.979 L 1201.909 272.47 L 1201.907 272.665 L 1211.376 270.858 L 1211.341 270.684 L 1257.544 255.364 L 1257.558 255.389 L 1257.636 255.333 L 1257.753 255.294 L 1257.745 255.255 L 1292.983 229.983 L 1312.262 222.839 L 1385.069 205.336 L 1310.686 201.209 L 1310.677 201.177 L 1310.555 201.202 L 1310.138 201.179 L 1310.147 201.285 Z " fill="rgb(0,0,0)"/><path d=" M 725.21 201.285 L 754.463 207.25 L 754.404 207.452 L 784.846 221.778 L 832.79 226.529 L 832.79 226.401 L 833.035 226.37 L 833.085 226.123 L 833.087 226.363 L 901.075 217.808 L 901.075 280.979 L 833.448 272.47 L 833.45 272.665 L 823.981 270.858 L 824.016 270.684 L 777.813 255.364 L 777.799 255.389 L 777.721 255.333 L 777.604 255.294 L 777.612 255.255 L 742.374 229.983 L 723.095 222.839 L 650.288 205.336 L 724.671 201.209 L 724.68 201.177 L 724.802 201.202 L 725.219 201.179 L 725.21 201.285 Z " fill="rgb(0,0,0)"/><path d=" M 1068.345 423.541 L 1060.242 377.047 L 1060.424 424.729 L 1068.527 471.223 L 1068.345 423.541 Z " fill="rgb(0,0,0)"/><path d=" M 1048.769 346.797 L 1091.697 331.992 L 1105.308 285.3 L 1048.769 346.797 Z " fill="rgb(0,0,0)"/><path d=" M 967.425 423.541 L 975.528 377.047 L 975.346 424.729 L 967.242 471.223 L 967.425 423.541 Z " fill="rgb(0,0,0)"/><path d=" M 987.001 346.797 L 944.073 331.992 L 930.462 285.3 L 987.001 346.797 Z " fill="rgb(0,0,0)"/><path d=" M 1069.759 509.33 L 1043.885 509.983 L 1026.12 527.732 L 1069.759 509.33 Z " fill="rgb(0,0,0)"/><path d=" M 965.114 509.33 L 990.987 509.983 L 1008.753 527.732 L 965.114 509.33 Z " fill="rgb(0,0,0)"/><path d=" M 1458.194 116.211 L 1018.785 827.813 L 576.503 116.211 L 1458.194 116.211 Z " fill="none" stroke-width="10" stroke="rgb(255,153,0)" stroke-linejoin="miter" stroke-linecap="square" stroke-miterlimit="3"/></g></svg>
      </figure>
    </section>
    <!-- EVENTS: Uses google calendar (bad styling, but easy to edit) -->
    <section id = "events">
    <h2>Events</h2>
      <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ff9900&amp;ctz=America%2FLos_Angeles&amp;src=MjJwb3dlbGxiZUBnbWFpbC5jb20&amp;color=%23039BE5&amp;showTitle=0" title = "Events Calendar"></iframe>
    </section>
  </body>
</html>
