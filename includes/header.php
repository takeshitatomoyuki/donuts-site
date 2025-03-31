<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../common/css/reset.css">
  <link rel="stylesheet" href="../common/css/common.css">
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
        <li><a href="../index.html">TOP</a></li>
        <li><a href="../taipei/index.html">商品一覧</a></li>
        <li><a href="../taichung/index.html">よくある質問</a></li>
        <li><a href="tainan/index.html">問い合わせ</a></li>
        <li><a href="">当サイトのポリシー</a></li>
      </ul>
    </nav>


    <!-- !!!!!!!!!!!!!!!!!追加!!!!!!!!!!!!!!!!!!!!! -->
    <!-- global menu pc用nav-->
    <!-- <a href="#" class="pc_logo_image"><img src="../common/image/pc_logo.png" alt="ロゴ画像(TAIWAN)"></a> -->



    <div class="main_header">
      <img src="../common/images/logo.svg" alt="">
      <div class="sub_header">
        <a href=""><img src="../common/images/login.svg" alt=""></a>
        <a href=""><img src="../common/images/cart.svg" alt=""></a>
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