<div class="detail_top">
      <?php
      if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }
      if (isset($_SESSION['customer'])) {
        echo '<p class="customer_name">ようこそ ', $_SESSION['customer']['name'], 'さん。</p>';
      } else{
      echo '<p class="customer_name">ようこそ ゲストさん。</p>';
      }
      ?>
</div> 