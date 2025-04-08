<?php
require 'includes/header.php';
require 'db-connect.php'; // ← DB接続ファイル（なければ作成）

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mail = $_POST['mail'] ?? '';
    $password = $_POST['password'] ?? '';

    $pdo = new PDO($connect, USER, PASS);
    $sql = $pdo->prepare('SELECT * FROM customer WHERE mail = ?');
    $sql->execute([$mail]);
    $customer = $sql->fetch();

    if ($customer && password_verify($password, $customer['password'])) {
        // 認証成功 → セッションに保存
        $_SESSION['customer_id'] = $customer['id'];
        $_SESSION['customer_name'] = $customer['name'];
        // ↓ログイン完了画面表示へ
    } 
}
?>

<!-- ログイン完了画面 -->
<link rel="stylesheet" href="common/css/customer-name.css">

<p class="complete_text">ログイン完了</p>
<section class="complete_sec">
	<p class="complete_subtext">ログイン完了しました。</p>
	<div class="complete_linkblock">
		<a href="index.php" class="complete_link">トップページへ戻る</a>
		<a href="card-input.php" class="complete_link">カード情報登録</a>
	</div>
</section>

<?php require 'includes/footer.php'; ?>
