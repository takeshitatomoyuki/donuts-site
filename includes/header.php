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
  <?php
// .phpの前の部分を取得
 $page=pathinfo($_SERVER['PHP_SELF']);

//  各ページのCSSを読み込ませる
echo '<link rel="stylesheet" href="common/css/';
echo $page['filename'],'.css';
echo '">';

// サイト名を変数に代入
$title='c.c.donuts';

// ページごとにタイトルを変更させる
switch($page["filename"]){
  case 'product' :
    $title= '商品一覧ページ&#65372;'.$title;
  break;
  case 'detail' :
    $title= '商品詳細ページ&#65372;'.$title;
  break;
  case 'login-input' :
    $title= 'ログイン-入力ページ&#65372;'.$title;
  break;
  case 'login-complete' :
    $title= 'ログイン-完了ページ&#65372;'.$title;
  break;
  case 'logout-input' :
    $title= 'ログアウト-入力ページ&#65372;'.$title;
  break;
  case 'logout-complete' :
    $title= 'ログアウト-完了ページ&#65372;'.$title;
  break;
  case 'customer-input' :
    $title= '会員登録-入力ページ&#65372;'.$title;
  break;
  case 'customer-confirm' :
    $title= '会員登録-入力確認ページ&#65372;'.$title;
  break;
  case 'customer-complete' :
    $title= '会員登録-完了ページ&#65372;'.$title;
  break;
  case 'cart' :
    $title= 'カート-商品一覧ページ&#65372;'.$title;
  break;
  case 'cart-show' :
    $title= 'カート-商品一覧呼び出しページ&#65372;'.$title;
  break;
  case 'cart-input' :
    $title= 'カート-追加ページ&#65372;'.$title;
  break;
  case 'cart-delete' :
    $title= 'カート-削除ページ&#65372;'.$title;
  break;
  case 'card-input' :
    $title= 'クレジットカード情報-入力ページ&#65372;'.$title;
  break;
  case 'card-confirm' :
    $title= 'クレジットカード情報-入力確認ページ&#65372;'.$title;
  break;
  case 'card-complete' :
    $title= 'クレジットカード情報-完了ページ&#65372;'.$title;
  break;
  case 'purchase-confirm' :
    $title= '購入-確認ページ&#65372;'.$title;
  break;
  case 'purchase-complete' :
    $title= '購入-完了ページ&#65372;'.$title;
  break;
  default:
  $title;
  break;
}

echo '<title>';
echo $title;
echo '</title>';

?>
  
</head>



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
      
        <!-- ！！！！！！！！！！！！！！！！！！ -->
        <!-- 自分のページのみ先頭の「../」消して下さい -->
    
      <ul class="menu">
               <a href="#" ><img src="common/images/logo.svg" alt=""class="drawer_img"></a>
        <li class="drawer_textlink"><a href="index.php">TOP</a></li>
        <li class="drawer_textlink"><a href="product.php">商品一覧</a></li>
        <li class="drawer_textlink"><a href="#">よくある質問</a></li>
        <li class="drawer_textlink"><a href="#">問い合わせ</a></li>
        <li class="drawer_textlink"><a href="#">当サイトのポリシー</a></li>
      </ul>
    </nav>


    <!-- !!!!!!!!!!!!!!!!!追加!!!!!!!!!!!!!!!!!!!!! -->
    <!-- global menu pc用nav-->
    <!-- <a href="#" class="pc_logo_image"><img src="../common/image/pc_logo.png" alt="ロゴ画像(TAIWAN)"></a> -->



    <div class="main_header">
      <h1 class="header_main_logo"><img src="common/images/logo.svg" alt="" class="header_logo_img"></h1>
      <div class="header_sub_header">
        <?php if(isset($_SESSION['user'])):?>

        <a href="logout-input.php"><img src="common/images/logout.svg" alt=""></a>
        <a href="cart-show.php"><img src="common/images/cart.svg" alt=""></a>

        <?php else: ?>
          <a href="login-input.php"><img src="common/images/login.svg" alt=""></a>
        <a href="cart.php"><img src="common/images/cart.svg" alt=""></a>
        
        <?php endif; ?>
      </div>
    </div>

    <div class="header_search">
      <div class="header_search_flex">

        <form action="" class="header_form">
          <input type="submit" class="header_search_btn">
          <input type="text" id="header_input_text">
        </form>
      </div>
    </div>


  </header>

</body>

</html>