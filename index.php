<?php
session_start();

require_once realpath(__DIR__ . '/includes/_functions.php');
require_once realpath(__DIR__ . '/includes/_conn.php');
require_once realpath(__DIR__ . '/includes/_header.php');
require_once realpath(__DIR__ . '/includes/_navbar.php');

// run App here
runApp();

require_once realpath(__DIR__ . '/includes/_footer.php');


function runApp()
{
  $uri = trim($_SERVER['REQUEST_URI'], '/');
  if (!$uri) {
    $uri = 'page/home';
  }
  $explode = explode('/', $uri);
  if (count($explode) < 2) {
    die('error 404 - missing data');
  }
  $pageName = $explode[1];
  $file = __DIR__ . '/pages/' . $pageName . '.php';

  if (file_exists($file)) {
    require_once realpath(__DIR__ . '/pages/' . $pageName . '.php');
  } else {
    require_once realpath(__DIR__ . '/pages/404.php');
  }
}
