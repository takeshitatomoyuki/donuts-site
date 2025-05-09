<?php require 'includes/header.php'; ?>
<?php require 'customer-name.php'; ?>
<link rel="stylesheet" href="common/css/customer-name.css">
<main>


<?php

// エラーメッセージの表示（表示後に削除）
if (isset($_SESSION['login_error'])) {
  echo '<div class="login_error">';
	echo '<p class="error">' . $_SESSION['login_error'] . '</p>';
	unset($_SESSION['login_error']);
  echo '</div>';
}

?>

 <h2 class="login_title">ログイン</h2>

  <section class="login_sec">
   
    <form action="login-complete.php" method="post" class="login_form">
      <div class="login_text_block">
        <div class="login_block">
          <p class="login_input_text">メールアドレス</p>
          <p><input type="text" name="mail" class="login_mail"></p>
          <p class="login_input_text">パスワード</p>
          <p><input type="password" name="password" class="login_password"></p>
        </div>
      </div>
      <input type="submit" value="ログインする" class="login_btn">
    </form>
    <p class="login_link"><a href="customer-input.php">会員登録がお済みでない方はこちら</a></p>
  </section>
</main>

<?php require 'includes/footer.php'; ?>
