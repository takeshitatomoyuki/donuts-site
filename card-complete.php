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
    $sql=$pdo->prepare('update customer set card_name=?,card_type=?,card_no=?,card_month=?,card_year=?,card_security_code=? where id=?');
    $sql->execute([
      $_REQUEST['card_name'],
      $_REQUEST['card_type'],
      $_REQUEST['card_no'],
      $_REQUEST['card_month'],
      $_REQUEST['card_year'],
      $_REQUEST['card_security_code'],
      $id]);
    $_SESSION['customer']=[
      'id'=>$id,
      'card_name'=>$_REQUEST['card_name'],
      'card_type'=>$_REQUEST['card_type'],
      'card_no'=>$_REQUEST['card_no'],
      'card_month'=>$_REQUEST['card_month'],
      'card_year'=>$_REQUEST['card_year'],
      'card_security_code'=>$_REQUEST['card_security_code']];
    echo 'お客様情報を更新しました。';
  } else {
    $sql=$pdo->prepare('insert into customer values(null,?,?,?,?,?,?)');
    $sql->execute([
      $_REQUEST['card_name'],
      $_REQUEST['card_type'],
      $_REQUEST['card_no'],
      $_REQUEST['card_month'],
      $_REQUEST['card_year'],
      $_REQUEST['card_security_code']]);
      echo 
      '<h2>カード情報登録完了</h2>
      <div>
        <p>クレジットカード情報を登録しました。</p>。
        <a href="login-input.php">購入手続きを続ける</a>
      </div>';
  }
} else {
  echo 'ログイン名がすでに使用されていますので、変更してください。';
}
?>
<!-- 変更前 -->