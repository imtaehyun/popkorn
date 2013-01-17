<?php
define('INCLUDE_CHECK', true);
require_once($_SERVER['DOCUMENT_ROOT'] . '/connect.php');

$id_ = $_GET['id'];

$query = "SELECT empathy from contents where id = " .$id_ ;

$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
// echo "empathy = " .$row['empathy']."<br>\n";

$count = $row['empathy'] + 1;

$query_update = "UPDATE contents SET empathy = " .$count ." where id = " .$id_;
mysql_query($query_update);

/* point 추가 */
$query_point = "SELECT rankpoint from contents where id = " .$id_ ;
$result_point = mysql_query($query_point);
$row_point = mysql_fetch_assoc($result_point);

// echo "point = " .$row_point['rankpoint']."<br>\n";
if($row_point['rankpoint'] == 0){
	$x_ = $row_point['rankpoint'] + 2;
}else {
	$x_ = $row_point['rankpoint'] + 1;
}
$logX = log10($x_);
$count = $row_point['rankpoint'] + $logX;
// echo "result : " .$count;
$query_point_update = "UPDATE contents SET rankpoint = " .$count ." where id = " .$id_;
mysql_query($query_point_update);


?>