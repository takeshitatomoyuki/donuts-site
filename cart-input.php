<?php require 'includes\header.php'; ?>
<?php require 'breadcrumb.php'; ?>
<?php require 'customer-name.php'; ?>
<head>
  <link rel="stylesheet" href="common/css/breadcrumb.css">
	<link rel="stylesheet" href="common/css/customer-name.css">
  <script src="common/js/breadcrumb.js"></script>
</head>
<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];

    if (!isset($_SESSION['product'])) {
        $_SESSION['product'] = [];
    }

    $count = 0;
    if (isset($_SESSION['product'][$id])) {
        $count = $_SESSION['product'][$id]['count'];
    }

    $_SESSION['product'][$id] = [
        'name' => $_POST['name'],
        'price' => $_POST['price'],
        'count' => $count + $_POST['count']
    ];

    // ✅ ここでリダイレクト
    header("Location: cart-input.php?added=1");
    exit;
}

// ここからはHTML出力
?>
<p>カートに商品を追加しました。</p>
<hr>
<?php require 'cart.php'; ?>
<a href="purchase-confirm.php">ご購入確認へ進む</a>
<a href="product.php">買い物を続ける</a>

<?php
 echo'<a href="purchase-confirm.php">ご購入確認へ進む</a>';
       echo' <a href="product.php">買い物を続ける</a>';
?>

<?php require 'includes\footer.php'; ?>