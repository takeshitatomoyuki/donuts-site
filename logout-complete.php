<?php require 'includes/header.php'; ?>
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
<?php
if (isset($_SESSION['customer'])) {
	unset($_SESSION['customer']);
	echo 'ログアウトしました。';
} else {
	echo 'すでにログアウトしています。';
}
?>
<a href="index.php">トップページへ戻る</a>;
<?php require 'includes/footer.php'; ?>