<?php
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$page = max(1, min(500, $page));
header('Content-Type: text/html; charset=UTF-8');
?>
<!doctype html>
<html lang="ja">
<head><meta charset="utf-8"><title>大量ページ検証 <?= $page ?></title></head>
<body>
  <main class="wiki-content">
    <h1>大量ページ検証 <?= $page ?></h1>
    <p>100ページを超える収集、チェックポイント、IndexedDB保存を確認するための固有本文 <?= $page ?> です。</p>
  </main>
</body>
</html>
