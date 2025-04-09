<!-- <!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="common/css/reset.css">
  <link rel="stylesheet" href="common/css/customer-confirm.css">
</head>

<body> -->
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
$total = 0;
foreach ($_SESSION['product'] as $id => $product) {
    echo '<tr><td class="purchase_list_left">商品名</td><td class="purchase_list_right"><a href="detail.php?id=', $id, '">', $product['name'], '</a></td></tr>';
    echo '<tr><td class="purchase_list_left">数量</td><td class="purchase_list_right">', $product['count'], '個</td></tr>';
    echo '<tr>';
    echo '<td class="purchase_list_left">小計</td>';
    echo '<td class="purchase_list_right">税込 ￥', $product['price'] * $product['count'], '</td>';
    echo '<td class="purchase_list_delete"><a href="cart-delete.php?id=', $id, '">削除</a></td>';
    echo '</tr>';
    
    $subtotal = $product['price'] * $product['count'];
    $total += $subtotal;
}


        $total = 0;
        foreach ($_SESSION['product'] as $id => $product) {
            echo '<tr>';
            // echo '<td>', $id, '</td>';
            echo '<tr>','<td class="purchase_list_left">','商品名','</td>','<td class="purchase_list_right"><a href="detail.php?id=', $id, '">', $product['name'], '</a></td>','</tr>';
            echo '<tr>','<td class="purchase_list_left">','数量','</td>','<td class="purchase_list_right">', $product['count'],'個', '</td>','</tr>';
            echo '<tr>','<td class="purchase_list_left">','小計','</td>','<td class="purchase_list_right">', '税込 ￥',number_format($product['price']),'</td>';
            $subtotal = $product['price'] * $product['count'];
            $total += $subtotal;
            echo '<td class="purchase_list_delete"><a href="cart-delete.php?id=', $id, '">削除</a></td>';
            echo '</tr>';
            echo '</tbody>';
        echo '</table>';
        }
        echo '<table>';
        echo '<tbody>';
        echo '<tr><td class="purchase_list_total">合計</td><td class="purchase_list_right1">', '税込 ￥',number_format($total), '</td><td></td></tr>';
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

