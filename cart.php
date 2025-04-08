<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="common/css/reset.css">
</head>

<body>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['customer'])) {
    // echo 'ようこそ ', $_SESSION['customer']['name'], 'さん。';

    // ✅ カート情報もログイン時のみ表示
    if (!empty($_SESSION['product'])) {
        echo '<table>';
        // echo '<tr><th>商品番号</th><th>商品名</th>';
        echo '<th>価格</th><th>個数</th><th>小計</th><th></th></tr>';
        $total = 0;
        foreach ($_SESSION['product'] as $id => $product) {
            echo '<tr>';
            // echo '<td>', $id, '</td>';
            echo '<td><a href="detail.php?id=', $id, '">', $product['name'], '</a></td>';
            echo '<td>', $product['price'], '</td>';
            echo '<td>', $product['count'], '</td>';
            $subtotal = $product['price'] * $product['count'];
            $total += $subtotal;
            echo '<td>', $subtotal, '</td>';
            echo '<td><a href="cart-delete.php?id=', $id, '">削除</a></td>';
            echo '</tr>';
        }
        echo '<tr><td>合計</td><td></td><td></td><td></td><td>', $total, '</td><td></td></tr>';
        echo '</table>';
        echo'<a href="purchase-confirm.php">ご購入確認へ進む</a>';
       echo' <a href="product.php">買い物を続ける</a>';
echo'<a href="cart-show.php">カート一覧に戻る</a>';
    } else {
        echo 'カートに商品がありません。';
    }

} else {
    //echo 'ようこそ ゲストさん。<br>';
    //echo 'ログインされていません。<br>';
    header("Location: login-input.php");
    exit();
   
}
?>


</body>



</html>

