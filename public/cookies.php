
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
Cookie policy
</p>

EOT;
include '../core/layout.php';