<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

require 'includes/_functions.php';
require 'includes/_conn.php';
require 'includes/_header.php';
require 'includes/_navbar.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');
if (!$uri) {
  $uri = 'home';
}
$explodeUri = explode('/', $uri);

$file =  'pages/' . $explodeUri[0] . '.php';

if (file_exists($file)) {
  require $file;
} else {
  require 'pages/404.php';
}

// footer
require 'includes/_footer.php';
