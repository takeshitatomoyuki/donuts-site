<?php require 'includes/header.php'; ?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ECサイトパンくずリスト</title>
  <link rel="stylesheet" href="common/css/breadcrumb.css">
  <script src="common/js/breadcrumb.js"></script>
</head>

<body> 

  <nav>
    <ol class="breadcrumb">
      <li><a href="index.php">TOP</a></li>
      <li id="category"><a href="product.php">商品一覧</a></li>
      <li id="product"><a href="product.php">商品名</a></li>
    </ol>
  </nav>
  <?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
if (isset($_SESSION['customer'])) {
    echo 'ようこそ ', $_SESSION['customer']['name'], 'さん。';
} else{
  echo 'ようこそ ゲストさん。';
}
?>
  <main>
    
  </main>

  
</body>

</html>
<?php require 'includes/footer.php'; ?>