<?php
  /*The sitemap is helpful for robots and search engines,
  it informs them of all the important pages on the site for
  them to index. A sitemap is important for this site because
  not all the pages that are important are directly linked to.
  For example, some are linked with a javascript redirect.
  This code is created dynamically so there is no need to make
  any changes if you are just adding a page with the standard
  process.*/
  header('Content-type: application/xml');
  echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php
  date_default_timezone_set('America/Los_Angeles');
  $di = new RecursiveDirectoryIterator('.');
  foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
    if((substr($filename, -9) == 'index.php' || substr($filename, -4) == 'html' || substr($filename, -3) == 'pdf') && substr($filename, 1, 7) != '/error/' && strpos($filename, 'vendor') !== FALSE && strpos($filename, '.heroku') !== FALSE) {
      echo '<url><loc>https://' . $_SERVER['HTTP_HOST'] . ((substr($filename, -9) == 'index.php') ? substr($filename, 1, -9) : str_replace(['.html','.pdf'], '', substr($filename, 1))) . '</loc><lastmod>' . date('Y-m-d', filemtime ($file)) . '</lastmod><priority>' . ((strpos($filename, '/teams/') != false || substr($filename, -3) == 'pdf') ? 0.8 : round(1 / substr_count($filename, '/'), 2)) . '</priority></url>';
    }
  }
?>
</urlset>
