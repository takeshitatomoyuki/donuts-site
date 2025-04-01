<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewp"ort" content="width=device-width, initial-scale=1.0">
  <title>donuts-site</title>
  <link rel="stylesheet" href="common/css/reset.css">
  <link rel="stylesheet" href="common/css/index.css">
  <link rel="stylesheet" href="common/css/common.css">
</head>
<?php require 'includes/header.php';?>
<body>
<main>
<!-- 画像 -->
  <section class="images">
  <img class="main_img" src="common/images/sp_main.jpg" alt="メイン画像">
 
  <div class="sub_img">
    <img class="item1" src="common/images/sp_sub1.jpg" alt="サブ画像１">
    <img class="item2" src="common/images/sp_sub2.jpg" alt="サブ画像２">
    <img class="item3" src="common/images/sp_sub3.jpg" alt="サブ画像３">
  </div>
 
<!-- 私達の信念 -->

  <div class="philosophy_content">
    <h2>Philosophy</h2>
    <p class="belief">私たちの信念</p>
    <p class="create">"Creating Connections"</p>
    <p class="connect">ドーナッツでつながる</p>
  </div>
 <!-- <picture> -->
   <!-- ブラウザ幅1023～768pxまでsampleの画像が表示 -->
<!-- <source srcset="common/images/pc_backgroud.jpg" 
media="(min-width: 768px)" type="image/png"class="back_pc"> -->
 <!-- ブラウザ幅767px～から最小幅までsample2の画像が表示 -->
 <!-- <img src="common/images/sp_backgroud.jpg" alt="背景画像" 
 class="back_sp">
</picture> -->
</section>

<!-- ランキング -->
<section class="ranking">
<h2>人気ランキング</h2>

<ol>
  <!-- 第１位 -->
<li class="linkbox1">
<!-- li要素にリンクをつける -->
<a href="#">
 <!-- ////////////////////////////////////////////// -->
  <img src="common/images/sp_rank1.jpg" alt="１位">
  <img src="common/images/sp_1donuts.jpg" alt="１位画像">
  <p>CCドーナツ 当店オリジナル（5個入り）</p>
  <p>税込  ￥1,500</p>
<!-- li要素にリンクをつける -->
  </a>
<!-- /////////////////////////////////////////////// -->
  <img src="common/images/sp_heart.jpg" alt="ハート">
  <form action="" method="">
    <input type="submit" value="カートに入れる">
  </form>
</li>

<li class="linkbox2">
  <!-- 第２位 -->
<a href="#">
  <img src="common/images/sp_rank2.jpg" alt="２位">
  <img src="common/images/sp_7donuts.jpg" alt="２位画像">
  <p>フルーツドーナッツセット(12個入り)</p>
  <p>税込  ￥3,500</p>
  </a>
  <img src="common/images/sp_heart.jpg" alt="ハート">
  <form action="" method="">
    <input type="submit" value="カートに入れる">
  </form>
</li>

<li class="linkbox3">
  <!-- 第３位 -->
<a href="#">
  <img src="common/images/sp_rank3.jpg" alt="３位">
  <img src="common/images/sp_8donuts.jpg" alt="３位画像">
  <p>フルーツドーナッツセット(14個入り)</p>
  <p>税込  ￥4,000</p>
  </a>
  <img src="common/images/sp_heart.jpg" alt="ハート">
  <form action="" method="">
    <input type="submit" value="カートに入れる">
  </form>
</li>

<li class="linkbox4">
  <!-- 第４位 -->
<a href="#">
  <img src="common/images/sp_rank4.jpg" alt="４位">
  <img src="common/images/sp_2donuts.jpg" alt="４位画像">
  <p>チョコレートデライト(5個入り)</p>
  <p>税込  ￥1,500</p>
  </a>
  <img src="common/images/sp_heart.jpg" alt="ハート">
  <form action="" method="">
    <input type="submit" value="カートに入れる">
  </form>
</li>

<li class="linkbox5">
  <!-- 第５位 -->
<a href="#">
  <img src="common/images/sp_rank5.jpg" alt="５位">
  <img src="common/images/sp_9donuts.jpg" alt="５位画像">
  <p>ベストセレクションボックス(4個入り)</p>
  <p>税込  ￥1,200</p>
  </a>
  <img src="common/images/sp_heart.jpg" alt="ハート">
  <form action="" method="">
    <input type="submit" value="カートに入れる">
  </form>
</li>

<li class="linkbox6">
  <!-- 第６位 -->
<a href="#">
  <img src="common/images/sp_rank6.jpg" alt="６位">
  <img src="common/images/sp_6donuts.jpg" alt="６位画像">
  <p>ストロベリークラッシュ(5個入り)</p>
  <p>税込  ￥1,800</p>
  </a>
  <img src="common/images/sp_heart.jpg" alt="ハート">
  <form action="" method="">
    <input type="submit" value="カートに入れる">
  </form>
</li>
</ol>

</section>

</main>
</body>
</html>