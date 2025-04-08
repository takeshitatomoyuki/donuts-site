<?php require 'includes\header.php'; ?>
<?php require 'breadcrumb.php'; ?>
<?php require 'customer-name.php'; ?>
<head>
  <link rel="stylesheet" href="common/css/breadcrumb.css">
	<link rel="stylesheet" href="common/css/customer-name.css">
  <script src="common/js/breadcrumb.js"></script>
</head>

<?php
$id=$_REQUEST['id'];
if (!isset($_SESSION['product'])) {
	$_SESSION['product']=[];
}
$count=0;
if (isset($_SESSION['product'][$id])) {
	$count=$_SESSION['product'][$id]['count'];
}
$_SESSION['product'][$id]=[
	'name'=>$_REQUEST['name'], 
	'price'=>$_REQUEST['price'], 
	'count'=>$count+$_REQUEST['count']
];
echo '<p>カートに商品を追加しました。</p>';
echo '<hr>';
require 'cart.php';
?>
<?php
 echo'<a href="purchase-confirm.php">ご購入確認へ進む</a>';
       echo' <a href="product.php">買い物を続ける</a>';
?>

<?php require 'includes\footer.php'; ?>