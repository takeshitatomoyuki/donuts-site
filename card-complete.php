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
