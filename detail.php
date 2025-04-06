 <?php require 'includes/header.php'; ?>



<head>
  <link rel="stylesheet" href="common/css/breadcrumb.css">
  <script src="common/js/breadcrumb.js"></script>
</head>

<body> 

    <nav class="nav">
      <ol class="breadcrumb">
        <li><a href="index.php">TOP</a></li>
        <li id="category"><a href="product.php">商品一覧</a></li>
        <li id="product"><a href="product.php">商品名</a></li>
      </ol>
    </nav>
    <div class="detail_top">
      <?php
      if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }
      if (isset($_SESSION['customer'])) {
        echo '<p>ようこそ ', $_SESSION['customer']['name'], 'さん。</p>';
      } else{
      echo '<p class="customer_name">ようこそ ゲストさん。</p>';
      }
      ?>
  </div> 

  <main>
  <div class="detail_inner">
    <div class="detail_image_box">
      <img src="common/images/sp_1donuts.jpg" alt="１位画像" class="detail_image">
    </div>
    <div class="detail_commentary">
      <p class="detail_name">CCドーナツ 当店オリジナル（5個入り）</p>
      <p class="detail_text">当店のオリジナル商品、CCドーナツは、サクサクの食感が特徴のプレーンタイプのドーナツです。素材にこだわり、丁寧に揚げた生地は軽やかでサクッとした食感が楽しめます。一口食べれば、口の中に広がる甘くて香ばしい香りと、口どけの良い食感が感じられます。</p>
      <div class="detail_price_box">
       <p class="detail_price">税込  ￥1,500</p>
       <p class="detail_heart_box"><img src="common/images/sp_heart.jpg" alt="ハート" class="detail_heart"></p>
      </div>
      <div class="detail_count_box">
        <p><input type="text" class="detail_count">個</p>
        <p><input type="submit" value="カートに入れる" class="detail_submit"></p>
      </div>
    </div>
  </div>


  <!-- <?php
// $pdo=new PDO('mysql:host=localhost;dbname=donuts;charset=utf8', 
// 	'staff', 'password');
// $sql=$pdo->prepare('select * from product where id=?');
// $sql->execute([$_REQUEST['id']]);
// foreach ($sql as $row) {
// 	echo '<p><img alt="image" src="image/', $row['id'], '.jpg"></p>';
// 	echo '<form action="cart-input.php" method="post">';
// 	echo '<p>商品番号：', $row['id'], '</p>';
// 	echo '<p>商品名：', $row['name'], '</p>';
// 	echo '<p>価格：', $row['price'], '</p>';
// 	echo '<p>個数：<select name="count">';}
// 	for ($i=1; $i<=10; $i++) {
// 		echo '<option value="', $i, '">', $i, '</option>';
// 	}
// 	echo '</select></p>';
// 	echo '<input type="hidden" name="id" value="', $row['id'], '">';
// 	echo '<input type="hidden" name="name" value="', $row['name'], '">';
// 	echo '<input type="hidden" name="price" value="', $row['price'], '">';
// 	echo '<p><input type="submit" value="カートに追加"></p>';
// 	echo '</form>';
	
?> -->
  </main>

<?php require 'includes/footer.php'; ?>