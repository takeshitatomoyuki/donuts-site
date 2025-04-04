<?php require 'includes\header.php'; ?>
<?php
unset($_SESSION['product'][$_REQUEST['id']]);
if (isset($_SESSION['customer'])) {
echo 'カートから商品を削除しました。';
echo '<hr>';}
require 'cart.php';
?>
<a href="purchase-confirm.php">ご購入確認へ進む</a>
<a href="product.php">買い物を続ける</a>
<a href="cart-show.php">カート一覧に戻る</a>
<?php require 'includes\footer.php'; ?>