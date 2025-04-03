<?php
try {
  $pdo=new PDO('mysql:host=localhost;dbname=donuts;charset=utf8',
  'staff','password');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $customer_id = 1; // 取得する顧客ID（仮の値）
    
    // 商品情報と購入詳細を取得
    $sql = "SELECT p.name AS product_name, pd.count AS quantity, (p.price * pd.count) AS subtotal
            FROM purchase_detail pd
            JOIN product p ON pd.product_id = p.id
            WHERE pd.customer_id = :customer_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':customer_id', $customer_id, PDO::PARAM_INT);
    $stmt->execute();
    $purchases = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // 顧客情報を取得
    $sql = "SELECT name, address FROM customer WHERE id = :customer_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':customer_id', $customer_id, PDO::PARAM_INT);
    $stmt->execute();
    $customer = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // カード情報を取得
    $sql = "SELECT card_type, card_no FROM card WHERE customer_id = :customer_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':customer_id', $customer_id, PDO::PARAM_INT);
    $stmt->execute();
    $card = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // 合計金額を計算
    $total = array_sum(array_column($purchases, 'subtotal'));
    
} catch (PDOException $e) {
    echo "エラー: " . $e->getMessage();
    exit;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>購入情報</title>
</head>
<body>
    <h2>購入情報</h2>
    <table border="1">
        <tr>
            <th>商品名</th>
            <th>数量</th>
            <th>小計</th>
        </tr>
        <?php foreach ($purchases as $purchase): ?>
            <tr>
                <td><?php echo htmlspecialchars($purchase['product_name'], ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?php echo htmlspecialchars($purchase['quantity'], ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?php echo htmlspecialchars(number_format($purchase['subtotal']), ENT_QUOTES, 'UTF-8'); ?> 円</td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p><strong>合計金額:</strong> <?php echo number_format($total); ?> 円</p>
    
    <h2>お客様情報</h2>
    <p><strong>お名前:</strong> <?php echo htmlspecialchars($customer['name'], ENT_QUOTES, 'UTF-8'); ?></p>
    <p><strong>住所:</strong> <?php echo htmlspecialchars($customer['address'], ENT_QUOTES, 'UTF-8'); ?></p>
    
    <h2>カード情報</h2>
    <p><strong>カード種類:</strong> <?php echo htmlspecialchars($card['card_type'], ENT_QUOTES, 'UTF-8'); ?></p>
    <p><strong>カード番号:</strong> <?php echo htmlspecialchars($card['card_no'], ENT_QUOTES, 'UTF-8'); ?></p>
</body>
</html>
