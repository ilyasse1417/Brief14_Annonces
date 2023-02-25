<?php
session_start();

require_once realpath(__DIR__ . '/includes/_functions.php');
require_once realpath(__DIR__ . '/includes/_conn.php');
require_once realpath(__DIR__ . '/includes/_header.php');
require_once realpath(__DIR__ . '/includes/_navbar.php');

// Content
$uri = trim($_SERVER['REQUEST_URI'], '/');
if (!$uri) {
  $uri = 'page/home';
}
$explode = explode('/', $uri);
if (count($explode) < 2) {
  $explode = ['page', '404'];
}
$pageName = $explode[1];
$file = realpath(__DIR__ . '/pages/' . $pageName . '.php');

if (file_exists($file)) {
  // dump($file);
  require_once $file;
} else {
  require_once realpath(__DIR__ . '/pages/404.php');
}

// Footer
require_once realpath(__DIR__ . '/includes/_footer.php');
