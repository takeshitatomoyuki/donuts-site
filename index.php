<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewp"ort" content="width=device-width, initial-scale=1.0">
  <title>donuts-site</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

<!-- 画像 -->
  <section class="images">
  <img src="common/images/sp_main.jpg" alt="メイン画像">
 
  <div class="sub_images">
    <img src="common/images/sp_sub1.jpg" alt="サブ画像１">
    <img src="common/images/sp_sub2.jpg" alt="サブ画像２">
    <img src="common/images/sp_sub3.jpg" alt="サブ画像３">
  </div>
  </section>

<!-- 私達の信念 -->
 <section class="philosophy_box">
  <div class="philosophy_content">
    <h1>Philosophy</h1>
    <p>私たちの信念</p>
    <p>"Creating Connections"</p>
    <p>ドーナッツでつながる</p>
  </div>
<picture>
   <!-- ブラウザ幅1023～768pxまでsampleの画像が表示 -->
<source srcset="common/images/pc_backgroud.jpg" 
media="(min-width: 768px)" type="image/png"class="back_pc">
 <!-- ブラウザ幅767px～から最小幅までsample2の画像が表示 -->
 <img src="common/images/sp_backgroud.jpg" alt="背景画像" 
 class="back_sp">
</picture>
</section>

<!-- ランキング -->
<section class="ranking">
<h2>人気ランキング</h2>

<!-- 第１位 -->
<!-- div要素全体にリンクをつける -->
<a href="#">
 <!-- ////////////////////////////////////////////// -->
<div class="linkbox1">
  <img src="common/images/sp_rank1.jpg" alt="１位">
  <img src="common/images/sp_1donuts.jpg" alt="１位画像">
  <p>CCドーナッツ 当店オリジナル(５個入り)</p>
  <p>税込　￥１,５００<span class="heart">　　　
    <img src="common/images/sp_heart.jpg" alt="ハート"></span></p>
  <form action="" method="">
    <p><input type="submit" value="カートに入れる"></p>
  </form>
</div>
<!-- div要素全体にリンクをつける -->
</a>
<!-- /////////////////////////////////////////////// -->

<!-- 第２位 -->
<a href="#">

<div class="linkbox2">
  <img src="common/images/sp_rank2.jpg" alt="２位">
  <img src="common/images/sp_7donuts.jpg" alt="２位画像">
  <p>フルーツドーナッツセット(１２個入り)</p>
  <p>税込　￥３,５００<span class="heart">　　　
  <img src="common/images/sp_heart.jpg" alt="ハート"></span></p>
  <form action="" method="">
    <p><input type="submit" value="カートに入れる"></p>
  </form>
</div>

</a>

<!-- 第３位 -->
<a href="#">
 
<div class="linkbox3">
  <img src="common/images/sp_rank3.jpg" alt="３位">
  <img src="common/images/sp_8donuts.jpg" alt="３位画像">
  <p>フルーツドーナッツセット(１４個入り)</p>
  <p>税込　￥４,０００<span class="heart">　　　
  <img src="common/images/sp_heart.jpg" alt="ハート"></span></p>
  <form action="" method="">
    <p><input type="submit" value="カートに入れる"></p>
  </form>
</div>

</a>

<!-- 第４位 -->
<a href="#">
 
<div class="linkbox4">
  <img src="common/images/sp_rank4.jpg" alt="４位">
  <img src="common/images/sp_2donuts.jpg" alt="４位画像">
  <p>チョコレートデライト(５個入り)</p>
  <p>税込　￥１,６００<span class="heart">　　　
  <img src="common/images/sp_heart.jpg" alt="ハート"></span></p>
  <form action="" method="">
    <p><input type="submit" value="カートに入れる"></p>
  </form>
</div>

</a>

<!-- 第５位 -->
<a href="#">

<div class="linkbox5">
  <img src="common/images/sp_rank5.jpg" alt="５位">
  <img src="common/images/sp_9donuts.jpg" alt="５位画像">
  <p>ベストセレクションボックス(４個入り)</p>
  <p>税込　￥１,２００<span class="heart">　　　
  <img src="common/images/sp_heart.jpg" alt="ハート"></span></p>
  <form action="" method="">
    <p><input type="submit" value="カートに入れる"></p>
  </form>
</div>

</a>

<!-- 第６位 -->
<a href="#">
 
<div class="linkbox6">
  <img src="common/images/sp_rank6.jpg" alt="６位">
  <img src="common/images/sp_6donuts.jpg" alt="６位画像">
  <p>ストロベリークラッシュ(５個入り)</p>
  <p>税込　￥１,８００<span class="heart">　　　
  <img src="common/images/sp_heart.jpg" alt="ハート"></span></p>
  <form action="" method="">
    <p><input type="submit" value="カートに入れる"></p>
  </form>
</div>

</a>
</section>

</body>
</html>