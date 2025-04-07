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
<h2 class="logout_title">ログアウト</h2>


<div class="logout_block">
  <p>ログアウトしますか？</p>
  <a href="logout-complete.php" class="logout_link">ログアウトする</a>
</div>
<?php require 'includes/footer.php'; ?>