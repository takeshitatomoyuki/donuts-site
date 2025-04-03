<?php require 'includes/header.php'; ?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>商品名</title>
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
  </main>

  
</body>

</html>
<?php require 'includes/footer.php'; ?>