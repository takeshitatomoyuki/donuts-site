<?php require 'includes/header.php'; ?>
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