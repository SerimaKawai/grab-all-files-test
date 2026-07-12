<?php
$status = isset($_GET['status']) ? (int) $_GET['status'] : 200;
if (!in_array($status, [200, 401, 403, 404, 429, 500, 503], true)) {
    $status = 400;
}
http_response_code($status);
if ($status === 429 || $status === 503) {
    header('Retry-After: 1');
}
header('Content-Type: text/html; charset=UTF-8');
?>
<!doctype html><html lang="ja"><head><meta charset="utf-8"><title>HTTP <?= htmlspecialchars((string) $status, ENT_QUOTES, 'UTF-8') ?></title></head>
<body><main><h1>HTTP <?= htmlspecialchars((string) $status, ENT_QUOTES, 'UTF-8') ?></h1><p>再試行とエラー処理の検証用です。</p></main></body></html>
