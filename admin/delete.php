<!DOCTYPE HTML>
<!-- 
	 ____   ___  ____  _  _____  ____  _   _ 
	|  _ \ / _ \|  _ \| |/ / _ \|  _ \| \ | |
	| |_) | | | | |_) | ' / | | | |_) |  \| |
	|  __/| |_| |  __/| . \ |_| |  _ <| |\  |
	|_|    \___/|_|   |_|\_\___/|_| \_\_| \_|
-->
<?php

$id_ = $_GET['id'];

echo "id = " .$id_ ;

define('INCLUDE_CHECK', true);
require_once($_SERVER['DOCUMENT_ROOT'] . '/connect.php');

$query_delete = "DELETE FROM contents where id = " .$id_;

mysql_query($query_delete);

echo "<script>location.replace('./');</script>"; 
?>
