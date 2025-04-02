<?php require 'includes/header.php'; ?>
<?php
session_start(); // セッションを開始
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