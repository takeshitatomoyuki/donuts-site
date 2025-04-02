<?php
$pdo=new PDO('mysql:host=localhost;dbname=donuts;charset=utf8',
'staff','password');
if(isset($_SESSION['customer'])) {
  $id=$_SESSION['customer']['id'];
  $sql=$pdo->prepare('select * from customer where id!=?');
  $sql->execute([$id]);
} else {
  echo '会員登録してください。';
}

if(empty($sql->fetchAll())) {
  if(isset($_REQUEST['card'])) {
    $sql=$pdo->prepare('update card set card_name=?,card_type=?,card_no=?,card_month=?,card_year=?,card_security_code=? where id=?');
    $sql->execute([
      $_REQUEST['card_name'],
      $_REQUEST['card_type'],
      $_REQUEST['card_no'],
      $_REQUEST['card_month'],
      $_REQUEST['card_year'],
      $_REQUEST['card_security_code'],
      $id]);
    $_SESSION['card']=[
      'id'=>$id,
      'card_name'=>$_REQUEST['card_name'],
      'card_type'=>$_REQUEST['card_type'],
      'card_no'=>$_REQUEST['card_no'],
      'card_month'=>$_REQUEST['card_month'],
      'card_year'=>$_REQUEST['card_year'],
      'card_security_code'=>$_REQUEST['card_security_code']];
    echo 'お客様情報を更新しました。';
  } else {
    $sql=$pdo->prepare('insert into card values(null,?,?,?,?,?,?)');
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
        <a href="product.php">購入手続きを続ける</a>
      </div>';
  }
} else {
  echo 'カード名がすでに使用されていますので、変更してください。';
}
?>

