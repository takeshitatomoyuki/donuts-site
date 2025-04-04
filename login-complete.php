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

<span class="hri"></span>
<p class="complete_text">ログイン完了</p>
<section class="complete_sec">
	
	
	<p class="complete_subtext">ログイン完了しました。</p>
	
	<div class="complete_linkblock">
		<a href="index.php" class="complete_link">トップページへ戻る</a>
		<a href="card-input.php" class="complete_link">カード情報登録</a>
	</div>
</section>
<?php require 'includes/footer.php'; ?>
