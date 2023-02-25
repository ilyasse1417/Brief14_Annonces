<?php
session_start();

require 'includes/_functions.php';
require 'includes/_conn.php';
require 'includes/_header.php';
require 'includes/_navbar.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');
if (!$uri) {
  $uri = 'home';
}

$file =  'pages/' . $uri . '.php';

if (file_exists($file)) {
  require $file;
} else {
  require 'pages/404.php';
}

// footer
require 'includes/_footer.php';
