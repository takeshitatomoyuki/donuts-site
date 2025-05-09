

<!-- //////header//////// -->
<head>
  <link rel="stylesheet" href="common/css/breadcrumb.css">
	<link rel="stylesheet" href="common/css/customer-name.css">
    <link rel="stylesheet" href="common/css/cart-input.css">
  <script src="common/js/breadcrumb.js"></script>
</head>
</head>
<?php require 'includes/header.php';?> 
<?php
$base_path = './';

// 1. DB接続
$db = new PDO('mysql:host=localhost;dbname=donuts;charset=utf8', 'staff', 'password');

// 2. ID取得
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// 3. 商品名をDBから取得
$product_name = '商品詳細'; // デフォルト
if ($id > 0) {
    $stmt = $db->prepare('SELECT name FROM product WHERE id = ?');
    $stmt->execute([$id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row) {
        $product_name = $row['name'];
    }
}

// 4. パンくず配列にセット
$breadcrumb_items = [
    ['label' => 'TOP', 'url' => $base_path . 'index.php'],
    ['label' => '商品一覧', 'url' => $base_path . 'product.php']
    
];

include 'breadcrumb.php';
?>

<!--/////////// 商品一覧/////////////// -->
<main>
<section class="section_top">
  <h2 class="product_h2">商品一覧</h2>
  <ul class="grid_syouhin">
<!-- CCドーナツ当店オリジナル -->
  <li class="item01">
  <a href="detail.php?id=1"> 
  <img src="common/images/sp_1donuts.jpg" alt="CCドーナツ当店オリジナルの写真" class="photo_donuts">
  <img src="common/images/pc_1donuts.jpg"
  alt="CCドーナツ当店オリジナルの写真PC" class="photo_donuts_pc">
<p class="syoihin">
CCドーナツ 当店オリジナル（5個入り）</p>
<div class="flex_price">
<p class="price">税込 ￥1,500</p>
<img src="common/images/sp_heart.jpg" alt="お気に入りロゴ" class="heart_logo">
</div>
<!-- カートに入れるボタン -->

  <input type="hidden" name="id" value="1">
  <input type="submit" value="カートに入れる" class="submit" id="1"> 
</a>
</li>

<!-- チョコレートデイライト-->
<li class="item02">
  <a href="detail.php?id=2">
  <img src="common/images/sp_2donuts.jpg" alt="チョコレートデイライトの写真" class="photo_donuts">
  <img src="common/images/pc_2donuts.jpg"
  alt="チョコレートデイライトの写真PC" class="photo_donuts_pc">
<p class="syoihin ">チョコレートデイライト（5個入り）</p>
<div class="flex_price">
<p class="price">税込 ￥1,600</p>
<img src="common/images/sp_heart.jpg" alt="お気に入りロゴ" class="heart_logo">
</div>
<!-- カートに入れるボタン -->

<input type="hidden" name="id" value="2">
  <input type="submit" value="カートに入れる" class="submit" id="2"> 
</a>
</li>

<!-- キャラメルクリーム-->
<li class="item03">
  <a href="detail.php?id=3">
  <img src="common/images/sp_3donuts.jpg" alt="キャラメルクリームの写真" class="photo_donuts">
  <img src="common/images/pc_3donuts.jpg"
  alt="キャラメルクリームの写真PC" class="photo_donuts_pc">
<p class="syoihin">キャラメルクリーム（5個入り）</p>
<div class="flex_price">
<p class="price">税込 ￥1,600</p>
<img src="common/images/sp_heart.jpg" alt="お気に入りロゴ" class="heart_logo ">
</div>
<!-- カートに入れるボタン -->

<input type="hidden" name="id" value="3">
  <input type="submit" value="カートに入れる" class="submit " id="3"> 
</a>
</li>

<!-- プレーンクラシック-->
<li class="item04">
  <a href="detail.php?id=4">
  <img src="common/images/sp_4donuts.jpg" alt="プレーンクラシックの写真" class="photo_donuts ">
  <img src="common/images/pc_4donuts.jpg"
  alt="プレーンクラシックの写真PC" class="photo_donuts_pc1">
<p class="syoihin ">プレーンクラシック（5個入り）</p>
<div class="flex_price">
<p class="price">税込 ￥1,500</p>
<img src="common/images/sp_heart.jpg" alt="お気に入りロゴ" class="heart_logo">
</div>
<!-- カートに入れるボタン -->

<input type="hidden" name="id" value="4">
  <input type="submit" value="カートに入れる" class="submit" id="4"> 
</a>
</li>

<!-- サマーシトラス-->
<li class="item05">
  <a href="detail.php?id=5">
  <img src="common/images/sp_5donuts.jpg" alt="サマーシトラスの写真" class="photo_donuts">
  <img src="common/images/pc_5donuts.jpg"
  alt="サマーシトラスの写真PC" class="photo_donuts_pc1">
<p class="syoihin ">【新作】サマーシトラス（5個入り）</p>
<div class="flex_price">
<p class="price">税込 ￥1,600 </p>
<img src="common/images/sp_heart.jpg" alt="お気に入りロゴ" class="heart_logo">
</div>
<!-- カートに入れるボタン -->

<input type="hidden" name="id" value="5">
  <input type="submit" value="カートに入れる" class="submit" id="5"> 
</a>
</li>


<!-- ストロベリークラッシュ-->
<li class="item06">
  <a href="detail.php?id=6">
  <img src="common/images/sp_6donuts.jpg" alt="ストロベリークラッシュの写真" class="photo_donuts">
  <img src="common/images/pc_6donuts.jpg"
  alt="ストロベリークラッシュの写真PC" class="photo_donuts_pc1">
<p class="syoihin">ストロベリークラッシュ（5個入り）</p>
<div class="flex_price">
<p class="price">税込 ￥1,800 </p>
<img src="common/images/sp_heart.jpg" alt="お気に入りロゴ" class="heart_logo">
</div>
<!-- カートに入れるボタン -->

<input type="hidden" name="id" value="6">
  <input type="submit" value="カートに入れる" class="submit" id="6" > 
</a>
</li>
</ul>
</section>


<!-- //////////////バラエティーセット///////////////// -->
<section class="section_bottom">
<h2 class="h2_2">バラエティーセット</h2>
<ul class="grid_syouhin1">

<!-- フルーツドーナツ12個-->
<li class="item01">
  <a href="detail.php?id=7">
  <img src="common/images/sp_7donuts.jpg" alt="フルーツドーナツ12個の写真" class="photo_donuts">
  <img src="common/images/pc_7donuts.jpg"
  alt="フルーツドーナツ12個の写真PC" class="photo_donuts_pc">
<p class="syoihin">フルーツドーナツ（12個入り）</p>
<div class="flex_price ">
<p class="price">税込 ￥3,500 </p>
<img src="common/images/sp_heart.jpg" alt="お気に入りロゴ" class="heart_logo ">
</div>
<!-- カートに入れるボタン -->

<input type="hidden" name="id" value="7">
  <input type="submit" value="カートに入れる" class="submit " id="7"> 
</a>
</li>

<!-- フルーツドーナツ14個-->
<li class="item02">
  <a href="detail.php?id=8">
  <img src="common/images/sp_8donuts.jpg" alt="フルーツドーナツの14個写真" class="photo_donuts ">
  <img src="common/images/pc_8donuts.jpg"
  alt="フルーツドーナツの14個の写真PC" class="photo_donuts_pc">
<p class="syoihin">フルーツドーナツ（14個入り）</p>
<div class="flex_price">
<p class="price">税込 ￥4,000 </p>
<img src="common/images/sp_heart.jpg" alt="お気に入りロゴ" class="heart_logo">
</div>
<!-- カートに入れるボタン -->

<input type="hidden" name="id" value="8">
  <input type="submit" value="カートに入れる" class="submit " id="8"> 
</a>
</li>

<!-- ベストセレクション-->
<li class="item03">
  <a href="detail.php?id=9">
  <img src="common/images/sp_9donuts.jpg" alt="ベストセレクション写真" class="photo_donuts">
  <img src="common/images/pc_9donuts.jpg"
  alt="ベストセレクションの写真PC" class="photo_donuts_pc">
<p class="syoihin ">ベストセレクション（4個入り）</p>
<div class="flex_price ">
<p class="price">税込 ￥1,200 </p>
<img src="common/images/sp_heart.jpg" alt="お気に入りロゴ" class="heart_logo">
</div>
<!-- カートに入れるボタン -->

<input type="hidden" name="id" value="9">
  <input type="submit" value="カートに入れる" class="submit " id="9"> 
</a>
</li>

<!-- チョコクラッシュボックス-->
<li class="item04">
  <a href="detail.php?id=10">
  <img src="common/images/sp_10donuts.jpg" alt="チョコクラッシュボックス写真" class="photo_donuts">
  <img src="common/images/pc_10donuts.jpg"
  alt="チョコクラッシュボックスの写真PC" class="photo_donuts_pc1">
<p class="syoihin">チョコクラッシュボックス（7個入り）</p>
<div class="flex_price">
<p class="price">税込 ￥2,400 </p></a>
<img src="common/images/sp_heart.jpg" alt="お気に入りロゴ" class="heart_logo">
</div>
<!-- カートに入れるボタン -->

<input type="hidden" name="id" value="10">
  <input type="submit" value="カートに入れる" class="submit "id="10"> 
</a>
</li>

<!-- クリームボックス4個-->
<li class="item05">
  <a href="detail.php?id=11">
  <img src="common/images/sp_11donuts.jpg" alt="クリームボックス4個写真" class="photo_donuts">
  <img src="common/images/pc_11donuts.jpg"
  alt="クリームボックス4個の写真PC" class="photo_donuts_pc1">
<p class="syoihin">クリームボックス（4個入り）<br></p>
<div class="flex_price">
<p class="price">税込 ￥1,400 </p>
<img src="common/images/sp_heart.jpg" alt="お気に入りロゴ" class="heart_logo">
</div>
<!-- カートに入れるボタン -->

<input type="hidden" name="id" value="11">
  <input type="submit" value="カートに入れる" class="submit " id="11"> 
</a>
</li>

<!-- クリームボックス9個-->
<li class="item06">
  <a href="detail.php?id=12">
  <img src="common/images/sp_12donuts.jpg" alt="クリームボックス9個写真" class="photo_donuts">
  <img src="common/images/pc_12donuts.jpg"
  alt="クリームボックス9個の写真PC" class="photo_donuts_pc1">
<p class="syoihin">クリームボックス（9個入り）<br></p>
<div class="flex_price">
<p class="price">税込 ￥2,800 </p>
<img src="common/images/sp_heart.jpg" alt="お気に入りロゴ" class="heart_logo ">
</div>
<!-- カートに入れるボタン -->

<input type="hidden" name="id" value="12">
  <input type="submit" value="カートに入れる" class="submit" id="12"> 
</a>
</li>

</ul>
</section>

</main>
<?php require 'includes/footer.php'; ?>