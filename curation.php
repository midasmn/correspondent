<?php
require_once("lib/lib.php");
require_once("lib/mysql-ini.php");
// データベースに接続
$db_conn = new mysqli($host, $user, $pass, $dbname)
or die("データベースとの接続に失敗しました");
$db_conn->set_charset('utf8');

$title = "スマート特派員-キュレーション部";	
$keywords = "グノシー,スマートニュース,アンテナ,まとめ,キュレーション";
$description = "グノシー,スマートニュース,アンテナから人気記事を紹介します:スマート特派員-キュレーション";
//
$og_title = $title;
$og_site_name = $title;
$og_description = $description;

$h1_st = $title;
$h1_st_s = "もっとも人気のある記事を紹介します";
$culhtml = "http://correspondent.xyz/";
$crlhtmltitle = "スマート特派員";
$site_name = "Smart Correspondent";
$footer_sitename = "Smart Correspondent";

$sns_url = "http://".$_SERVER["HTTP_HOST"].htmlspecialchars($_SERVER["PHP_SELF"]);

//アクティブメニュー
$active_st[3] = 'class="active"';
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
        <div class="page-header" style="margin-top: 5px;">
        <h1 class="h2"><?=$title?><small><?=$h1_st_s?></small></h1>
        </div>

        <p class="lead">スマート特派員は、インターネット上の情報を特派員が収集する世界で一番新しい <b>通信社</b> です。</p>
        <p>グノシー、スマートニュースなどのキュレーションメディア、Youtube，Dailymotionなどの投稿動画サイトなどから情報を収集します。 </p>

        <!-- コンテンツ -->
		<div class="row"><!-- row -->
			<ul class="curation_list"><!-- ul -->

				<li class="col-lg-6 col-md-4 col-sm-12 text-center" >
					<div class="box4">
						<figure><img src="img/notfound.jpg" alt=""></figure>
						<div class="info1 maxheight" style="height: 116px;">
							<div class="box_inner">
								<p class="list3title1">Nature</p>
								<p class="list3title2">Migytafsas deuauyt asares</p>
								<p class="list3title3">Kictaesaert asetyertya aset aplicibrdedas.</p>
								<a href="#" class="btn-link btn-link1">learn more<span></span></a>
							</div>
						</div>
					</div>
				</li>

				<li class="col-lg-6 col-md-4 col-sm-12 text-center">
					<div class="box4">
						<figure><img src="img/notfound.jpg" alt=""></figure>
						<div class="info1 maxheight" style="height: 116px;">
							<div class="box_inner">
								<p class="list3title1">Cities</p>
								<p class="list3title2">Btreasas lisemeyta siqades</p>
								<p class="list3title3">Kictaesaert asetyertya aset aplicibrdedas.</p>
								<a href="#" class="btn-link btn-link1">learn more<span></span></a>
							</div>
						</div>
					</div>
				</li>

				<li class="col-lg-6 col-md-4 col-sm-12 text-center">
					<div class="box4">
						<figure><img src="img/notfound.jpg" alt=""></figure>
						<div class="info1 maxheight" style="height: 116px;">
							<div class="box_inner">
								<p class="list3title1">Nature</p>
								<p class="list3title2">Migytafsas deuauyt asares</p>
								<p class="list3title3">Kictaesaert asetyertya aset aplicibrdedas.</p>
								<a href="#" class="btn-link btn-link1">learn more<span></span></a>
							</div>
						</div>
					</div>
				</li>

				<li class="col-lg-6 col-md-4 col-sm-12 text-center">
					<div class="box4">
						<figure><img src="img/notfound.jpg" alt=""></figure>
						<div class="info1 maxheight" style="height: 116px;">
							<div class="box_inner">
								<p class="list3title1">Cities</p>
								<p class="list3title2">Btreasas lisemeyta siqades</p>
								<p class="list3title3">Kictaesaert asetyertya aset aplicibrdedas.</p>
								<a href="#" class="btn-link btn-link1">learn more<span></span></a>
							</div>
						</div>
					</div>
				</li>

			</ul><!-- /.ul -->
		</div><!-- /.row -->

    
    </div><!-- /.container -->

</div>
<!-- .wrap -->
<?php require('footer.php');?>
</body>
</html>






