<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

$pdo = new PDO('mysql:host=localhost;dbname=donuts;charset=utf8', 'staff', 'password');
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
  echo '購入手続きが完了しました。ありがとうございます。';
} catch (Exception $e) {
  $pdo->rollBack(); // エラーがあれば元に戻す
  echo '購入手続き中にエラーが発生しました。申し訳ございません。';
  error_log('購入エラー: ' . $e->getMessage()); // エラーログを出力
}
?>
<a href="index.php">トップページへ戻る</a>
<?php require 'includes/footer.php'; ?>