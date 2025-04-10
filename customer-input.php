<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>donuts-site</title>
  
  <link rel="stylesheet" href="common/css/reset.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="common/css/common.css">
  <link rel="stylesheet" href="common/css/customer.css">
</head>
<body>

<?php if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>
<?php
$name=$address=$address=$password='';
 if(isset($_SESSION['customer'])) {
  $name=$_SESSION['customer']['name'];
  $address=$_SESSION['customer']['address'];
  $password=$_SESSION['customer']['password'];
 } 
 ?>
<main>
  <h1 class="customer_logo_box"><a href="index.php"><img src="common/images/logo.svg" alt="" class="customer_logo"></a></h1>
  <div class="customer_inner">
    <h2 class="customer_title">会員登録</h2>
      <form action="customer-confirm.php" method="post">
    <ul>
      <li>
        <p class="customer_text">お名前<span class="customer_span">(必須)</span></p><input type="text" name="name" value="" class="customer_input_text">
      </li>
      <li>
        <p class="customer_text">お名前 (フリガナ)<span class="customer_span">(必須)</span></p>
        <input type="text" name="kana" value="" class="customer_input_text">
      </li>
      <li>
        <p class="customer_text">郵便番号<span class="customer_span">(必須)</span></p><input type="text" name="post_code" value="" class="customer_post_code">
      </li>
      <li>
        <p class="customer_text">住所<span class="customer_span">(必須)</span></p><input type="text" name="address" value="" class="customer_input_text">
      </li>
      <li>
        <p class="customer_text">メールアドレス<span class="customer_span">(必須)</span></p>
        <input type="email" name="mail" value="" class="customer_input_text">
      </li>
      <li>
        <p class="customer_text">パスワード<span class="customer_span">(必須)</span></p>
        <p class="costomer_condition">A-Z、a-z、0-9を少なくとも各1つは含めて8文字以上で入力してください。</p>
        <input type="password" name="password" value="" class="customer_input_text">
    </li>
    </ul>
    
    <div class="customer_submit_box"><input type="submit" value="ご入力内容を確認する" class="customer_submit"></div>
    </form>
  </div>
</main>
<?php require 'includes/footer.php'; ?>
