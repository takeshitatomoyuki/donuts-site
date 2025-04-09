<?php require 'includes\header.php'; ?>
<?php
unset($_SESSION['product'][$_REQUEST['id']]);
if (isset($_SESSION['customer'])) {
echo 'カートから商品を削除しました。';
}
require 'cart.php';
?>
<?php
 echo'<a href="purchase-confirm.php">ご購入確認へ進む</a>';
       echo' <a href="product.php">買い物を続ける</a>';
?>
<?php require 'includes\footer.php'; ?>