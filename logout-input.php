<?php require 'includes/header.php'; ?>
<?php
session_start(); // セッションを開始
if (isset($_SESSION['customer'])) {
    echo 'ようこそ ', $_SESSION['customer']['name'], 'さん。';
} else{
  echo 'ようこそ ゲストさん。';
}
?>
<h1>ログアウト</h1>
<p>ログアウトしますか？</p>
<a href="logout-complete.php">ログアウトする</a>
<?php require 'includes/footer.php'; ?>