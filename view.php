<?php
define('INCLUDE_CHECK', true);
require_once($_SERVER['DOCUMENT_ROOT'] . '/connect.php');

$id_ = $_GET['id'];

$query = "SELECT viewcount FROM contents WHERE id = " . $id_ ;
// echo $query;
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
// echo "view = " .$row['viewcount']."<br>";

$count = $row['viewcount'] + 1;

$query_update = "UPDATE contents SET viewcount = " .$count ." where id = " .$id_;
mysql_query($query_update);


/* point 추가 */
$query_point = "SELECT rankpoint from contents where id = " .$id_ ;
$result_point = mysql_query($query_point);
$row_point = mysql_fetch_assoc($result_point);

$x_ = $row_point['rankpoint'] + 0.3;
// echo "x = " .$x_ ."<br>\n";

$exp = exp($x_);
$count = $row_point['rankpoint'] + 1 / (1 + $exp / 2);
// echo "exp = " .$count;

$query_point_update = "UPDATE contents SET rankpoint = " .$count ." where id = " .$id_;
mysql_query($query_point_update);
?>