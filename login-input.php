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
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="common/css/reset.css">
  <link rel="stylesheet" href="common/css/common.css">
</head>
<body>
<h1>ログイン</h1>
<form action="login-complete.php" method="post">
メールアドレス<input type="text" name="mail"><br>
パスワード<input type="password" name="password"><br>
<input type="submit" value="ログインする">
</form>
<a href="customer-input.php">会員登録がお済みでない方はこちら</a>
</body>
</html>
<?php require 'includes/footer.php'; ?>