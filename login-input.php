<?php require 'includes/header.php'; ?>
<?php
session_start(); // セッションを開始
if (isset($_SESSION['customer'])) {
    echo 'ようこそ ', $_SESSION['customer']['name'], 'さん。';
} else{
  echo 'ようこそ ゲストさん。';
}
?>
<h1>ログイン</h1>
<form action="login-complete.php" method="post">
メールアドレス<input type="text" name="mail"><br>
パスワード<input type="password" name="password"><br>
<input type="submit" value="ログインする">
</form>
<a href="customer-input.php">会員登録がお済みでない方はこちら</a>
<?php require 'includes/footer.php'; ?>