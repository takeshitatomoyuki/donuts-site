<?php require 'includes/header.php'; ?>
<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
if (isset($_SESSION['customer'])) {
    echo 'ようこそ ', $_SESSION['customer']['name'], 'さん。';
} else{
  echo 'ようこそ ゲストさん。';
}
?>
<?php require 'includes/footer.php'; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ECサイトパンくずリスト</title>
  <style>
    /* パンくずリストのスタイル */
    .breadcrumb {
      display: flex;
      list-style: none;
      padding: 10px 16px;
      margin: 0;
      background-color: #f1f1f1;
      border-radius: 4px;
      font-family: sans-serif;
    }

    .breadcrumb li {
      display: inline;
      font-size: 14px;
    }

    .breadcrumb li+li:before {
      padding: 8px;
      color: #666;
      content: ">";
    }

    .breadcrumb li a {
      color: #0275d8;
      text-decoration: none;
    }

    .breadcrumb li a:hover {
      color: #01447e;
      text-decoration: underline;
    }

    /* TOPページでは非表示 */
    body.top-page .breadcrumb {
      display: none;
    }
  </style>
</head>

<body class="product-page"> <!-- ページに応じてクラスを変更: top-page, category-page, product-page -->
  <header>
    <h1>ECサイト</h1>
  </header>

  <nav>
    <ol class="breadcrumb">
      <li><a href="index.html">TOP</a></li>
      <li id="category"><a href="category.html">商品一覧</a></li>
      <li id="product">商品名</li>
    </ol>
  </nav>

  <main>
    <h2>ページコンテンツ</h2>
    <p>ここにページのメインコンテンツが入ります。</p>
  </main>

  <script>
    // 現在のページに応じてパンくずリストを制御するJavaScript
    document.addEventListener('DOMContentLoaded', function () {
      // URLからページ種別を判定する例（実際の実装ではより適切な方法で判定してください）
      const currentPath = window.location.pathname;

      // body要素のクラスを取得
      const bodyClass = document.body.className;

      // パンくずリストの要素
      const breadcrumb = document.querySelector('.breadcrumb');
      const categoryElement = document.getElementById('category');
      const productElement = document.getElementById('product');

      // ページタイプに応じてパンくずリストを調整
      if (bodyClass.includes('top-page')) {
        // TOPページではパンくずリスト自体が非表示（CSSで制御）
      } else if (bodyClass.includes('category-page')) {
        // カテゴリーページでは商品名部分を削除
        productElement.style.display = 'none';
      } else if (bodyClass.includes('product-page')) {
        // 商品ページでは全て表示（デフォルト）
        // 必要に応じて商品名を動的に設定
        // productElement.textContent = '実際の商品名';
      }
    });
  </script>
</body>

</html>