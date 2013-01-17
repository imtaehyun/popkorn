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
/* Database config */

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= 'root';
$db_database	= 'popkorn'; 

/* End config */

$link = mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

mysql_select_db($db_database,$link);
mysql_query("SET names UTF8");

$query = "SELECT * from contents where id = " .$id_ ;

$result = mysql_query($query);
$row = mysql_fetch_assoc($result);

?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>POPKORN Admin Page - Register</title>
	<meta name="author" content="popkorn">
	<meta name="description" content="">
	<!-- <link href="/favicon.png" rel="shortcut icon" type="image/png"> -->
	<link rel="stylesheet" href="/styles/style.css" type="text/css">
	<style type="text/css">
	div {
		margin: 0 auto;
		width: 80%;
	}
	</style>
</head>
<body>
	<div>
		<form method="post" action="./update.php">
			<div>
				<label>Id</label>
				<input type="text" name="id" value="<?= $row['id'] ?>"/>
			</div>
			<div>
				<label>Category</label>
				<select name="category">
					<option value="0" <?php if($row['category']==0) echo "selected=\"selected\"" ?>>M/V</option>
					<option value="1" <?php if($row['category']==1) echo "selected=\"selected\"" ?>>Drama</option>
					<option value="2" <?php if($row['category']==2) echo "selected=\"selected\"" ?>>Show</option>
					<option value="3" <?php if($row['category']==3) echo "selected=\"selected\"" ?>>UCC</option>
					<option value="4" <?php if($row['category']==4) echo "selected=\"selected\"" ?>>E-News</option>
					<option value="5" <?php if($row['category']==5) echo "selected=\"selected\"" ?>>Artists</option>
				</select>
			</div>
			<div>
				<label>Date</label>
				<input type="date" name="date" value="<?= $row['date'] ?>"/>
			</div>
			<div>
				<label>Title</label>
				<input type="text" name="title" value="<?= $row['title'] ?>"/>
			</div>
			<div>
				<label>Thumb Image</label>
				<input type="text" name="thumb_img" value="<?= $row['thumb_img'] ?>"/>
			</div>
			<div>
				<label>VOD SRC</label>
				<textarea name="vod_src"><?= $row['vod_src'] ?></textarea>
			</div>
			<div>
				<label>Empathy</label>
				<input type="text" name="empathy" value="<?= $row['empathy'] ?>"/>
			</div>
			<div>
				<label>ViewCount</label>
				<input type="text" name="viewcount" value="<?= $row['viewcount'] ?>"/>
			</div>
			<div>
				<label>Rankpoint</label>
				<input type="text" name="rankpoint" value="<?= $row['rankpoint'] ?>"/>
			</div>
			<div>
				<label>Desc</label>
				<textarea name="desc"><?= $row['description'] ?></textarea>
			</div>
			<div>
				<input type="submit" value="등록" />
			</div>
		</form>
	</div>
</body>
</html>
<?php

?>