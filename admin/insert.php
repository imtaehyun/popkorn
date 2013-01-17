<?php
define('INCLUDE_CHECK', true);
require_once($_SERVER['DOCUMENT_ROOT'] . '/connect.php');

$category = $_POST['category'];
$date = $_POST['date'];
$title = $_POST['title'];
$thumb_img = $_POST['thumb_img'];
$desc = $_POST['desc'];

// $query = "INSERT INTO contents VALUES (NULL, '" . $category . "', '" . $title . "', '" . $date . "', '" . $thumb_img . "', NULL, NULL, '" . $desc ."')";
$query = "INSERT INTO contents VALUES (NULL, '{$category}', '{$title}', '{$date}', '{$thumb_img}', NULL, 0, 0, 0, '{$desc}')";
echo $query;
$result = mysql_query($query);
echo $result;
echo "<script>location.replace('./');</script>"; 
?>