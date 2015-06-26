<?php
$site_name = 'スマート特派員';
$menu_1 = '<i class="fa fa-info"></i>&nbsp;&nbsp;スマート特派員';
$menu_2 = '<i class="fa fa-video-camera"></i>&nbsp;&nbsp;動画部';   //ニュースの
$menu_3 = '<i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;ニュース部';   //タイムライン
$menu_4 = '<i class="fa fa-search"></i>&nbsp;&nbsp;検索部 ';    //まとめのまとめ
$menu_5 = '<i class="fa fa-thumbs-up"></i>&nbsp;&nbsp;SNS部';   //タイムライン
$menu_6 = '<i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Eコマース部';   //やふとぴ
$menu_7 = '<i class="fa fa-star"></i>&nbsp;&nbsp;エンタメ部';   //ただの人着
$menu_8 = '<i class="fa fa-paperclip"></i>&nbsp;&nbsp;キュレーション部';   //ただの人着

// $menu_7 = '<i class="fa fa-street-view"></i>&nbsp;&nbsp;地域部';   //地域動画
// $menu_8 = '<i class="fa fa-globe"></i>&nbsp;&nbsp;ワールド動画';   //世界人気

$menu_rank = '<i class="fa fa-calendar-o"></i>&nbsp;&nbsp;昨日のランキング';   //本、CD、アプリ、など
$rank_header = '<i class="fa fa-music"></i>&nbsp;&nbsp;ミュージック';
$rank_1 = '<i class="fa fa-trophy"></i>&nbsp;&nbsp;オリコンシングル';
$rank_2 = '<i class="fa fa-trophy"></i>&nbsp;&nbsp;オリコンアルバム';
$rank_3 = '<i class="fa fa-apple"></i>&nbsp;&nbsp;iTunesシングル';
$rank_4 = '<i class="fa fa-apple"></i>&nbsp;&nbsp;iTunesアルバム';
$rank_5 = '<i class="fa fa-leanpub"></i>&nbsp;&nbsp;本';
$rank_6 = '<i class="fa fa-trophy"></i>&nbsp;&nbsp;DVD';

// 
$menu_url_1 = $base_url;  //アバウト
$menu_url_2 = $base_url.'video.php';  //動画部
$menu_url_3 = $base_url.'curation.php';    //まとめのまとめ
$menu_url_4 = $base_url;   //タイムライン
$menu_url_5 = $base_url;  //やふとぴ
$menu_url_6 = $base_url;  //ただの人着
$menu_url_7 = $base_url . 'japanmap.php';   //地域動画
$menu_url_8 = $base_url . 'worldmap.php';   //世界人気

// $active_st[5] = 'class="active"';
?>
<div class="navmenu navmenu-default navmenu-fixed-left offcanvas-sm">
  <a class="navmenu-brand visible-md visible-lg" href="<?php echo $base_url;?>" style="font-size: 24px;font-family:'EB Garamond',serif;">&nbsp;&nbsp;<i class="logoL"></i>&nbsp;<?php echo $site_name;?></a>
  <!-- メニュー -->
  <ul class="nav navmenu-nav">
    <li <?php echo $active_st[2];?>><a class="h4"  href="<?php echo $menu_url_2;?>"><?php echo $menu_2;?></a></li>
    <li <?php echo $active_st[3];?>><a class="h4"  href="<?php echo $menu_url_3;?>"><?php echo $menu_3;?></a></li>
    <li <?php echo $active_st[4];?>><a class="h4"  href="<?php echo $menu_url_4;?>"><?php echo $menu_4;?></a></li>
    <li <?php echo $active_st[5];?>><a class="h4"  href="<?php echo $menu_url_5;?>"><?php echo $menu_5;?></a></li>
    <li <?php echo $active_st[6];?>><a class="h4"  href="<?php echo $menu_url_6;?>"><?php echo $menu_6;?></a></li>
    <li <?php echo $active_st[7];?>><a class="h4"  href="<?php echo $menu_url_7;?>"><?php echo $menu_7;?></a></li>
    <li <?php echo $active_st[8];?>><a class="h4"  href="<?php echo $menu_url_8;?>"><?php echo $menu_8;?></a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle h4" data-toggle="dropdown"><?php echo $menu_rank;?> <b class="caret"></b></a>
      <ul class="dropdown-menu navmenu-nav">
        <li class="dropdown-header"><?php echo $rank_header;?></li>
        <li <?php echo $active_st[9];?>><a class="h5" href="#"><?php echo $rank_1;?></a></li>
        <li <?php echo $active_st[10];?>><a class="h5" href="#"><?php echo $rank_2;?></a></li>
        <li <?php echo $active_st[11];?>><a class="h5" href="#"><?php echo $rank_3;?></a></li>
        <li <?php echo $active_st[12];?>><a class="h5" href="#"><?php echo $rank_4;?></a></li>
        <li class="divider"></li>
        <li <?php echo $active_st[13];?>><a class="h5" href="#"><?php echo $rank_5;?></a></li>
        <li <?php echo $active_st[14];?>><a class="h5" href="#"><?php echo $rank_6;?></a></li>
      </ul>
    </li>
    <li <?php echo $active_st[1];?>><a class="h4" href="./"><?php echo $menu_1;?></a></li>
  </ul>
  <!-- .メニュー -->
</div>
<!-- <div class="navbar navbar-default navbar-fixed-top hidden-md hidden-lg"> -->
<div class="navbar navbar-default navbar-fixed-top hidden-md hidden-lg">
  <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <!-- <a class="navbar-brand" style="font-size:20px;font-family:'EB Garamond',serif;" href="<?php echo $base_url;?>"><i class="fa fa-globe"></i>&nbsp;<?php echo $site_name;?></a> -->
  <a class="navbar-brand" style="font-size:20px;font-family:'EB Garamond',serif;" href="<?php echo $base_url;?>"><i class="logoM"></i>&nbsp;<?php echo $site_name;?></a>
</div>


