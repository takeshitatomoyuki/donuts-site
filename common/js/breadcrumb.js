'use strict'
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