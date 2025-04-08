<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="common/css/reset.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="common/css/common.css">
    <link rel="stylesheet" href="common/css/card-complete.css">
    <title>donuts-site</title>
</head>
<body>
    
</body>
</html>
<main>
  <h1 class="customer_logo_box"><img src="common/images/logo.svg" alt="" class="customer_logo"></h1>
  <div class="customer_inner">
    <h2 class="customer_title">カード情報登録完了</h2>

<?php
session_start();

$pdo = new PDO('mysql:host=localhost;dbname=donuts;charset=utf8', 'staff', 'password');

// セッションがない場合は処理を終了
if (!isset($_SESSION['customer'])) {
    echo '会員登録してください。';
    exit;
}

$id = $_SESSION['customer']['id']; // customer の ID を取得

// 自分以外の会員を取得
$sql = $pdo->prepare('SELECT * FROM customer WHERE id != ?');
$sql->execute([$id]);

// 結果を変数に保存
$result = $sql->fetchAll();

if (empty($result)) {
    if (isset($_REQUEST['card'])) {
        // カード情報の更新処理
        $sql = $pdo->prepare('UPDATE card SET card_name=?, card_type=?, card_no=?, card_month=?, card_year=?, card_security_code=? WHERE id=?');
        $sql->execute([
            $_REQUEST['card_name'],
            $_REQUEST['card_type'],
            $_REQUEST['card_no'],
            $_REQUEST['card_month'],
            $_REQUEST['card_year'],
            $_REQUEST['card_security_code'],
            $id
        ]);

        $_SESSION['card'] = [
            'id' => $id,
            'card_name' => $_REQUEST['card_name'],
            'card_type' => $_REQUEST['card_type'],
            'card_no' => $_REQUEST['card_no'],
            'card_month' => $_REQUEST['card_month'],
            'card_year' => $_REQUEST['card_year'],
            'card_security_code' => $_REQUEST['card_security_code']
        ];

        echo 'お客様情報を更新しました。';

    } else {
        // カード情報の新規登録処理（customer の id を card の id に適用）
        $sql = $pdo->prepare('INSERT INTO card (id, card_name, card_type, card_no, card_month, card_year, card_security_code) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $sql->execute([
            $id, // customer の id を適用
            $_REQUEST['card_name'],
            $_REQUEST['card_type'],
            $_REQUEST['card_no'],
            $_REQUEST['card_month'],
            $_REQUEST['card_year'],
            $_REQUEST['card_security_code']
        ]);

        echo '<h2>カード情報登録完了</h2>
        <div>
            <p>クレジットカード情報を登録しました。</p>
            <a href="product.php">購入手続きを続ける</a>
        </div>';
    }
} else {
    echo 'カード名がすでに使用されていますので、変更してください。';
}
?>
</main>