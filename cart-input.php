<?php require 'includes\header.php'; ?>
<?php require 'breadcrumb.php'; ?>
<?php require 'customer-name.php'; ?>
<head>
  <link rel="stylesheet" href="common/css/breadcrumb.css">
	<link rel="stylesheet" href="common/css/customer-name.css">
    <link rel="stylesheet" href="common/css/cart-input.css">
  <script src="common/js/breadcrumb.js"></script>
</head>
<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];

    if (!isset($_SESSION['product'])) {
        $_SESSION['product'] = [];
    }

    $count = 0;
    if (isset($_SESSION['product'][$id])) {
        $count = $_SESSION['product'][$id]['count'];
    }

    $_SESSION['product'][$id] = [
        'name' => $_POST['name'],
        'price' => $_POST['price'],
        'count' => $count + $_POST['count']
    ];

    // ✅ POSTの後はGETにリダイレクト
    header("Location: cart-input.php?added=1&id=" . urlencode($id));
    exit;
}
?>

<main>
    <?php
    // ✅ ここを if文で囲んで表示制御！
    
    if (isset($_GET['added'])) {
        echo '<p class="cart_text">カートに商品を追加しました。</p>';
    
    
    
    
        if (isset($_SESSION['customer'])) {
            if (!empty($_SESSION['product'])) {
    
                $total = 0;
    
                foreach ($_SESSION['product'] as $id => $product) {
                    echo '<div class=cart_inner>';
                    echo '<div class="cart_image_box">';
                     echo '<img src="common/images/sp_' . $id . 'donuts.jpg" alt="商品画像" class="cart_image">';
                    echo '</div>';
                    echo '<div class="cart_inner_right"><p class="cart_product_name"><a href="detail.php?id=', $id, '">', $product['name'], '</a></p>';
                    echo '<div class="cart_count"><p class="cart_price">税込 ￥', number_format($product['price'] * $product['count']), '</p>';
                    echo '<p class="cart_number">数量', '<span class="cart_number_span">',$product['count'], ' 個</span></p></div>';
                    echo '<p class="cart_delete_box"><a class="cart_delete" href="cart-delete.php?id=', $id, '">削除する</a></p></div>';
                    echo '</div>';
    
                    $subtotal = $product['price'] * $product['count'];
                    $total += $subtotal;
                }
    

                echo '<div class="cart_total_box"><p class="cart_total">ご注文合計：<span class="cart_total_span">税込￥', number_format($total),'</span></p>';
                echo '<a class="cart_submit" href="purchase-confirm.php">ご購入確認へ進む</a></div>';

            } else {
                echo 'カートに商品がありません。';
            }
        } else {
            header("Location: login-input.php");
            exit();
        }
    
    
    
        // echo '<a href="purchase-confirm.php">ご購入確認へ進む</a>';
        echo '<p><a class="cart_submit1" href="product.php">買い物を続ける</a></p>';
    }
    ?>
</main>


<?php require 'includes\footer.php'; ?>