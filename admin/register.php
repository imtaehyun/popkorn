<!DOCTYPE HTML>
<!-- 
	 ____   ___  ____  _  _____  ____  _   _ 
	|  _ \ / _ \|  _ \| |/ / _ \|  _ \| \ | |
	| |_) | | | | |_) | ' / | | | |_) |  \| |
	|  __/| |_| |  __/| . \ |_| |  _ <| |\  |
	|_|    \___/|_|   |_|\_\___/|_| \_\_| \_|
-->

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
		<form method="post" action="./insert.php">
			<div>
				<label>Category</label>
				<select name="category">
					<option value="0">M/V</option>
					<option value="1">Drama</option>
					<option value="2">Show</option>
					<option value="3">UCC</option>
					<option value="4">E-News</option>
					<option value="5">Artists</option>
				</select>
			</div>
			<div>
				<label>Date</label>
				<input type="date" name="date" />
			</div>
			<div>
				<label>Title</label>
				<input type="text" name="title" />
			</div>
			<div>
				<label>Thumb Image</label>
				<input type="text" name="thumb_img" />
			</div>
			<div>
				<label>Desc</label>
				<textarea name="desc" style="width:500px; height: 400px;"></textarea>
			</div>
			<div>
				<input type="submit" value="등록" />
			</div>
		</form>
	</div>
</body>
</html>