<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>donuts-site</title>
  <link rel="stylesheet" href="common/css/reset.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="common/css/customer-confirm.css">
  <link rel="stylesheet" href="common/css/common.css">
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // 入力データを取得
    $card_name = htmlspecialchars($_POST["card_name"], ENT_QUOTES, "UTF-8");
    $card_type = htmlspecialchars($_POST["card_type"], ENT_QUOTES, "UTF-8");
    $card_no = htmlspecialchars($_POST["card_no"], ENT_QUOTES, "UTF-8");
    $card_month = htmlspecialchars($_POST["card_month"], ENT_QUOTES, "UTF-8");
    $card_year = htmlspecialchars($_POST["card_year"], ENT_QUOTES, "UTF-8");
    $card_security_code = htmlspecialchars($_POST["card_security_code"], ENT_QUOTES, "UTF-8");

} else {
    // POSTでなければ入力画面に戻す
    header("Location: card-input.php");
    exit();
}
?>

<main>
<h1 class="customer_logo_box"><img src="common/images/logo.svg" alt="" class="customer_logo"></h1>
    <h2 class="customer_title">ご入力内容の確認</h2>

    <form action="card-complete.php" method="post" class="confirm_inner">
        <p class="confirm-subtitle">お名前</p>
         <p class="confirm_text_box"><?php echo $card_name; ?></p>
        <p class="confirm-subtitle">カード会社</p>
         <p class="confirm_text_box"><?php echo $card_type; ?></p>
        <p class="confirm-subtitle">カード番号</p>
         <p class="confirm_text_box"><?php echo $card_no; ?></p>
        <p class="confirm-subtitle">有効期限</p>
         <p class="confirm_text_box"><?php echo $card_month,'/',$card_year; ?></p>
        <p class="confirm-subtitle">セキュリティコード</p>
         <p class="confirm_text_box"><?php echo $card_security_code; ?></p>

        <!-- hidden フィールドでデータを complete.php に渡す -->
        <input type="hidden" name="card_name" value="<?php echo $card_name; ?>">
        <input type="hidden" name="card_type" value="<?php echo $card_type; ?>">
        <input type="hidden" name="card_no" value="<?php echo $card_no; ?>">
        <input type="hidden" name="card_month" value="<?php echo $card_month; ?>">
        <input type="hidden" name="card_year" value="<?php echo $card_year; ?>">
        <input type="hidden" name="card_security_code" value="<?php echo $card_security_code; ?>">

        <button type="submit" class="confirm_submit">この内容で確認する</button>
    </form>
    <form action="card-input.php" method="post">
        <!-- 戻るボタンで再入力 -->
        <input type="hidden" name="card_name" value="<?php echo $card_name; ?>">
        <input type="hidden" name="card_type" value="<?php echo $card_type; ?>">
        <input type="hidden" name="post_code" value="<?php echo $post_code; ?>">
        <input type="hidden" name="card_no" value="<?php echo $card_no; ?>">
        <input type="hidden" name="card_month" value="<?php echo $card_month; ?>">
        <input type="hidden" name="card_year" value="<?php echo $card_year; ?>">
        <input type="hidden" name="card_security_code" value="<?php echo $card_security_code; ?>">
        <button type="submit" class="btn-edit">修正する</button>
    </form>
</main>
    <?php require 'includes/footer.php'; ?>
