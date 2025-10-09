<?php
// session_dump.php — remove after debugging
if (session_status() === PHP_SESSION_NONE) { session_start(); }

function h($v) { return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); }
function mask_if_sensitive(string $key, $val) {
  foreach (['password','pwd','token','secret','apikey','api_key','authorization','auth','hash'] as $needle) {
    if (stripos($key, $needle) !== false) return '***';
  }
  return $val;
}
function render_val($val): string {
  if (is_bool($val))   return $val ? 'true' : 'false';
  if ($val === null)   return 'null';
  if (is_scalar($val)) return h($val);
  // arrays/objects as pretty JSON
  return '<pre style="margin:0">'.h(json_encode($val, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE)).'</pre>';
}
?>
<!doctype html><html><head><meta charset="utf-8">
<title>Session Dump</title>
<style>
  body { font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif; margin:24px; }
  table { width:100%; border-collapse:collapse; }
  th, td { text-align:left; padding:8px 10px; border-bottom:1px solid #eee; vertical-align:top; }
  th { background:#f6f6f6; }
  .muted { color:#666; }
</style>
</head><body>
  <h1>$_SESSION (<?= count($_SESSION) ?> keys)</h1>
  <table>
    <tr><th style="width:28%">Key</th><th style="width:12%">Type</th><th>Value</th></tr>
    <?php if (empty($_SESSION)): ?>
      <tr><td colspan="3" class="muted">No session variables set.</td></tr>
    <?php else: ?>
      <?php foreach ($_SESSION as $k => $v): ?>
        <?php $display = mask_if_sensitive((string)$k, $v); ?>
        <tr>
          <td><code><?= h((string)$k) ?></code></td>
          <td class="muted"><?= h(gettype($v)) ?></td>
          <td><?= render_val($display) ?></td>
        </tr>
      <?php endforeach; ?>
    <?php endif; ?>
  </table>
</body></html>
