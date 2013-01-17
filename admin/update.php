<!DOCTYPE HTML>
<!-- 
	 ____   ___  ____  _  _____  ____  _   _ 
	|  _ \ / _ \|  _ \| |/ / _ \|  _ \| \ | |
	| |_) | | | | |_) | ' / | | | |_) |  \| |
	|  __/| |_| |  __/| . \ |_| |  _ <| |\  |
	|_|    \___/|_|   |_|\_\___/|_| \_\_| \_|
-->
<?php
define('INCLUDE_CHECK', true);
require_once($_SERVER['DOCUMENT_ROOT'] . '/connect.php');

function parsing_desc($arg)
{
   	$pattern = "#";
   	$arrsrc = split($pattern,$arg);
    return $arrsrc;
}

$id_ = $_POST['id'];
$category_ = $_POST['category'];
$title_ = $_POST['title'];
$date_ = $_POST['date'];
$thumb_img_ = $_POST['thumb_img'];
$vod_src_ = $_POST['vod_src'];
$empathy_ = $_POST['empathy'];
$viewcount_ = $_POST['viewcount'];
$rankpoint_ = $_POST['rankpoint'];
$desc_ = $_POST['desc'];

echo " " .$id_  ." // " .$category_ . " // ".$title_ . " // " .$date_ . " // " .$thumb_img_ . " // " .$empathy_ . " // " .$viewcount_ . " // " .$rankpoint_ . " // " .$desc_ ."<br>";

$query_update = "UPDATE contents SET category = " .$category_ ." , title = '" .$title_ ."' , date = '" .$date_ . "' , thumb_img = '"  .$thumb_img_ ."' , empathy = '" .$empathy_ ."' , viewcount = '" .$viewcount_."' , rankpoint = '" .$rankpoint_ ."' , description = '" .$desc_  ."' , vod_src = '" . $vod_src_ . "' where id = " .$id_;

mysql_query($query_update);

$query = "SELECT * from contents where id = " .$id_;

$result = mysql_query($query);

while($row = mysql_fetch_assoc($result)) 
{
	echo "id : ".$row['id']."<br> category : ".$row['category']."<br> title : ". $row['title']."<br> date : ".$row['date']."<br> thumb_img : ".$row['thumb_img']."<br> empathy : ".$row['empathy']."<br> viewcount : ".$row['viewcount']."<br> point : ".$row['rankpoint'] ."<br> description : ";

		$dstR = parsing_desc($row['description']);
 	for($i=0;$i< sizeof($dstR);$i++){
 	 echo $dstR[$i]."<br>\n";
	}
}

 echo "<script>location.replace('./');</script>"; 


?>
