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

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>確認画面</title>
</head>
<body>
    <h2>ご入力内容の確認</h2>

    <form action="card-complete.php" method="post">
        <p>お名前</p>
        <p><?php echo $card_name; ?></p>
        <p>カード会社</p>
        <p><?php echo $card_type; ?></p>
        <p>カード番号</p>
        <p><?php echo $card_no; ?></p>
        <p>有効期限</p>
        <p><?php echo $card_month,'/',$card_year; ?></p>
        <p>セキュリティコード</p>
        <p><?php echo $card_security_code; ?></p>

        <!-- hidden フィールドでデータを complete.php に渡す -->
        <input type="hidden" name="card_name" value="<?php echo $card_name; ?>">
        <input type="hidden" name="card_type" value="<?php echo $card_type; ?>">
        <input type="hidden" name="card_no" value="<?php echo $card_no; ?>">
        <input type="hidden" name="card_month" value="<?php echo $card_month; ?>">
        <input type="hidden" name="card_year" value="<?php echo $card_year; ?>">
        <input type="hidden" name="card_security_code" value="<?php echo $card_security_code; ?>">

        <button type="submit">この内容で確認する</button>
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
        <button type="submit">修正する</button>
    </form>
</body>
</html>
