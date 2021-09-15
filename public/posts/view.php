<?php
include '../../core/db_connect.php';
//checkSession();

include '../../core/db_connect.php';

//$slug = "'{$_GET['slug']}'";
$slug="(SELECT slug FROM posts WHERE slug = 'hello')";

$content=null;
$stmt = $pdo->query("SELECT * FROM posts WHERE slug={$slug}");

$row = $stmt->fetch();
$content .= "<h1>{$row['title']}</h1>";



$content .="<p><a href=\"edit.php?id={$row['id']}\">Edit Post</a><br>";
$content .="<p><a href=\"delete.php?id={$row['id']}\">Delete</a><br>";
//echo $content;

