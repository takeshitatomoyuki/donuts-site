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
  <link rel="stylesheet" href="common/css/customer-confirm.css">
  <link rel="stylesheet" href="common/css/common.css">
  
  <main>
   <h1 class="customer_logo_box"><img src="common/images/logo.svg" alt="" class="customer_logo"></h1>
   <div class="customer_inner">
    <h2 class="customer_title">会員登録完了</h2>

    <div class="customer_complete_box">
      <p class="customer_complete_text">会員登録が完了しました</p>
      <a class="customer_complete_link" href="login-input.php">ログイン画面へ進む</a>
    </div>

<?php session_start(); ?>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=donuts;charset=utf8',
'staff','password');
if(isset($_SESSION['customer'])) {
  $id=$_SESSION['customer']['id'];
  $sql=$pdo->prepare('select * from customer where id!=? and mail=?');
  $sql->execute([$id, $_REQUEST['mail']]);
} else {
  $sql=$pdo->prepare('select * from customer where mail=?');
  $sql->execute([$_REQUEST['mail']]);
}
if(empty($sql->fetchAll())) {
  if(isset($_REQUEST['customer'])) {
    $sql=$pdo->prepare('update customer set name=?,kana=?,post_code=?,address=?,mail=?,password=? where id=?');
    $sql->execute([
      $_REQUEST['name'],
      $_REQUEST['kana'],
      $_REQUEST['post_code'],
      $_REQUEST['address'],
      $_REQUEST['mail'],
      $_REQUEST['password'],
      $id]);
    $_SESSION['customer']=[
      'id'=>$id,
      'name'=>$_REQUEST['name'],
      'kana'=>$_REQUEST['kana'],
      'post_code'=>$_REQUEST['post_code'],
      'address'=>$_REQUEST['address'],
      'mail'=>$_REQUEST['mail'],
      'password'=>$_REQUEST['password']];
    
  } else {
    $sql=$pdo->prepare('insert into customer values(null,?,?,?,?,?,?)');
    $sql->execute([
      $_REQUEST['name'],
      $_REQUEST['kana'],
      $_REQUEST['post_code'],
      $_REQUEST['address'],
      $_REQUEST['mail'],
      $_REQUEST['password']]);
      echo 
      '<div class="customer_complete_box">',
        '<p class="customer_title">会員登録が完了しました</p>',
        '<a class="customer_complete_link" href="login-input.php">','ログイン画面へ進む','</a>',
      '</div>';
  }
} else {
  echo '<p class="customer_complete_text">','ログイン名がすでに使用されていますので、変更してください。','</p>';
}
?>
</main>
<?php require 'includes/footer.php'; ?>