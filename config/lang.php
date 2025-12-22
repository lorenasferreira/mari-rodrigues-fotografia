<?php
$lang = $_GET['lang'] ?? 'en';

$availableLangs = ['en', 'pt', 'es', 'ca'];
if (!in_array($lang, $availableLangs)) {
  $lang = 'en';
}

$translations = json_decode(
  file_get_contents(__DIR__ . "/lang/$lang.json"),
  true
);

function t($key) {
  global $translations;
  return $translations[$key] ?? $key;
}
?>
