<!DOCTYPE HTML>
<!-- 
	 ____   ___  ____  _  _____  ____  _   _ 
	|  _ \ / _ \|  _ \| |/ / _ \|  _ \| \ | |
	| |_) | | | | |_) | ' / | | | |_) |  \| |
	|  __/| |_| |  __/| . \ |_| |  _ <| |\  |
	|_|    \___/|_|   |_|\_\___/|_| \_\_| \_|
-->
<?php
$category = $_GET['m'];

define('INCLUDE_CHECK', true);
require_once($_SERVER['DOCUMENT_ROOT'] . '/connect.php');
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>POPKORN Admin Page</title>
	<meta name="author" content="popkorn">
	<meta name="description" content="">
	<!-- <link href="/favicon.png" rel="shortcut icon" type="image/png"> -->
	<!-- <link rel="stylesheet" href="/styles/style.css" type="text/css"> -->
	<style type="text/css">
	table {
		width: 100%;
		border: solid 1px;
		border-collapse:collapse;border-spacing:0;
		margin:0;
		padding:0;
		font-weight:normal;
		font-style:normal;
		font-size:100%;
		line-height:1;
		font-family:inherit;
	}
	body {
		font-size: 10pt;
		font-family: Arial, Helvetica, sans-serif;
		color: #333333;
	}
	</style>
</head>
<body>
	<div style="width: 100%;">
		<div>
			<div style="float: left;">
				<a href="./index.php?m=6"><button>All</button></a>
				<a href="./index.php?m=0"><button>M/V</button></a>
				<a href="./index.php?m=1"><button>Drama</button></a>
				<a href="./index.php?m=2"><button>Show</button></a>
				<a href="./index.php?m=3"><button>UCC</button></a>
				<a href="./index.php?m=4"><button>E-News</button></a>
				<a href="./index.php?m=5"><button>Artists</button></a>
			</div>
			<div style="float: right;">
				<a href="./register.php"><button>새 글 등록</button></a>
			</div>
		</div>
		<div>
			<table border="1">
				<thead>
					<td>글번호</td>
					<td>카테고리</td>
					<td>글 작성일자</td>
					<td>제목</td>
					<td>썸네일 이미지</td>
					<!-- <td>VOD SRC</td> -->
					<td>공감횟수</td>
					<td>조회수</td>
					<td>RankPoint</td>
					<!-- <td>Description</td> -->
					<td>&nbsp;</td>
				</thead>
				<tbody>
					<?php
						if ($category == NULL || $category == 6)
							$query = "SELECT * FROM contents ORDER BY rankpoint desc";
						else 
							$query = "SELECT * FROM contents WHERE category = " . $category . " ORDER BY id desc";
						

						$result = mysql_query($query);

						while($row = mysql_fetch_assoc($result)) 
						{
							echo "<tr>";
							echo "<td>".$row['id']."</td>";
							echo "<td>".$row['category']."</td>";
							echo "<td>".$row['date']."</td>";
							echo "<td>".$row['title']."</td>";
							echo "<td>".$row['thumb_img']."</td>";
							// echo "<td>".$row['vod_src']."</td>";
							echo "<td>".$row['empathy']."</td>";
							echo "<td>".$row['viewcount']."</td>";
							echo "<td>".$row['rankpoint']."</td>";
							// echo "<td>".$row['description']."</td>";
							echo "<td><a href=\"./edit.php?id=".$row['id']."\"><button>edit</button></a><a href=\"./delete.php?id=".$row['id']."\"><button>delete</button></a></td>";
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>