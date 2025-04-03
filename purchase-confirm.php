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
        echo '<p>カード情報を登録してください。</p>';
        echo '<a href="card-input.php">カード情報を登録する</a>';
    } else {
       
        echo '<hr>';
        require 'cart.php';
        echo '<hr>';
         // 購入手続きの表示
         echo '<p>お名前：', htmlspecialchars($_SESSION['customer']['name'], ENT_QUOTES, 'UTF-8'), '</p>';
         echo '<p>ご住所：', htmlspecialchars($_SESSION['customer']['address'], ENT_QUOTES, 'UTF-8'), '</p>';

         echo '<p>ご住所：', htmlspecialchars($_SESSION['card']['card_name'], ENT_QUOTES, 'UTF-8'), '</p>';
         echo '<p>ご住所：', htmlspecialchars($_SESSION['card']['card_type'], ENT_QUOTES, 'UTF-8'), '</p>';
         echo '<p>ご住所：', htmlspecialchars($_SESSION['card']['card_no'], ENT_QUOTES, 'UTF-8'), '</p>';
         echo '<p>ご住所：', htmlspecialchars($_SESSION['card']['card_month'], ENT_QUOTES, 'UTF-8'), '</p>';
         echo '<p>ご住所：', htmlspecialchars($_SESSION['card']['card_year'], ENT_QUOTES, 'UTF-8'), '</p>';
         echo '<p>ご住所：', htmlspecialchars($_SESSION['card']['card_security_code'], ENT_QUOTES, 'UTF-8'), '</p>';
        

        echo '<p>内容をご確認いただき、購入を確定してください。</p>';
        echo '<a href="purchase-complete.php">購入を確定する</a>';
    }
}
?>

<?php require 'includes/footer.php'; ?>
