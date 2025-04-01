<?php
session_start();
?>

<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="common/css/reset.css">
  <link rel="stylesheet" href="common/css/common.css">
</head>

<body>


  <header>

    <!-- ドロワーメニュー -->
    <!-- global menu スマホ用nav-->
    <nav class="g_menu">
      <!-- menu open -->
      <input type="checkbox" id="menu_btn" class="menu_btn">
      <!-- icon -->
      <label class="menu_icon" for="menu_btn">
        <!-- border -->
        <span class="navicon"></span>
      </label>
      <ul class="menu">
        <!-- ！！！！！！！！！！！！！！！！！！ -->
        <!-- 自分のページのみ先頭の「../」消して下さい -->
        <li><a href="index.php">TOP</a></li>
        <li><a href="product.php">商品一覧</a></li>
        <li><a href="#">よくある質問</a></li>
        <li><a href="#">問い合わせ</a></li>
        <li><a href="#">当サイトのポリシー</a></li>
      </ul>
    </nav>


    <!-- !!!!!!!!!!!!!!!!!追加!!!!!!!!!!!!!!!!!!!!! -->
    <!-- global menu pc用nav-->
    <!-- <a href="#" class="pc_logo_image"><img src="../common/image/pc_logo.png" alt="ロゴ画像(TAIWAN)"></a> -->



    <div class="main_header">
      <img src="common/images/logo.svg" alt="">
      <div class="sub_header">
        <?php if(isset($_SESSION['user'])):?>

        <a href="logout-input.php"><img src="common/images/logout.svg" alt=""></a>
        <a href="cart.php"><img src="common/images/cart.svg" alt=""></a>

        <?php else: ?>
          <a href="login-input.php"><img src="common/images/login.svg" alt=""></a>
        <a href="cart.php"><img src="common/images/cart.svg" alt=""></a>
        
        <?php endif; ?>
      </div>
    </div>

    <div class="header_search">
      <div class="search_flex">

        <form action="">
          <input type="submit" class="search_btn">
          <input type="text">
        </form>
      </div>
    </div>


  </header>

</body>

</html>