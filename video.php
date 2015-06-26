<?php
require_once("lib/lib.php");
require_once("lib/mysql-ini.php");
// データベースに接続
$db_conn = new mysqli($host, $user, $pass, $dbname)
or die("データベースとの接続に失敗しました");
$db_conn->set_charset('utf8');

$title = "スマート特派員-動画部";	
$keywords = "Youtube,Dailymotion,Veoh,人気動画";
$description = "Youtube,Dailymotion,Veohから人気動画を紹介します:スマート特派員-動画部";
//
$og_title = $title;
$og_image = "http://correspondent.xyz/img/index.png";
$og_url = "http://correspondent.xyz/index.php";
$og_site_name = $title;
$og_description = $description;

$h1_st = $title;
$h1_st_s = "もっとも優れた動画を紹介します";
$culhtml = "http://correspondent.xyz/";
$crlhtmltitle = "スマート特派員";
$site_name = "Smart Correspondent";
$footer_sitename = "Smart Correspondent";

$sns_url = "http://".$_SERVER["HTTP_HOST"].htmlspecialchars($_SERVER["PHP_SELF"]);

//アクティブメニュー
$active_st[2] = 'class="active"';
?>
<?php require('header.php');?>
<body>
<?php require('menu.php');?>

<!-- ページのコンテンツすべてをwrapする（フッター以外） -->
<div id="wrap">
	<!-- パンくず -->
	<ol class="breadcrumb"> 
		<li><a href="/">ホーム</a></li>
		<!-- <li><a href="http://bootstrap3.cyberlab.info/components/">コンポーネント</a></li> -->
		<li class="active"><?=$title?></li>
	</ol>
	<!-- .パンくず -->

    <div class="container">
        <div class="page-header"  style="margin-top: 5px;">
        <h1 class="h2"><?=$title?><small><?=$h1_st_s?></small></h1>
        </div>

        <p class="lead">スマート特派員は、インターネット上の情報を特派員が収集する世界で一番新しい <b>通信社</b> です。</p>
        <p>グノシー、スマートニュースなどのキュレーションメディア、Youtube，Dailymotionなどの投稿動画サイトなどから情報を収集します。 </p>


        <!-- 動画 -->
        <ul class="list-unstyled video-list-thumbs row">

			<li class="col-lg-3 col-sm-4 col-xs-12">
				<a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
					<img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="Barca" class="img-responsive" height="130px" />
					<h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
					<span class="glyphicon glyphicon-play-circle"></span>
					<span class="duration">03:15</span>
				</a>
			</li>
			<li class="col-lg-3 col-sm-4 col-xs-12">
				<a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
					<img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="Barca" class="img-responsive" height="130px" />
					<h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
					<span class="glyphicon glyphicon-play-circle"></span>
					<span class="duration">03:15</span>
				</a>
			</li>
			<li class="col-lg-3 col-sm-4 col-xs-12">
				<a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
					<img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="Barca" class="img-responsive" height="130px" />
					<h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
					<span class="glyphicon glyphicon-play-circle"></span>
					<span class="duration">03:15</span>
				</a>
			</li>
			<li class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
					<img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="Barca" class="img-responsive" height="130px" />
					<h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
					<span class="glyphicon glyphicon-play-circle"></span>
					<span class="duration">03:15</span>
				</a>
			</li>
		    <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
					<img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="Barca" class="img-responsive" height="130px" />
					<h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
					<span class="glyphicon glyphicon-play-circle"></span>
					<span class="duration">03:15</span>
				</a>
			</li>

		</ul>
		<!-- .動画 -->
    
    </div><!-- /.container -->

</div>
<!-- .wrap -->
<?php require('footer.php');?>
</body>
</html>






