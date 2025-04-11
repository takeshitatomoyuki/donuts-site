<!DOCTYPE html>
<html lang="ja" class="scroll">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>donuts-site</title>
  <link rel="stylesheet" href="common/css/reset.css">
  <link rel="stylesheet" href="common/css/common.css">
  <link rel="stylesheet" href="common/css/customer.css">
  <link rel="stylesheet" href="common/css/purchase-complete.css">
</head>
<body>


  
<?php if (session_status() == PHP_SESSION_NONE) {
  session_start();
}?>
<?php
$name=$mail=$password='';
 if(isset($_SESSION['customer'])) {
  $name=$_SESSION['customer']['name'];
  $address=$_SESSION['customer']['mail'];
  $password=$_SESSION['customer']['password'];
 } 
 ?>
  
<main>
 <h1 class="customer_logo_box"><a href="index.php"><img src="common/images/logo.svg" alt="" class="customer_logo"></a></h1>
 <section class="purchase_sec">
   
   <h2 class="purchase_title">ご購入完了</h2>
   <?php
   
   if (session_status() == PHP_SESSION_NONE) {
    session_start();
   }
   
   //$pdo = new PDO('mysql:host=localhost;dbname=donuts;charset=utf8', 'staff', 'password');
   $pdo = new PDO('mysql:host=localhost;dbname=ss896700_donuts;charset=utf8', 'ss896700_cca', 'ccadonuts');


   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
   try {
    $pdo->beginTransaction(); // トランザクション開始
    // 購入情報を purchase テーブルに追加
    $sql = $pdo->prepare('INSERT INTO purchase (customer_id) VALUES (?)');
    $sql->execute([$_SESSION['customer']['id']]);
    $purchase_id = $pdo->lastInsertId();
    // 購入商品の詳細を purchase_detail に追加
    foreach ($_SESSION['product'] as $product_id => $product) {
        $sql = $pdo->prepare('INSERT INTO purchase_detail (purchase_id, product_id, count) VALUES (?, ?, ?)');
        $sql->execute([$purchase_id, $product_id, $product['count']]);
    }
    $pdo->commit(); // すべて成功したら確定
    unset($_SESSION['product']);
    echo '<p class="purchase_text">';
    echo '購入手続きが完了しました。';
    echo '<br>';
    echo '今後ともご愛顧の程、宜しくお願いいたします。';
    echo '</p>';
   } catch (Exception $e) {
    $pdo->rollBack(); // エラーがあれば元に戻す
    echo '<p class="purchase_text">';
    echo '購入手続き中にエラーが発生しました。申し訳ございません。';
    error_log('購入エラー: ' . $e->getMessage()); // エラーログを出力
    echo '</p>';
   }  
   ?>
   
   
   <div class="purchase_linkblock">
    <a href="index.php" class="purchase_link">トップページへ戻る</a>
  </div>
 </section>

</main>
<?php require 'includes/footer.php'; ?>