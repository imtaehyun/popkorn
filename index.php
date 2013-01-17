<?php
define('INCLUDE_CHECK', true);
require_once($_SERVER['DOCUMENT_ROOT'] . '/connect.php');
?>
<!DOCTYPE HTML>
<!-- 
	 ____   ___  ____  _  _____  ____  _   _ 
	|  _ \ / _ \|  _ \| |/ / _ \|  _ \| \ | |
	| |_) | | | | |_) | ' / | | | |_) |  \| |
	|  __/| |_| |  __/| . \ |_| |  _ <| |\  |
	|_|    \___/|_|   |_|\_\___/|_| \_\_| \_|

	Programmer : Taehyun Im, Bosol Jeon, Younsung Kim
	Design : Hyojoo Kim
	Service : Kyunggook Park, Duri Hur
	Marketing : Maki Saito
-->
<?php
$p_ = $_GET['p'];
$c_ = $_GET['c'];
if ($p_ == NULL) $p_ = 1;

/* Database parse */
function parsing_desc($arg)
{
   	$pattern = "#";
   	$arrsrc = split($pattern,$arg);
    return $arrsrc;
}
function category($arg)
{
	if ($arg == 0) return "M/V";
	else if ($arg == 1) return "Drama";
	else if ($arg == 2) return "Show";
	else if ($arg == 3) return "UCC";
	else if ($arg == 4) return "E-news";
	else return "Artists";
}
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>POPKORN</title>
	<meta name="author" content="popkorn">
	<meta name="description" content="">
	<!-- <link href="/favicon.png" rel="shortcut icon" type="image/png"> -->
	<link rel="stylesheet" href="/styles/style.css" type="text/css">
	<link rel="stylesheet" href="/styles/preset.css" type="text/css">
	<script type="text/javascript" src="/scripts/jquery-1.6.1.min.js"></script>
	<script type="text/javascript" src="/scripts/popup.js"></script>
	<script>
	function view(no) {
		var url = "/view.php?id=" + no;
		$.get(url, function(data) {
			
		});
	}
	function empathy(no) {
		var url = "/empathy.php?id=" + no;
		$.get(url, function(data) {
			alert('You clicked "I Love It!!"');
		});
	}

	// Submenu Hover
	$(document).ready(function(){
	   // Change the image of hoverable images
	   $(".imgHoverable").hover( function() {
	       var hoverImg = HoverImgOf($(this).attr("src"));
	       $(this).attr("src", hoverImg);
	     }, function() {
	       var normalImg = NormalImgOf($(this).attr("src"));
	       $(this).attr("src", normalImg);
	     }
	   );
	});

	function HoverImgOf(filename)
	{
	   var re = new RegExp("(.+)\\.(gif|png|jpg)", "g");
	   return filename.replace(re, "$1_hover.$2");
	}
	function NormalImgOf(filename)
	{
	   var re = new RegExp("(.+)_hover\\.(gif|png|jpg)", "g");
	   return filename.replace(re, "$1.$2");
	} 
	</script>
	<!--[if (gte IE 6)&(lte IE 8)]>
	<script src="/javascripts/html5shiv.js"></script>
	<script src="/javascripts/selectivizr.js"></script>
	<![endif]-->
</head>
<body>
	<div id="wrapper">
		<header>
			<figure>
				<a href="/"><img src="/images/head_title.png" alt="POPKORN"></a>
				<figcaption>POPKORN</figcaption>
			</figure>
			<nav>
				<ul>
					<li><a href="/index.php?c=0"><span>M/V</span></a></li>
					<li><a href="/index.php?c=1"><span>Drama</span></a></li>
					<li><a href="/index.php?c=2"><span>Show</span></a></li>
					<li><a href="/index.php?c=4"><span>UCC</span></a></li>
					<li><a href="/index.php?c=3"><span>E-News</span></a></li>
					<li><a href="/index.php?c=5"><span>Artists</span></a></li>
				</ul>
			</nav>
			<!-- <div id="search">
				<form id="popkorn_search" name="popkorn_search" method="post" action="/">
					<input class="s_query" type="text" name="s_query">
					<input class="s_btn" type="image" src="/images/head_search2.png" value="검색">
				</form>
			</div> -->
		</header>
		<div id="content">
			<?php
				if ($c_ == NULL) $c_count = mysql_num_rows(mysql_query("SELECT * FROM contents"));
				else if ($c_ == 0) $c_count = mysql_num_rows(mysql_query("SELECT * FROM contents WHERE category = 0"));
				else if ($c_ == 1) $c_count = mysql_num_rows(mysql_query("SELECT * FROM contents WHERE category = 1"));
				else if ($c_ == 2) $c_count = mysql_num_rows(mysql_query("SELECT * FROM contents WHERE category = 2"));
				else if ($c_ == 3) $c_count = mysql_num_rows(mysql_query("SELECT * FROM contents WHERE category = 3"));
				else if ($c_ == 4) $c_count = mysql_num_rows(mysql_query("SELECT * FROM contents WHERE category = 4"));
				else if ($c_ == 5) $c_count = mysql_num_rows(mysql_query("SELECT * FROM contents WHERE category = 5"));
				$page = $c_count/12 + 1;
			?>
			<?php
				$ad_cnt = rand(1, 3);
				$rand1 = rand(5, 12);
				$rand2 = rand(5, 12);
				$rand3 = rand(5, 12);
				$start = ($p_ - 1) * 12;

				if ($c_ == NULL) $query = "SELECT * FROM contents ORDER BY rankpoint DESC LIMIT {$start}, 12";
				else if ($c_ == 0)$query = "SELECT * FROM contents WHERE category = 0 ORDER BY rankpoint DESC LIMIT {$start}, 12";
				else if ($c_ == 1)$query = "SELECT * FROM contents WHERE category = 1 ORDER BY rankpoint DESC LIMIT {$start}, 12";
				else if ($c_ == 2)$query = "SELECT * FROM contents WHERE category = 2 ORDER BY rankpoint DESC LIMIT {$start}, 12";
				else if ($c_ == 3)$query = "SELECT * FROM contents WHERE category = 3 ORDER BY rankpoint DESC LIMIT {$start}, 12";
				else if ($c_ == 4)$query = "SELECT * FROM contents WHERE category = 4 ORDER BY rankpoint DESC LIMIT {$start}, 12";
				else if ($c_ == 5)$query = "SELECT * FROM contents WHERE category = 5 ORDER BY rankpoint DESC LIMIT {$start}, 12";
				$result = mysql_query($query);
				if (mysql_num_rows($result)>0)
				{
					$count = 1;
					while($row = mysql_fetch_assoc($result)) 
					{
						if ($count == $rand1) {
							echo "<article style=\"background-image: url('/banner/banner1.gif')\"></article>";
						} else if ($count == $rand2) {
							echo "<article style=\"background-image: url('/banner/banner2.gif')\"></article>";
						} else if ($count == $rand3) {
							echo "<article style=\"background-image: url('/banner/banner3.gif')\"></article>";
						} else {
							if ($row['category'] <= 3 && $row['category'] >= 0) {
								echo "<article class=\"vod\" ";
							} else {
								echo "<article class=\"text\" ";
							}
							if ($row['category'] == 0) { echo "id=\"mv\">"; }
							else if ($row['category'] == 1) { echo "id=\"drama\">"; }
							else if ($row['category'] == 2) { echo "id=\"show\">"; }
							else if ($row['category'] == 3) { echo "id=\"ucc\">"; }
							else if ($row['category'] == 4) { echo "id=\"news\">"; }
							else { echo "id=\"artists\">"; }
						?>
						<a href="#" onclick="view(<?=$row['id']?>)" id="layer_open_<?=$count?>">
							<div class="thumb_img"><img src="/thumb_img/<?=$row['thumb_img']?>" /></div>
							<div class="title"><?=substr($row['title'], 0, 10).".."?></div>
							<div class="contents_info">
								<img src="/images/icon_empathy.png"><span class="number"><?=$row['empathy']?></span>
								<img src="/images/icon_eye.png"><span class="number"><?=$row['viewcount']?></span>
							</div>
						</a>
						<?php
							if($p_ == 1) {
								if($count == 1) echo "<div id=\"r_1\" class=\"ribbon\"></div>";
								else if($count == 2) echo "<div id=\"r_2\" class=\"ribbon\"></div>";
								else if($count == 3) echo "<div id=\"r_3\" class=\"ribbon\"></div>";
								else if($count == 4) echo "<div id=\"r_4\" class=\"ribbon\"></div>";
							}
						?>
					</article>
					<div class="subdiv_<?=$count?>">
						<div class="bg_<?=$count?>"></div>
						<div class="layer_area_<?=$count?>" id="layer_<?=$count?>">
							<div class="layer_left">
								<?php
									if ($row['category'] == 4) {
										echo "<div class=\"news_area\">";
										echo "<img id=\"news_img\" src=\"/news/".$row['vod_src']."\" />";
										echo "</div>";
										echo "<div class=\"description\">";
										echo "<div class=\"i_right_news\">";
										echo "<a href=\"#\" onclick=\"empathy(". $row['id'] . ")\"><img class=\"imgHoverable\" src=\"/images/btn_love.png\" /></a>";
										echo "</div>";
										echo "</div>";
									} else {
								?>
								<div class="vod_area">
									<?=$row['vod_src']?>
								</div>
								<div class="description">
									<div class="i_top">
										<?php 
											if ($row['category'] == 4 || $row['category'] == 5)
												echo "<div><img src=\"/thumb_img/". $row['thumb_img'] . "\" /></div>";
											echo "<div>";
											if (strlen($row['title']) > 80) 
												echo substr($row['title'], 0, 80)."...";
											else echo $row['title'];
											echo "</div>";
										?>
									</div>
									<div class="i_middle">POPKORN > <?=category($row['category'])?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<?=$row['date']?></div>
									<div class="i_bottom">
										<div class="i_left">
											<?php
												$dstR = parsing_desc($row['description']);
												if($row['category'] == 0) { // M/V
													echo "Artists : ".$dstR[1]."<br />";
												} else if ($row['category'] == 1 || $row['category'] == 2) { // Drama, Show
													echo "Cast : ".$dstR[1]."<br />";
													// echo "Story : ".$dstR[2]."<br />";
												} else if ($row['category'] == 3) { // UCC
													echo "Uploader : ".$dstR[1]."<br />";
													// echo "Story : ".$dstR[2]."<br />";
												} else if ($row['category'] == 4) { // E-news
													echo $dstR[0];
												} else if ($row['category'] == 5) { // Artists
													echo $dstR[1];
												}
											?>
										</div>
										<div class="i_right">
											<a href="#" onclick="empathy(<?=$row['id']?>)"><img class="imgHoverable" src="/images/btn_love.png" /></a>
											<?php
												if ($row['category'] == 0) echo "<a href=\"" . $dstR[2] . "\" target=\"_blank\"><img class=\"imgHoverable\" src=\"/images/btn_music.png\" /></a>";
												else if ($row['category'] == 1 || $row['category'] == 2) echo "<a href=\"".$dstR[2]."\" target=\"_blank\"><img class=\"imgHoverable\" src=\"/images/btn_broadcast.png\" /></a>";
												else if ($row['category'] == 5) echo "<a href=\"".$dstR[0]."\" target=\"_blank\"><img class=\"imgHoverable\" src=\"/images/btn_cy.png\" /></a>";
											?>
										</div>
									</div>
								</div>
								<?php
							}
								?>
							</div>
							<div class="layer_right">
								<h1>You may like</h1>
								<?php
								$q_rcmd = "SELECT * FROM contents WHERE category=" . $row['category'] . " LIMIT 0, 5";
								$rcmd_result = mysql_query($q_rcmd);
								if (mysql_num_rows($result)>0)
								{
									while($rcmd = mysql_fetch_assoc($rcmd_result)) 
									{		
								?>
								<div class="rcmd_article">
									<img class="rcmd_img" src="/thumb_img/<?=$rcmd['thumb_img']?>" />
									<div class="rcmd_txt"><?=$rcmd['date']?></div>
								</div>
								<?php
									}
								}
								?>
							</div>
							<a href="#" id="layer_close_<?=$count?>"><div class="close_btn"></div></a>
						</div>
					</div>
						<?php
						}
						$count++;
					}
				}
			?>
			</div>
			<div class="paginate">
				<?php
					for ($i=1; $i<=$page; $i++) {
						if ($p_ == $i) {
							echo "<a href=\"/index.php?p=".$i."\"><strong><span>" . $i . "</span></strong></a>";	
						} else {
							echo "<a href=\"/index.php?p=".$i."\"><span>" . $i . "</span></a>";
						}
						
					}
				?>
			</div>
		<footer>
		</footer>
	</div>
</body>
</html>