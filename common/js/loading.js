'use strict';



const isFirstLoad = sessionStorage.getItem('isFirstLoad') === 'true'; // 明示的にチェック
const loading = document.querySelector('.loading');
const scroll = document.querySelector('.scroll');
const hideDelay = 3000; // 可変にする

window.addEventListener('DOMContentLoaded', function () {
  if (!isFirstLoad) {
    setTimeout(function () {
      loading.classList.add('hide');
      scroll.classList.add('hide');
    }, hideDelay);
    sessionStorage.setItem('isFirstLoad', 'true'); // 初回ロード時に保存
  } else {
    loading.classList.add('hide');
    scroll.classList.add('hide');
  }
});

