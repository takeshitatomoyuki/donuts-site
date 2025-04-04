<?php require 'includes/header.php'; ?>

<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
if (isset($_SESSION['customer'])) {
    echo 'ようこそ ', $_SESSION['customer']['name'], 'さん。';
} else {
  echo 'ようこそ ゲストさん。';
}
?>

<main>
  <section class="login_sec">
    <h1 class="login_title">ログイン</h1>
    <form action="login-complete.php" method="post" class="login_form">
      <div class="login_text_block">
        <div class="login_block">
          <span class="login_input_text">メールアドレス</span><br>
          <input type="text" name="mail" class="login_mail"><br>
          <span class="login_input_text">パスワード</span><br>
          <input type="password" name="password" class="login_password"><br>
        </div>
      </div>
      <input type="submit" value="ログインする" class="login_btn">
    </form>
    <p class="login_link"><a href="customer-input.php">会員登録がお済みでない方はこちら</a></p>
  </section>
</main>

<?php require 'includes/footer.php'; ?>
