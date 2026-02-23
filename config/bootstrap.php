<?php

session_start();

require_once __DIR__ . '/db_connect.php';
require_once __DIR__ . '/config.php';

$availableLangs = ['en', 'pt', 'es', 'ca'];

if (isset($_GET['lang']) && in_array($_GET['lang'], $availableLangs)) {
    $_SESSION['lang'] = $_GET['lang'];
}

$lang = $_SESSION['lang'] ?? 'en';

$translations = json_decode(
    file_get_contents(__DIR__ . "/../lang/$lang.json"),
    true
);

function t(string $key): string
{
    global $translations;
    return $translations[$key] ?? $key;
}