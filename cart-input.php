<?php require 'includes\header.php'; ?>
	echo 'ようこそ ', $_SESSION['customer']['name'], 'さん。';
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
<a href="purchase-confirm.php">ご購入確認へ進む</a>
<a href="product.php">買い物を続ける</a>
<a href="cart-show.php">カート一覧に戻る</a>
<?php require 'includes\footer.php'; ?>