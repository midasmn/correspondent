<?php
require_once("lib/lib.php");
require_once("lib/mysql-ini.php");
// データベースに接続
$db_conn = new mysqli($host, $user, $pass, $dbname)
or die("データベースとの接続に失敗しました");
$db_conn->set_charset('utf8');

$title = "地域(日本)動画：スマート特派員";	
$keywords = "YOUTUBE 動画 日本 人気 ランキング スマート特派員 Smart Correspondent";
$description = "地域(日本)で人気のYOUTUBE動画をスマート特派員が紹介します。";
//

$og_title = $title;
$og_image = "http://faceapglezon.info/tools/icon/img/tools_icon.png";
$og_url = "http://faceapglezon.info/tools/icon/index.php";
$og_site_name = $title;
$og_description = $description;

$h1_st = "地域(日本)動画";
$h1_st_s = "  ";
$culhtml = "http://faceapglezon.info/tools";
$crlhtmltitle = "スマート特派員";
$site_name = "Smart Correspondent";
$footer_sitename = "Smart Correspondent";

$sns_url = "http://".$_SERVER["HTTP_HOST"].htmlspecialchars($_SERVER["PHP_SELF"]);
//アクティブメニュー
$active_st[7] = 'class="active"';
?>
<?php require('header.php');?>
<body>
<?php require('menu.php');?>

<!-- ページのコンテンツすべてをwrapする（フッター以外） -->
<div id="wrap">
	<!-- パンくず -->
    <ol class="breadcrumb">
      <li><a href="<?php echo $base_url;?>"><span class="glyphicon glyphicon-home"></span></a></li>
      <li class="active"><?=$h1_st?></li>


      <div class="pull-right hidden-xs">
        <a>
          <i id="social" class="fa fa-facebook-square fa-2x social-fb">facebook</i>
        </a>
        <a class="social-icon" href="#" target="_blank" rel="fb_share" data-original-title="Follow us on Twitter">
          <i id="social" class="fa fa-twitter-square fa-2x social-tw">twitter</i>
        </a>
        <a class="social-icon" href="#" target="_blank" rel="fb_share" data-original-title="Follow us on Twitter">
          <i id="social" class="fa fa-google-plus-square fa-2x social-gp">Google+</i>
        </a>
      </div>



    </ol>
  <!-- .パンくず -->





 <!-- SNS -->
<ul class="social-original clearfix">
  <li class="facebook">
    <a href="http://www.facebook.com/share.php?u=http%3A%2F%2Fnanapi.jp%2F105383" onclick="ga('event.send', 'event', 'PcRecipe', 'SocialShare', 'facebook');window.open(this.href, 'FBwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;">
      <span class="social-btn"><span class="icon"></span>facebook</span></a></li><li class="googleplus"><a href="https://plus.google.com/share?url=http%3A%2F%2Fnanapi.jp%2F105383" onclick="ga('event.send', 'event', 'PcRecipe', 'SocialShare', 'g+');window.open(this.href, 'gpwindow', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;"><span class="social-btn"><span class="icon"></span>Google+</span></a></li><li class="twitter"><a href="http://twitter.com/share?count=horizontal&amp;amp;original_referer=http%3A%2F%2Fnanapi.jp%2F105383&amp;amp;text=%E8%B6%85%E3%82%AB%E3%83%B3%E3%82%BF%E3%83%B3%EF%BC%81Bootstrap%E3%81%A7%E3%82%BD%E3%83%BC%E3%82%B7%E3%83%A3%E3%83%AB%E3%83%9C%E3%82%BF%E3%83%B3%E3%82%92%E6%A8%AA%E3%81%AB%E3%82%AD%E3%83%AC%E3%82%A4%E3%81%AB%E4%B8%A6%E3%81%B9%E3%82%8B%E6%96%B9%E6%B3%95&amp;amp;url=http%3A%2F%2Fnanapi.jp%2F105383" onclick="ga('event.send', 'event', 'PcRecipe', 'SocialShare', 'twitter');window.open(this.href, 'tweetwindow', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;"><span class="social-btn"><span class="icon"></span>twitter</span></a></li><li class="hatebu"><a href="http://b.hatena.ne.jp/append?http%3A%2F%2Fnanapi.jp%2F105383" onclick="ga('event.send', 'event', 'PcRecipe', 'SocialShare', 'B!');window.open(this.href, 'hatebuwindow', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;"><span class="social-btn"><span class="icon"></span>ブックマーク</span></a></li></ul>
<!-- SNS -->



    <div class="container">
        <div class="page-header">
            <h1><?=$h1_st?></h1>
        </div>

        <div class="row" >
      		<div class="col-md-12" >

  

<style type="text/css" media="all">/*<![CDATA[ */
div.socialicons{float:left;display:block;margin-right: 10px;line-height: 1;}div.socialiconsv{line-height: 1;}div.socialicons p{margin-bottom: 0px !important;margin-top: 0px !important;padding-bottom: 0px !important;padding-top: 0px !important;}div.social4iv{background: none repeat scroll 0 0 #FFFFFF;border: 1px solid #aaa;border-radius: 3px 3px 3px 3px;box-shadow: 3px 3px 3px #DDDDDD;padding: 3px;position: fixed;text-align: center;top: 55px;width: 68px;display:none;}div.socialiconsv{padding-bottom: 5px;}
.socialicons {
display: inline-block !important;
}
.s4twitter {min-width:70px;max-width:90px;}
.s4fblike {min-width:70px;max-width:115px;}
.s4plusone {min-width:50px;max-width:80px;}
.s4custombtn-1 { min-width:80px;max-width:125px;}
.s4custombtn-2 { min-width:60px;max-width:115px;}
.simplemap img{max-width:none !important;padding:0 !important;margin:0 !important;}.staticmap,.staticmap img{max-width:100% !important;height:auto !important;}.simplemap .simplemap-content{display:none;} .map-link {display: inline-block;margin: 10px 0;color: #08ACD5;}
.boxed #wrapper, .container-inner { max-width: 1050px; }
.sidebar .widget { padding-left: 20px; padding-right: 20px; padding-top: 15px; }
.site-title a img { max-height: 100px; }
/* ]]>*/</style>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<script type="text/javascript" src="http://buzz-plus.com/wp-includes/js/jquery/jquery.js?ver=1.11.0"></script>
<script type="text/javascript" src="http://buzz-plus.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1"></script>
<script type="text/javascript" src="http://buzz-plus.com/wp-content/themes/buzz-plus/js/jquery.flexslider.min.js?ver=3.9.3"></script>
<script type="text/javascript">//<![CDATA[
document.documentElement.className = document.documentElement.className.replace("no-js","js");
jQuery(document).ready(function(){
jQuery.get('http://buzz-plus.com/wp-admin/admin-ajax.php', {
action: 'update_views_ajax',
token: '5627b11d8b',
id: 11762           }, function(response){
if ( console && console.log )
console.log(response);
});
});
//]]></script>




          </div>
        </div>

    </div><!-- /.container -->
</div><!-- .wrap -->
<?php require('footer.php');?>
</body>
</html>






