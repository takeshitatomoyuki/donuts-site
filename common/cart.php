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
        echo '<tbody>';
        // echo '<tr><th>商品番号</th><th>商品名</th>';

        $total = 0;
        foreach ($_SESSION['product'] as $id => $product) {
            echo '<tr>';
            // echo '<td>', $id, '</td>';
            echo '<tr>','<td>','商品名','</td>','<td><a href="detail.php?id=', $id, '">', $product['name'], '</a></td>','</tr>';
            echo '<tr>','<td>','数量','</td>','<td>', $product['count'],'個', '</td>','</tr>';
            echo '<tr>','<td>','小計','</td>','<td>', '税込 ￥',$product['price'],'</td>';
            $subtotal = $product['price'] * $product['count'];
            $total += $subtotal;
            echo '<td><a href="cart-delete.php?id=', $id, '">削除</a></td>';
            echo '</tr>';
        }
        echo '<tr><td>合計</td><td>', '税込 ￥',$total, '</td><td></td></tr>';
        echo '</tbody>';
        echo '</table>';
       
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

