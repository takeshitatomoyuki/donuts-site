<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // 入力データを取得
    $user_name1 = htmlspecialchars($_POST["user_name1"], ENT_QUOTES, "UTF-8");
    $user_name2 = htmlspecialchars($_POST["user_name2"], ENT_QUOTES, "UTF-8");
    $postcode = htmlspecialchars($_POST["postcode"], ENT_QUOTES, "UTF-8");
    $address = htmlspecialchars($_POST["address"], ENT_QUOTES, "UTF-8");
    $user_mail = htmlspecialchars($_POST["user_mail"], ENT_QUOTES, "UTF-8");
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
    <form action="complete.php" method="post">
        <p>お名前: <?php echo $user_name1; ?></p>
        <p>お名前 (フリガナ): <?php echo $user_name2; ?></p>
        <p>郵便番号: <?php echo $postcode; ?></p>
        <p>住所: <?php echo $address; ?></p>
        <p>メールアドレス: <?php echo $user_mail; ?></p>
        <p>パスワード: <?php echo $password; ?></p>

        <!-- hidden フィールドでデータを complete.php に渡す -->
        <input type="hidden" name="user_name1" value="<?php echo $user_name1; ?>">
        <input type="hidden" name="user_name2" value="<?php echo $user_name2; ?>">
        <input type="hidden" name="postcode" value="<?php echo $postcode; ?>">
        <input type="hidden" name="address" value="<?php echo $address; ?>">
        <input type="hidden" name="postcode" value="<?php echo $postcode; ?>">
        <input type="hidden" name="postcode" value="<?php echo $user_mail; ?>">
        <input type="hidden" name="postcode" value="<?php echo $password; ?>">

        <button type="submit">確定</button>
    </form>
    <form action="customer-input.php" method="post">
        <!-- 戻るボタンで再入力 -->
        <input type="hidden" name="user_name1" value="<?php echo $user_name1; ?>">
        <input type="hidden" name="user_name2" value="<?php echo $user_name2; ?>">
        <input type="hidden" name="postcode" value="<?php echo $postcode; ?>">
        <input type="hidden" name="address" value="<?php echo $address; ?>">
        <input type="hidden" name="postcode" value="<?php echo $postcode; ?>">
        <input type="hidden" name="postcode" value="<?php echo $user_mail; ?>">
        <input type="hidden" name="postcode" value="<?php echo $password; ?>">
        <button type="submit">修正する</button>
    </form>
</body>
</html>
