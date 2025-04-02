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
  <link rel="stylesheet" href="common/css/login.css">
</head>
<body>
<h1>ログイン</h1>
<form action="login-complete.php" method="post">
        <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="email" id="email" name="mail" required>
        </div>
        <div class="form-group">
            <label for="password">パスワード</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="login_button">
        <input type="submit" value="ログインする">
        </div>
    </form>
<a href="customer-input.php">会員登録がお済みでない方はこちら</a>
</body>
</html>
<?php require 'includes/footer.php'; ?>