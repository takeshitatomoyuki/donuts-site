<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="common/css/reset.css">
    <link rel="stylesheet" href="common/css/common.css">
    <link rel="stylesheet" href="common/css/card-complete.css">
    <title>donuts-site/card-complete</title>
</head>
<body>
    
</body>
</html>
<main>


  <h1 class="customer_logo_box"><a href="index.php"><img src="common/images/logo.svg" alt="" class="customer_logo"></a></h1>
 
  <h2 class="card_complete_title">カード情報登録完了</h2>
 
    <?php
session_start();

$pdo = new PDO('mysql:host=localhost;dbname=donuts;charset=utf8', 'staff', 'password');

// セッションがない場合は処理を終了
if (!isset($_SESSION['customer'])) {
    echo '会員登録してください。';
    exit;
}

$id = $_SESSION['customer']['id']; // customer の ID を取得
$sql = $pdo->prepare('
    INSERT INTO card (id, card_name, card_type, card_no, card_month, card_year, card_security_code) 
    VALUES (?, ?, ?, ?, ?, ?, ?) 
    ON DUPLICATE KEY UPDATE 
        card_name=VALUES(card_name), 
        card_type=VALUES(card_type), 
        card_no=VALUES(card_no), 
        card_month=VALUES(card_month), 
        card_year=VALUES(card_year), 
        card_security_code=VALUES(card_security_code)
');
$sql->execute([
    $id,
    $_REQUEST['card_name'],
    $_REQUEST['card_type'],
    $_REQUEST['card_no'],
    $_REQUEST['card_month'],
    $_REQUEST['card_year'],
    $_REQUEST['card_security_code']
]);
    echo '
    <div class="card_complete_inner">',
        '<p class="card_complete_regi">','クレジットカード情報を登録しました。','</p>',
        '<a class="card_complete_purch" href="product.php">','購入手続きを続ける','</a>',
    '</div>';

?>
</main>
<?php require 'includes/footer.php'; ?>