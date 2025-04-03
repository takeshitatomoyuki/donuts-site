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
  <section class="index_images">
  <img class="index_main_img" src="common/images/sp_main.jpg" alt="メイン画像">
 
  <div class="index_sub_img">
    <div class="index_up_sub_img">
     <img class="index_item1" src="common/images/sp_sub1.jpg" alt="サブ画像１">
     <img class="index_item2" src="common/images/sp_sub2.jpg" alt="サブ画像２">
    </div>
     <img class="index_item3" src="common/images/sp_sub3.jpg" alt="サブ画像３">
  </div>
 
<!-- 私達の信念 -->

  <div class="index_philosophy_content">
    <h2>Philosophy</h2>
    <p class="index_belief">私たちの信念</p>
    <p class="index_create">"Creating Connections"</p>
    <p class="index_connect">ドーナッツでつながる</p>
  </div>

</section>

<!-- ランキング -->
<section class="index_ranking">
<h2>人気ランキング</h2>

<ol class="index_grid">
  <!-- 第１位 -->
<li class="index_linkbox1">
<!-- li要素にリンクをつける -->
<a href="#">
 <!-- ////////////////////////////////////////////// -->
  <div class="index_rank1">
   <img class="index_r1" src="common/images/sp_rank1.jpg" alt="１位">
   <img class="index_r1_img" src="common/images/sp_1donuts.jpg" alt="１位画像">
  </div>
  <p class="index_name">CCドーナツ 当店オリジナル（5個入り）</p>
  <div class="index_price">
   <p>税込  ￥1,500</p>
   <img class="index_heart" src="common/images/sp_heart.jpg" alt="ハート">
  </div>
<!-- li要素にリンクをつける -->
  </a>
<!-- /////////////////////////////////////////////// -->
  <form action="detail.php" method="post">
    <input type="hidden" name="id" value="1">
    <input type="submit" value="カートに入れる" 
    class="index_submit" id="1">
  </form>
</li>

<li class="index_linkbox2">
  <!-- 第２位 -->
<a href="#">
<div class="index_rank2">
  <img class="index_r2" src="common/images/sp_rank2.jpg" alt="２位">
  <img class="index_r2_img" src="common/images/sp_7donuts.jpg" alt="２位画像">
</div>
  <p class="index_name">フルーツドーナッツセット(12個入り)</p>
<div class="index_price">
  <p>税込  ￥3,500</p>
  <img class="index_heart" src="common/images/sp_heart.jpg" alt="ハート">
</div>
  </a>
  <form action="detail.php" method="post">
   <input type="hidden" name="id" value="7">
   <input type="submit" value="カートに入れる" 
   class="index_submit" id="7">
  </form>
</li>

<li class="index_linkbox3">
  <!-- 第３位 -->
<a href="#">
<div class="index_rank3">
  <img class="index_r3" src="common/images/sp_rank3.jpg" alt="３位">
  <img class="index_r3_img" src="common/images/sp_8donuts.jpg" alt="３位画像">
</div>
  <p class="index_name">フルーツドーナッツセット(14個入り)</p>
<div class="index_price">
  <p>税込  ￥4,000</p>
  <img class="index_heart" src="common/images/sp_heart.jpg" alt="ハート">
</div>
  </a>
  <form action="detail.php" method="post">
   <input type="hidden" name="id" value="8">
   <input type="submit" value="カートに入れる" 
   class="index_submit" id="8">
  </form>
</li>

<li class="index_linkbox4">
  <!-- 第４位 -->
<a href="#">
<div class="index_rank4">
  <img class="index_r4" src="common/images/sp_rank4.jpg" alt="４位">
  <img class="index_r4_img" src="common/images/sp_2donuts.jpg" alt="４位画像">
</div>
  <p class="index_name">チョコレートデライト(5個入り)</p>
<div class="index_price">
  <p>税込  ￥1,500</p>
  <img class="index_heart" src="common/images/sp_heart.jpg" alt="ハート">
</div>
  </a>
  <form action="detail.php" method="post">
   <input type="hidden" name="id" value="2">
   <input type="submit" value="カートに入れる" 
   class="index_submit" id="2">
  </form>
</li>

<li class="index_linkbox5">
  <!-- 第５位 -->
<a href="#">
<div class="index_rank5">
  <img class="index_r5" src="common/images/sp_rank5.jpg" alt="５位">
  <img class="index_r5_img" src="common/images/sp_9donuts.jpg" alt="５位画像">
</div>
  <p class="index_name">ベストセレクションボックス(4個入り)</p>
<div class="index_price">
  <p>税込  ￥1,200</p>
  <img class="index_heart" src="common/images/sp_heart.jpg" alt="ハート">
</div>
  </a>
  <form action="detail.php" method="post">
   <input type="hidden" name="id" value="9">
   <input type="submit" value="カートに入れる" 
   class="index_submit" id="9">
  </form>
</li>

<li class="index_linkbox6">
  <!-- 第６位 -->
<a href="#">
<div class="index_rank6">
  <img class="index_r6" src="common/images/sp_rank6.jpg" alt="６位">
  <img class="index_r6_img" src="common/images/sp_6donuts.jpg" alt="６位画像">
</div>
  <p class="index_name">ストロベリークラッシュ(5個入り)</p>
<div class="index_price">
  <p>税込  ￥1,800</p>
  <img class="index_heart" src="common/images/sp_heart.jpg" alt="ハート">
</div>
  </a>
  <form action="detail.php" method="post">
   <input type="hidden" name="id" value="6">
   <input type="submit" value="カートに入れる" 
   class="index_submit" id="6">
  </form>
</li>
</ol>

</section>

</main>
<?php require 'includes/footer.php';?>
</body>
</html>