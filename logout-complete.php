<?php require 'includes/header.php'; ?>
<?php
if (isset($_SESSION['customer'])) {
    echo 'ようこそ ', $_SESSION['customer']['name'], 'さん。';
} else{
  echo 'ようこそ ゲストさん。';
}
?>
<h2 class="logout_title">ログアウト完了</h2>
<section class="logout_sec">
	<?php
	if (isset($_SESSION['customer'])) {
		unset($_SESSION['customer']);
		echo '<p class="logout_text">';
		echo 'ログアウトしました。';
		echo '</p>';
	} else {
		echo '<p class="logout_text">';
		echo 'すでにログアウトしています。';
		echo '</p>';
	}
	?>

<div class="logout_linkblock">
	<a href="index.php" class="logout_link">トップページへ戻る</a>
</div>
</section>

<?php require 'includes/footer.php'; ?>