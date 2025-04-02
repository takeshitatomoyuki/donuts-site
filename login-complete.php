<?php require 'includes/header.php'; ?>
<?php
unset($_SESSION['customer']);
$pdo=new PDO('mysql:host=localhost;dbname=donuts;charset=utf8', 
	'staff', 'password');
$sql=$pdo->prepare('select * from customer where mail=? and password=?');
$sql->execute([$_REQUEST['mail'], $_REQUEST['password']]);
foreach ($sql as $row) {
	$_SESSION['customer']=[
		'id'=>$row['id'], 'name'=>$row['name'], 'kana'=>$row['kana'], 'post_code'=>$row['post_code'], 
		'address'=>$row['address'], 'mail'=>$row['mail'], 
		'password'=>$row['password']];
}
if (isset($_SESSION['customer'])) {
	echo 'ようこそ ', $_SESSION['customer']['name'], 'さん。';
} else {
	echo 'ログイン名またはパスワードが違います。';
}
?>
<a href="index.php">トップページへ戻る</a>;
<a href="card-input.php">カード情報登録</a>;
<?php require 'includes/footer.php'; ?>
