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
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // 入力データを取得
    $card_name = htmlspecialchars($_POST["card_name"], ENT_QUOTES, "UTF-8");
    $card_type = htmlspecialchars($_POST["card_type"], ENT_QUOTES, "UTF-8");
    $card_no = htmlspecialchars($_POST["card_no"], ENT_QUOTES, "UTF-8");
    $card_month = htmlspecialchars($_POST["card_month"], ENT_QUOTES, "UTF-8");
    $card_year = htmlspecialchars($_POST["card_year"], ENT_QUOTES, "UTF-8");
    $card_security_code = htmlspecialchars($_POST["card_security_code"], ENT_QUOTES, "UTF-8");

} else {
    // POSTでなければ入力画面に戻す
    header("Location: card-input.php");
    exit();
}
?>

<main>

<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// 未ログインなら購入不可
if (!isset($_SESSION['customer'])) {
    echo '購入手続きを行うにはログインしてください。';
} 
// カートが空ならエラーメッセージ
elseif (empty($_SESSION['product'])) {
    echo 'カートに商品がありません。';
} 
else {
    // データベース接続
    $pdo = new PDO('mysql:host=localhost;dbname=donuts;charset=utf8', 'staff', 'password');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 現在のログインユーザーの ID
    $customer_id = $_SESSION['customer']['id'];

    // `card` テーブルの `id` カラムに customer_id が存在するか確認
    $sql = $pdo->prepare('SELECT COUNT(*) FROM card WHERE id = ?');
    $sql->execute([$customer_id]);
    $card_exists = $sql->fetchColumn() > 0;

    if (!$card_exists) {
        require 'cart.php';
        echo '<p>お名前：', htmlspecialchars($_SESSION['customer']['name'], ENT_QUOTES, 'UTF-8'), '</p>';
        echo '<p>ご住所：', htmlspecialchars($_SESSION['customer']['address'], ENT_QUOTES, 'UTF-8'), '</p>';
        echo '<p>お支払方法が登録されておりません。</p>';
        echo '<p>クレジットカード情報を登録してください。</p>';
        echo '<a href="card-input.php">カード情報を登録する</a>';
    } else {
        $sql = $pdo->prepare('SELECT * FROM card WHERE id = ?');
    $sql->execute([$customer_id]);
    $card = $sql->fetch(PDO::FETCH_ASSOC);
    // カード情報をセッションに保存
    $_SESSION['card'] = $card;
        echo '<hr>';
        require 'cart.php';
        echo '<hr>';
         // 購入手続きの表示
        echo'<p>お届け先</p>';
         echo '<p>お名前：', htmlspecialchars($_SESSION['customer']['name'], ENT_QUOTES, 'UTF-8'), '</p>';
         echo '<p>ご住所：', htmlspecialchars($_SESSION['customer']['address'], ENT_QUOTES, 'UTF-8'), '</p>';   
echo'<p>お支払い方法</p>';
         echo '<p>：', htmlspecialchars($_SESSION['card']['card_name'], ENT_QUOTES, 'UTF-8'), '</p>';
         echo '<p>お支払い：', htmlspecialchars($_SESSION['card']['card_type'], ENT_QUOTES, 'UTF-8'), '</p>';
         echo '<p>カード種類：', htmlspecialchars($_SESSION['card']['card_no'], ENT_QUOTES, 'UTF-8'), '</p>';
         echo '<p>カード番号：';
        

      
        echo '<a href="purchase-complete.php">購入を確定する</a>';
    }
}
?>
</main>
<?php require 'includes/footer.php'; ?>
