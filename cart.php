
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['customer'])) {
    if (!empty($_SESSION['product'])) {

        $total = 0;

        foreach ($_SESSION['product'] as $id => $product) {
            echo '<div class="detail_image_box">';
// echo '<img src="common/images/sp_' . $id . 'donuts.jpg" alt="商品画像" class="detail_image">';
// echo '</div>';
            echo '<table><tbody><tr><td class="purchase_list_left">商品名</td>';
            echo '<td class="purchase_list_right"><a href="detail.php?id=', $id, '">', $product['name'], '</a></td></tr>';
            echo '<tr><td class="purchase_list_left">数量</td>';
            echo '<td class="purchase_list_right">', $product['count'], '個</td></tr>';
            echo '<tr><td class="purchase_list_left">小計</td>';
            echo '<td class="purchase_list_right">税込 ￥', number_format($product['price'] * $product['count']), '</td>';
            // echo '<tr class="cart_input_list"><td>数量</td>';
            // echo '<td>', $product['count'], '個</td></tr>';
            echo '<td class="purchase_list_delete"><a href="cart-delete.php?id=', $id, '">削除</a></td>';
            echo '</tr></tbody></table>';

            $subtotal = $product['price'] * $product['count'];
            $total += $subtotal;
        }

        echo '<table>';
        echo '<tbody>';
        echo '<tr><td class="purchase_list_total">合計</td>';
        echo '<td class="purchase_list_right1">税込 ￥', number_format($total), '</td><td></td></tr>';
        echo '</tbody>';
        echo '</table>';
    } else {
        echo 'カートに商品がありません。';
    }
} else {
    header("Location: login-input.php");
    exit();
}
?>



</body>



</html>

