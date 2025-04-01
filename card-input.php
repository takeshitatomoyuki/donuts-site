<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>donuts-site</title>
</head>
<body>
  
<?php session_start(); ?>
<?php
$name=$address=$login=$password='';
 if(isset($_SESSION['customer'])) {
  $name=$_SESSION['customer']['name'];
  $address=$_SESSION['customer']['mail'];
  $password=$_SESSION['customer']['password'];
 } 
 ?>

<form action="card-confirm.php" method="post">
<ul>
  <li>
    <p>お名前 <span>(必須)</span></p>
    <input type="text" name="card_name" value="">
  </li>
  <li>
    <p>カード会社 <span>(必須)</span></p>
    <label><input type="radio" name="card_type" value="JCB" checked="checked"> JCB</label>
    <label><input type="radio" name="card_type" value="Visa"> Visa</label>
    <label><input type="radio" name="card_type" value="Mastercard"> Mastercard</label>
  </li>
  <li>
    <p>カード番号 <span>(必須)</span></p>
    <input type="text" name="card_no" value="">
  </li>
  <li>
    <p>有効期限 <span>(必須)</span></p>
    <input type="text" name="card_month" value=""><p>　月</p>
    <input type="text" name="card_year" value=""><p>　年</p>
  </li>
  <li>
    <p>セキュリティコード <span>(必須)</span></p>
    <input type="text" name="card_security_code" value="">
  </li>
  <li>
    <input type="submit" value="ご入力内容を確認する">
  </li>
</ul>

</body>
</html>