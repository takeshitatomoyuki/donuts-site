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

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>確認画面</title>
</head>
<body>
    <h2>入力内容の確認</h2>
    <p>以下の内容で登録しますか？</p>
    <form action="customer-complete.php" method="post">
        <p>お名前: <?php echo $name; ?></p>
        <p>お名前 (フリガナ): <?php echo $kana; ?></p>
        <p>郵便番号: <?php echo $post_code; ?></p>
        <p>住所: <?php echo $address; ?></p>
        <p>メールアドレス: <?php echo $mail; ?></p>
        <p>パスワード: <?php echo $password; ?></p>

        <!-- hidden フィールドでデータを complete.php に渡す -->
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="kana" value="<?php echo $kana; ?>">
        <input type="hidden" name="post_code" value="<?php echo $post_code; ?>">
        <input type="hidden" name="address" value="<?php echo $address; ?>">
        <input type="hidden" name="mail" value="<?php echo $mail; ?>">
        <input type="hidden" name="password" value="<?php echo $password; ?>">

        <button type="submit">確定</button>
    </form>
    <form action="customer-input.php" method="post">
        <!-- 戻るボタンで再入力 -->
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="kana" value="<?php echo $kana; ?>">
        <input type="hidden" name="post_code" value="<?php echo $post_code; ?>">
        <input type="hidden" name="address" value="<?php echo $address; ?>">
        <input type="hidden" name="mail" value="<?php echo $mail; ?>">
        <input type="hidden" name="password" value="<?php echo $password; ?>">
        <button type="submit">修正する</button>
    </form>
</body>
</html>
