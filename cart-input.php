<?php require 'includes\header.php'; ?>
<?php require 'cart.php';?>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=donuts;charset=utf8', 
	'staff', 'password');
$sql=$pdo->prepare('select * from product where id=?');
$sql->execute([$_REQUEST['id']]);
foreach ($sql as $row) {
	echo '<p><img alt="image" src="image/', $row['id'], '.jpg"></p>';
	echo '<form action="cart-input.php" method="post">';
	echo '<p>商品番号：', $row['id'], '</p>';
	echo '<p>商品名：', $row['name'], '</p>';
	echo '<p>価格：', $row['price'], '</p>';
	echo '<p>個数：<select name="count">';}
	for ($i=1; $i<=10; $i++) {
		echo '<option value="', $i, '">', $i, '</option>';
	}
	echo '</select></p>';
	echo '<input type="hidden" name="id" value="', $row['id'], '">';
	echo '<input type="hidden" name="name" value="', $row['name'], '">';
	echo '<input type="hidden" name="price" value="', $row['price'], '">';
	echo '<p><input type="submit" value="カートに追加"></p>';
	echo '</form>';
	?>
<a href="purchase-confirm.php">ご購入確認へ進む</a>
<a href="product.php">買い物を続ける</a>
<a href="cart-show.php">カート一覧に戻る</a>
<?php require 'includes\footer.php'; ?>