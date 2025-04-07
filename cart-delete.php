<?php require 'includes\header.php'; ?>
<?php
unset($_SESSION['product'][$_REQUEST['id']]);
if (isset($_SESSION['customer'])) {
echo 'カートから商品を削除しました。';
echo '<hr>';}
require 'cart.php';
?>

<?php require 'includes\footer.php'; ?>