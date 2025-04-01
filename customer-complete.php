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
    echo 'お客様情報を更新しました。';
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
      '<h2>会員登録完了</h2>
      <div>
        <p>会員登録が完了しました</p>。
        <a href="">ログイン画面へ進む</a>
      </div>';
  }
} else {
  echo 'ログイン名がすでに使用されていますので、変更してください。';
}
?>