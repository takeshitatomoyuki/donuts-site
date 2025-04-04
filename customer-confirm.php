<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>donuts-site</title>
  <link rel="stylesheet" href="common/css/reset.css">
  <link rel="stylesheet" href="common/css/customer-confirm.css">
  <link rel="stylesheet" href="common/css/common.css">
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // 入力データを取得
    $name = htmlspecialchars($_POST["name"], ENT_QUOTES, "UTF-8");
    $kana = htmlspecialchars($_POST["kana"], ENT_QUOTES, "UTF-8");
    $post_code = htmlspecialchars($_POST["post_code"], ENT_QUOTES, "UTF-8");
    $address = htmlspecialchars($_POST["address"], ENT_QUOTES, "UTF-8");
    $mail = htmlspecialchars($_POST["mail"], ENT_QUOTES, "UTF-8");
    $password = htmlspecialchars($_POST["password"], ENT_QUOTES, "UTF-8");

} else {
    // POSTでなければ入力画面に戻す
    header("Location: customer-input.php");
    exit();
}
?>


<main>
  <h1 class="customer_logo_box"><img src="common/images/logo.svg" alt="" class="customer_logo"></h1>
  <div class="customer_inner">
    <h2 class="customer_title">入力内容の確認</h2>
    <form action="customer-complete.php" method="post">
        <p class="confirm-subtitle">お名前</p>
        <p><?php echo $name; ?></p>
        <p class="confirm-subtitle">お名前 (フリガナ)</p>
        <p><?php echo $kana; ?></p>
        <p class="confirm-subtitle">郵便番号</p>
        <p><?php echo $post_code; ?></p>
        <p class="confirm-subtitle">住所</p>
        <p><?php echo $address; ?></p>
        <p class="confirm-subtitle">メールアドレス</p>
        <p><?php echo $mail; ?></p>
        <p class="confirm-subtitle">パスワード</p>
        <p><?php echo $password; ?></p>

        <!-- hidden フィールドでデータを complete.php に渡す -->
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="kana" value="<?php echo $kana; ?>">
        <input type="hidden" name="post_code" value="<?php echo $post_code; ?>">
        <input type="hidden" name="address" value="<?php echo $address; ?>">
        <input type="hidden" name="mail" value="<?php echo $mail; ?>">
        <input type="hidden" name="password" value="<?php echo $password; ?>">

        <button type="submit">この内容で登録する</button>
    </form>
    <form action="customer-input.php" method="post">
        <!-- 修正ボタンで再入力 -->
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="kana" value="<?php echo $kana; ?>">
        <input type="hidden" name="post_code" value="<?php echo $post_code; ?>">
        <input type="hidden" name="address" value="<?php echo $address; ?>">
        <input type="hidden" name="mail" value="<?php echo $mail; ?>">
        <input type="hidden" name="password" value="<?php echo $password; ?>">
        <button type="submit">修正する</button>
    </form>
</main>
<?php require 'includes/footer.php'; ?>
