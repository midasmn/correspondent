<?php
require_once("lib/lib.php");
require_once("lib/mysql-ini.php");
// データベースに接続
$db_conn = new mysqli($host, $user, $pass, $dbname)
or die("データベースとの接続に失敗しました");
$db_conn->set_charset('utf8');

$title = "スマート特派員:世界で一番新しい通信社";	
$keywords = "特派員,動画,地域,通信社,キュレーション";
$description = "世界の今がわかる：世界で一番新しい通信社:スマート特派員";
//

$og_title = $title;
$og_image = "http://correspondent.xyz/img/index.png";
$og_url = "http://correspondent.xyz/index.php";
$og_site_name = $title;
$og_description = $description;

$h1_st = $title;
$h1_st_s = "  ";
$culhtml = "http://correspondent.xyz/";
$crlhtmltitle = "スマート特派員";
$site_name = "Smart Correspondent";
$footer_sitename = "Smart Correspondent";

$sns_url = "http://".$_SERVER["HTTP_HOST"].htmlspecialchars($_SERVER["PHP_SELF"]);

//アクティブメニュー
$active_st[1] = 'class="active"';
?>
<?php require('header.php');?>
<body>
<?php require('menu.php');?>

<!-- ページのコンテンツすべてをwrapする（フッター以外） -->
<div id="wrap">

    <div class="container">
        <div class="page-header">
            <h1><?=$title?></h1>
        </div>

        <p class="lead">スマート特派員は、インターネット上の情報を特派員が収集する世界で一番新しい <b>通信社</b> です。</p>
        <p>グノシー、スマートニュースなどのキュレーションメディア、Youtube，Dailymotionなどの投稿動画サイトなどから情報を収集します。 </p>
    
    </div><!-- /.container -->

</div>
<!-- .wrap -->
<?php require('footer.php');?>
</body>
</html>






