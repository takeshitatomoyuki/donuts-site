<?php session_start(); ?>

<?php
$pdo = new PDO('mysql:host=localhost;dbname=donuts;charset=utf8', 'staff', 'password');

if (isset($_SESSION['customer'])) {
    $id = $_SESSION['customer']['id'];
    
    if (isset($_REQUEST['customer'])) {
        // 既存ユーザーの情報更新
        $sql = $pdo->prepare('UPDATE customer SET card_name=?, card_type=?, card_no=?, card_month=?, card_year=?, card_security_code=? WHERE id=?');
        $sql->execute([
            $_REQUEST['card_name'],
            $_REQUEST['card_type'],
            $_REQUEST['card_no'],
            $_REQUEST['card_month'],
            $_REQUEST['card_year'],
            $_REQUEST['card_security_code'],
            $id
        ]);
        
        // セッションの更新
        $_SESSION['customer'] = [
            'id' => $id,
            'card_name' => $_REQUEST['card_name'],
            'card_type' => $_REQUEST['card_type'],
            'card_no' => $_REQUEST['card_no'],
            'card_month' => $_REQUEST['card_month'],
            'card_year' => $_REQUEST['card_year'],
            'card_security_code' => $_REQUEST['card_security_code']
        ];

        echo 'お客様情報を更新しました。';
    }
} else {
    // 新規登録
    $sql = $pdo->prepare('INSERT INTO customer (card_name, card_type, card_no, card_month, card_year, card_security_code) VALUES (?, ?, ?, ?, ?, ?)');
    $sql->execute([
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
        <a href="login-input.php">購入手続きを続ける</a>
    </div>';
}
?>
