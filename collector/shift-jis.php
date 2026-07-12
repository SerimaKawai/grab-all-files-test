<?php
header('Content-Type: text/html; charset=Shift_JIS');
$html = <<<'HTML'
<!doctype html><html lang="ja"><head><meta charset="Shift_JIS"><title>Shift_JIS章</title></head>
<body><main class="wiki-content"><h1>日本語文字コード</h1><p>文字化けせずに抽出できることを確認します。</p></main></body></html>
HTML;
echo mb_convert_encoding($html, 'SJIS-win', 'UTF-8');
