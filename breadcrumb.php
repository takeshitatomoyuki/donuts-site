<?php
if (!isset($breadcrumb_items)) {
    $breadcrumb_items = [];
}
?>

<nav class="nav">
  <ol class="breadcrumb">
    <?php foreach ($breadcrumb_items as $item): ?>
      <li>
        <?php if (!empty($item['url'])): ?>
          <a href="<?= htmlspecialchars($item['url']) ?>"><?= htmlspecialchars($item['label']) ?></a>
        <?php else: ?>
          <?= htmlspecialchars($item['label']) ?>
        <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ol>
</nav>
