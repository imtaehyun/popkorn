-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- 호스트: localhost
-- 처리한 시간: 12-02-27 10:51 
-- 서버 버전: 5.5.9
-- PHP 버전: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 데이터베이스: `popkorn`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL DEFAULT '0',
  `title` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `thumb_img` varchar(100) NOT NULL,
  `vod_src` text,
  `empathy` int(11) NOT NULL DEFAULT '0',
  `viewcount` int(11) NOT NULL DEFAULT '0',
  `rankpoint` float NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65 ;

--
-- 테이블의 덤프 데이터 `contents`
--

INSERT INTO `contents` VALUES(1, 0, 'Severely', '2012-01-30', 'mv_Ft_thumImg.png', '<iframe width="640" height="360" src="http://www.youtube.com/embed/mZJnZD1UbA8" frameborder="0" allowfullscreen></iframe>', 1, 25, 4.16071, 'http://music.cyworld.com/new/musicvideo_view.asp?videoNum=3744#FT ISLAND#http://music.cyworld.com/album.asp?aid=15120623');
INSERT INTO `contents` VALUES(2, 0, 'Lovey Dovey', '2012-01-30', 'mv_Tara_ThumImg.png', '<iframe width="640" height="360" src="http://www.youtube.com/embed/_sa1GWrN6eQ" frameborder="0" allowfullscreen></iframe>', 0, 11, 2.69257, 'http://music.cyworld.com/new/musicvideo_view.asp?videoNum=3499#T-ara#http://music.cyworld.com/album.asp?aid=15116132');
INSERT INTO `contents` VALUES(3, 0, 'Although I cannot sing a song', '2012-02-01', 'mv_Seven_ThumImg.png', '<iframe width="640" height="360" src="http://www.youtube.com/embed/dQwEM6W9kUI" frameborder="0" allowfullscreen></iframe>', 0, 2, 1.04624, 'http://music.cyworld.com/new/musicvideo_view.asp?videoNum=3747#SE7EN#http://music.cyworld.com/album.asp?aid=15120641');
INSERT INTO `contents` VALUES(4, 0, 'It was meant to be', '2012-01-26', 'mv_Beast_ThumImg.png', '<iframe width="640" height="360" src="http://www.youtube.com/embed/8Wqlj7GDq0k" frameborder="0" allowfullscreen></iframe>', 0, 14, 2.9453, 'http://music.cyworld.com/new/musicvideo_view.asp?videoNum=3719#B2ST#http://music.cyworld.com/album.asp?aid=15120435');
INSERT INTO `contents` VALUES(5, 0, 'Hate myself', '2012-01-03', 'mv_Kwill_ThumImg.png', '<object id=''skplayer'' name=''skplayer'' width=''640'' height=''360'' classid=''clsid:D27CDB6E-AE6D-11cf-96B8-444553540000'' codebase=''http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9.0.115.00''><param name=''movie'' value=''http://v.nate.com/v.sk/movie/0|219843939/20120131100101517258061001'' /><param name=''allowFullscreen'' value=''true'' /><param name=''allowScriptAccess'' value=''always'' /><param name=''wmode'' value=''transparent'' /><embed src=''http://v.nate.com/v.sk/movie/0|219843939/20120131100101517258061001'' wmode=''transparent'' allowScriptAccess=''always'' allowFullscreen=''true'' name=''skplayer'' width=''640'' height=''360'' type=''application/x-shockwave-flash'' pluginspage=''http://www.macromedia.com/go/getflashplayer'' /></object>', 0, 2, 1.04624, 'http://pann.nate.com/video/219843939#K-Will#http://music.cyworld.com/album.asp?aid=15120692');
INSERT INTO `contents` VALUES(6, 2, 'High Kick', '2012-02-09', 'show_Kick_ThumImg.png', '<iframe width="640" height="360" src="http://www.youtube.com/embed/-cp2Ie-Qd_0" frameborder="0" allowfullscreen></iframe>', 0, 35, 4.05421, 'http://www.hoppin.nate.com/serviceportal/tv/tvDetail/searchRepDetailView.do?dpRepProdId=P00000013387#Yoo-Sun Yoon, Nae-Sang Ahn#http://www.imbc.com/broad/tv/ent/highkick3/index.html#Jong-Seok who secretly likes Ji-Won heading to DaeJeon to meet the Ji-Won. He calls  JiWon on purpose to hear JiWon''s voice. ');
INSERT INTO `contents` VALUES(7, 2, 'Golden Fishery', '2012-02-08', 'show_jang_ThumImg.png', '<iframe width="640" height="360" src="http://www.youtube.com/embed/Mw9T9U1aZ9M" frameborder="0" allowfullscreen></iframe>', 0, 2, 1.04624, 'http://www.hoppin.nate.com/serviceportal/tv/tvDetail/searchRepDetailView.do?dpRepProdId=P00000013344#Jong-Shin Yoon, Gu-Ra Kim, Gook-Jin Kim#http://www.imbc.com/broad/tv/ent/goldfish/');
INSERT INTO `contents` VALUES(9, 2, 'Seung Seung Jang Gu', '2012-02-07', 'show_janggu_ThumImg.png', '<iframe width="640" height="360" src="http://www.youtube.com/embed/4-T-WuKwFRI" frameborder="0" allowfullscreen></iframe>', 0, 3, 1.38853, 'http://www.hoppin.nate.com/serviceportal/tv/tvDetail/searchRepDetailView.do?dpRepProdId=P00000013321#Seung-Woo Kim, Gi-Gwang Lee, Su-Geun Lee#http://www.kbs.co.kr/2tv/enter/winwin/');
INSERT INTO `contents` VALUES(10, 2, 'Gang Sim Jang', '2012-02-09', 'show_simjang_ThumImg.png', '<iframe width="640" height="360" src="http://www.youtube.com/embed/klVmx4ruv6k" frameborder="0" allowfullscreen></iframe>', 0, 4, 1.65838, 'http://www.hoppin.nate.com/serviceportal/tv/tvDetail/searchRepDetailView.do?dpRepProdId=P00000013322#Seung-Gi Lee#http://tv.sbs.co.kr/kangheart/#Seung-Gi Lee lead alone the show. Girl''s Generetion came from Japan talk about their life of japan. Min_ho Lee who came bake to drama tells the secret about his best friend Bum Kim. ');
INSERT INTO `contents` VALUES(16, 2, 'Healing Camp', '2012-02-06', 'show_camp_ThumImg.png', '<iframe width="640" height="360" src="http://www.youtube.com/embed/5zb0DW27kHI" frameborder="0" allowfullscreen></iframe>', 0, 3, 1.38853, 'http://www.hoppin.nate.com/serviceportal/tv/tvDetail/searchRepDetailView.do?dpRepProdId=P00000013302#Kyung-Gu Lee, Hye-Jin Han, Je-Dong Kim#http://tv.sbs.co.kr/healing/');
INSERT INTO `contents` VALUES(17, 1, 'Sun and Moon', '2012-01-04', 'drama_sun_ThunImg.png', '<iframe width="640" height="360" src="http://www.youtube.com/embed/lyYFkmifwkw" frameborder="0" allowfullscreen></iframe>', 0, 5, 1.87845, 'http://www.hoppin.nate.com/serviceportal/tv/tvDetail/searchRepDetailView.do?dpRepProdId=P00000013334#MBC, Su-Hyun Kim. Ga-In Han#http://www.imbc.com/broad/tv/drama/sunNmoon/');
INSERT INTO `contents` VALUES(18, 1, 'Wild Romance', '2012-02-08', 'drama_remence_ThumImg.png', '<iframe width="640" height="360" src="http://www.youtube.com/embed/Pawum8FaqXg" frameborder="0" allowfullscreen></iframe>', 0, 3, 1.38853, 'http://www.hoppin.nate.com/serviceportal/tv/tvDetail/searchRepDetailView.do?dpRepProdId=P00000013335#KBS, See-Young Lee, Dong-Wook Lee#http://www.kbs.co.kr/drama/wildromance/index.html');
INSERT INTO `contents` VALUES(19, 1, 'My Daughter Ggon-nim', '2012-02-09', 'drama_Ggon-nim_ThumImg.png', '<iframe width="640" height="360" src="http://www.youtube.com/embed/2S60ju-WIUE" frameborder="0" allowfullscreen></iframe>', 8, 26, 11.2746, 'http://www.hoppin.nate.com/serviceportal/tv/tvDetail/searchRepDetailView.do?dpRepProdId=P00000013360#SBS, Min-su Cho, Se-Yeon Jeon#http://tv.sbs.co.kr/flowerdaughter/');
INSERT INTO `contents` VALUES(20, 1, 'Only You', '2012-02-09', 'drama_only_ThumImg.png', '<iframe width="640" height="360" src="http://www.youtube.com/embed/giyr_zMAo2Q" frameborder="0" allowfullscreen></iframe>', 0, 2, 1.04624, 'http://www.hoppin.nate.com/serviceportal/tv/tvDetail/searchRepDetailView.do?dpRepProdId=P00000013361#KBS, Joon Young Seo, Jung-A Park#http://www.kbs.co.kr/drama/onlyu/');
INSERT INTO `contents` VALUES(21, 2, 'The Mate', '2012-02-08', 'drama_Mate_ThumImg.png', '<iframe width="640" height="360" src="http://www.youtube.com/embed/sszn4cPeBMs" frameborder="0" allowfullscreen></iframe>', 0, 1, 0.59704, 'http://www.hoppin.nate.com/serviceportal/tv/tvDetail/searchRepDetailView.do?dpRepProdId=P00000013336#SBS#http://tv.sbs.co.kr/jjak/');
INSERT INTO `contents` VALUES(22, 5, 'Stellar', '2012-02-08', 'artist_stellar_ThumImg.png', '', 0, 3, 1.38853, 'http://music.cyworld.com/artist.asp?aid=2074437&jt=profile');
INSERT INTO `contents` VALUES(23, 5, 'Block B', '2012-02-02', 'artist_block_ThumImg.png', '', 0, 2, 1.04624, 'http://music.cyworld.com/artist.asp?aid=2067307#Welcome to the Block B');
INSERT INTO `contents` VALUES(24, 5, 'FT Island', '2012-01-31', 'artist_grown_ThumImg.png', '', 3, 40, 7.72862, 'http://music.cyworld.com/album.asp?aid=15120623#Name: FT Island / FT아일랜드 / FTアイランド<br/>\nStage Debut: June 7, 2007<br/>\nCompany: FNC Music<br/>\nFanclub Name: Primadonna / 프리마돈나 / プリマドンナ<br/>\nOfficial Color:　Sunshine Yellow<br/>\nMember Names: Lee Hongki, Choi Jonghun, Oh Wonbin, Lee Jaejin, Song Seunghyun, Choi Minhwan<br/>\nImportant Info: January 2009; Oh Wonbin leaves FT Island.<br/>\nJanuary 2009; Song Seunghyun joins as second vocalist/guitarist/rapper.<br/>\nWebsites: http://www.ftisland.com/ & http://www.ftisland.jp/<br/>');
INSERT INTO `contents` VALUES(25, 5, 'Se7en', '2012-02-01', 'artist_seven_ThumImg.png', '', 1, 21, 3.53389, 'http://minihp.cyworld.com/pims/main/pims_main.asp?tid=21976327#\nName: Choi Dong Wook <br />\nBirthday: 11/09/84 <br />\nBlood Type: B <br />\nSeven (Se7en)ight: 180 CM<br />\nWeight: 64kg<br />\nNickname: Seven Eleven<br />\nFamily: GrandmotSeven (Se7en)r, parents, 2 older sisters<br />\nHobbies: music<br />\nExpertise: Singing, dancing, rapping.<br />\nFavouite Sport: basketball, snowboard, swimming<br />\nReligion: Christian <br />\nFav. Musician: UsSeven (Se7en)r, Justin Timberlake, Alicia Keys, Dru Hill<br />\nColor: Black and White<br />\nIdeal Girlfriend: More than looks, Seven (Se7en) like personality. A girl who respects otSeven (Se7en)rs and is caring.<br />\n');
INSERT INTO `contents` VALUES(26, 5, 'MBLAQ', '2012-01-01', 'artist_mbla_ThumImg.png', '', 0, 6, 2.06308, 'http://music.cyworld.com/album.asp?aid=15118804#MBLAQ, (엠블랙) is a South Korean quintet boy band created by Korean pop R&B singer Rain under his label J.Tune Entertainment. The group debuted in October 9, 2009 at Rain''s Legend of Rainism concert. On October 14, 2009 the group released their debut single album, "Just BLAQ", which topped various on-line and off-line music charts in South Korea.');
INSERT INTO `contents` VALUES(27, 3, 'Seeya - Crazy Love Song Lip sync By Girl''s High School Students (Funny Video) ', '2011-12-28', 'ucc_seeya_thumImg.png', '<iframe width="640" height="360" src="http://www.youtube.com/embed/f3NN3dhsFds" frameborder="0" allowfullscreen></iframe>', 0, 1, 0.59704, 'http://www.youtube.com/watch?v=f3NN3dhsFds&feature=fvst#fredoommk1');
INSERT INTO `contents` VALUES(28, 3, 'T-ara - Roly Poly Dance By XX Dance School of Korea (Kids Class)', '2011-11-09', 'ucc_roly_ThumImg.png', '<iframe width="640" height="360" src="http://www.youtube.com/embed/gOeobjRk_TY" frameborder="0" allowfullscreen></iframe>', 0, 11, 2.69257, 'http://www.youtube.com/watch?v=gOeobjRk_TY&feature=related#fredoommk1');
INSERT INTO `contents` VALUES(29, 3, 'Infinite - Be Mine and Paradise Dance By Girl''s Dance Team of Korea', '2011-12-02', 'ucc_infinit_ThumImg.png', '<iframe width="640" height="360" src="http://www.youtube.com/embed/AWIIuontnNg" frameborder="0" allowfullscreen></iframe>', 20, 65, 30.2748, 'http://www.youtube.com/watch?v=AWIIuontnNg&feature=related#fredoommk1');
INSERT INTO `contents` VALUES(30, 3, 'Orange Caramel - Magic girl', '2011-11-18', 'ucc_orange_ThumImg.png', '<iframe width="640" height="360" src="http://www.youtube.com/embed/JSc0krZ6wn8" frameborder="0" allowfullscreen></iframe>', 1, 3, 1.76666, 'http://www.youtube.com/watch?v=JSc0krZ6wn8&feature=related#visualkpopdances');
INSERT INTO `contents` VALUES(31, 3, 'SNSD - The Boys Dance By Black Queen (Girl''s Dance Team of Korea)', '2011-11-19', 'ucc_SNSD_ThumImg.png', '<iframe width="640" height="360" src="http://www.youtube.com/embed/JcllJvABKt8" frameborder="0" allowfullscreen></iframe>', 0, 2, 1.04624, 'http://www.youtube.com/watch?v=ykABQKE3wOQ#fredoommk1');
INSERT INTO `contents` VALUES(55, 4, 'Girs'' Generation are the Seoul sister of Korean Wave', '2012-02-03', 'enews_1_ThumImg.png', '1.png', 0, 3, 1.38853, 'bb');
INSERT INTO `contents` VALUES(56, 4, '2NE1''s Dara Tums into', '2012-02-03', 'enews_2_ThumImg.png', '2.png', 2, 25, 4.64289, 'dd');
INSERT INTO `contents` VALUES(57, 4, 'B2ST''s Junhyung takes a nap on the floor', '2012-02-03', 'enews_3_ThumImg.png', '3.png', 0, 17, 3.14861, 'dd');
INSERT INTO `contents` VALUES(58, 4, '25 Things You Don''t Know About the Wonder Girls', '2012-02-03', 'enews_4_ThumImg.png', '4.png', 5, 34, 6.1328, 'dd');
INSERT INTO `contents` VALUES(63, 5, '2PM', '2012-01-22', 'artist_2pm.png', NULL, 2, 4, 2.21345, 'http://music.cyworld.com/artist.asp?aid=2040145#\nOfficial Name ➟ 2PM <br />\nMembers  ➟ Kim Junsu, Nichkhun, Ok Taecyeon, Jang Wooyoung, Lee Junho, Hwang Chansung & former member Park Jaebeom.<br />\nDebut ➟ September 4, 2008<br />\nRecord Label ➟ JYP Entertainment / JYPE<br />\nOfficial Website ➟ http://2pm.jype.com<br />\nOfficial Japan Website ➟ http://www.2pmjapan.com/<br />\nOfficial Fancafe ➟ http://cafe.daum.net/2PM<br />\nOfficial Twitter ➟ http://twitter.com/follow_2PM<br />\nOfficial Facebook ➟ http://facebook.com/2pm.jype<br />\nOfficial Youtube Channel ➟ http://www.youtube.com/user/2pm<br />\nOfficial Fanclub ➟ HOTTEST<br />\nFanclub Motto ➟ 7 letters (in the word HOTTEST) to represent each different, unique member.<br />\nOfficial Balloon Color ➟ Metallic grey, with 2PM engraved on it.');
INSERT INTO `contents` VALUES(64, 5, 'KARA', '2012-02-20', 'artist_kara.png', NULL, 1, 10, 2.794, './idol_kara.php#\nKara (카라, often stylised as KARA) is one of South Korea’s top female pop groups, with hit songs like Honey, Mister, Lupin and Jet Coaster Love etc.<br />\nKARA made their debut as a four member unit with album First Blooming in March 2007. The group was reshuffled in 2008 to become a five member team; the members of KARA are Gyuri, Seungyeon, Nicole, Hara and Jiyoung. Check out Kara member profiles.<br />\nThe five-member KARA released a mini-album, Rock U, in July 2008 before making their breakthrough in November with mini-album Pretty Girl, followed by a repackaged Honey EP which became their first #1 song. The girls released their second full length album, Revolution Vol.2, in July 2009 – its first track Mister was a mega huge hit.<br />\nKARA released their third mini album, Lupin, in February 2010, which was also a huge success. They released their first Japanese single with a Japanese version of Mister in August, followed by their first original Japanese song, Jumping, in October. The group released their first full Japanese album, Girl’s Talk, in November.');
