'use strict'

let img = document.getElementById('index_main_img');

// if (window.matchMedia('(max-width: 768px)').matches) {
//   img.src = 'common/images/sp_main.jpg';
// } else {
//   img.src = 'common/images/pc_1donuts.jpg';
// }


const mediaQuery = window.matchMedia('(max-width: 768px)');

// ページが読み込まれた時に実行
handle(mediaQuery);

// ウィンドウサイズを変更しても実行（ブレイクポイントの監視）
mediaQuery.addEventListener(handle);

function handle(mm) {
  if (mm.matches) {
    // ウィンドウサイズ768px以下のときの処理
    img.src = 'common/images/sp_main.jpg';
  } else {
    // それ以外の処理
    img.src = 'common/images/pc_1donuts.jpg';
  }
}