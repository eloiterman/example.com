
  <?php

require '../core/bootstrap.php';
// 1. Connect to the database
require '../core/db_connect.php';




//Build the page metadata
$meta = [];
$meta['description'] = "Users MicroTrain2105 User List Php bootcamp project";
$meta['keywords'] = "Front End Developer, Artist, PHP";



$content = <<<EOT


<p>
We use cookies

We use cookies and other tracking technologies to improve your browsing experience on our website, to show you personalized content and targeted ads, to analyze our website traffic, and to understand where our visitors are coming from.
</p>

EOT;
include '../core/layout.php';