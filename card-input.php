<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>donuts-site</title>
  <link rel="stylesheet" href="common/css/reset.css">
  <link rel="stylesheet" href="common/css/customer.css">
</head>
<body>
  
<?php if (session_status() == PHP_SESSION_NONE) {
  session_start();
}?>
<?php
$name=$mail=$password='';
 if(isset($_SESSION['customer'])) {
  $name=$_SESSION['customer']['name'];
  $address=$_SESSION['customer']['mail'];
  $password=$_SESSION['customer']['password'];
 } 
 ?>

<h1 class="customer_logo_box"><img src="common/images/logo.svg" alt="" class="customer_logo"></h1>
  <div class="customer_inner">
    <h2 class="customer_title">カード情報登録</h2>
<form action="card-confirm.php" method="post">
<ul>
  <li>
    <p class="customer_text">お名前<span class="customer_span">(必須)</span></p>
    <input type="text" name="card_name" value="">
  </li>
  <li>
    <p class="customer_text">カード会社<span class="customer_span">(必須)</span></p>
    <label><input type="radio" name="card_type" value="JCB" checked="checked">JCB</label>
    <label><input type="radio" name="card_type" value="Visa">Visa</label>
    <label><input type="radio" name="card_type" value="Mastercard">Mastercard</label>
  </li>
  <li>
    <p class="customer_text">カード番号<span class="customer_span">(必須)</span></p>
    <input type="text" name="card_no" value="">
  </li>
  <li>
    <p class="customer_text">有効期限<span class="customer_span">(必須)</span></p>
    <div class="card_month">
      <input type="text" name="card_month" value="" class="input_short">
      <p class="customer_text1">月</p>
    </div>
    <div class="card_month">
      <input type="text" name="card_year" value="" class="input_short"><p class="customer_text1">年</p>
    </div>
  </li>
  <li>
    <p class="customer_text">セキュリティコード<span class="customer_span">(必須)</span></p>
    <input type="text" name="card_security_code" value="" class="input_short">
  </li>
  <li>
    <input type="submit" value="ご入力内容を確認する" class="customer_submit">
  </li>
</ul>

</body>
</html>