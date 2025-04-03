<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>donuts-site</title>
  <link rel="stylesheet" href="customer.css">
</head>
<body>

<?php session_start(); ?>
<?php
$name=$address=$address=$password='';
 if(isset($_SESSION['customer'])) {
  $name=$_SESSION['customer']['name'];
  $address=$_SESSION['customer']['address'];
  $password=$_SESSION['customer']['password'];
 } 
 ?>
<h2>会員登録</h2>
  <form action="customer-confirm.php" method="post">
<ul>
  <li>
    <p>お名前 <span>(必須)</span><input type="text" name="name" value=""></p>
  </li>
  <li>
    <p>お名前 (フリガナ)<span>(必須)</span><input type="text" name="kana" value=""></p>
  </li>
  <li>
    <p>郵便番号 <span>(必須)</span></p><input type="text" name="post_code" value="">
  </li>
  <li>
    <p>住所 <span>(必須)</span></p><input type="text" name="address" value="">
  </li>
  <li>
    <p>メールアドレス <span>(必須)</span></p>
    <input type="email" name="mail" value="">
  </li>
  <li>
    <p>パスワード <span>(必須)</span></p>
    <p>A-Z、a-z、0-9を少なくとも各1つは含めて8文字以上で入力してください。</p>
    <input type="password" name="password" value="">
</li>
</ul>

<input type="submit" value="ご入力内容を確認する">
</form>

</body>
</html>