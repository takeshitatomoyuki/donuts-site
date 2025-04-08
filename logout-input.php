<?php require 'includes/header.php'; ?>
<?php
if (isset($_SESSION['customer'])) {
    echo 'ようこそ ', $_SESSION['customer']['name'], 'さん。';
} else{
  echo 'ようこそ ゲストさん。';
}
?>
<h2 class="logout_title">ログアウト</h2>


<section class="logout_sec">
  <div class="logout_block">
    <p class="logout_text">ログアウトしますか？</p>
    <a href="logout-complete.php" class="logout_btn">ログアウトする</a>
  </div>
</section>
<?php require 'includes/footer.php'; ?>