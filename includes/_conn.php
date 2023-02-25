<?php

$config = require_once realpath(__DIR__ . '/../config.local.php');
$dbConfig = $config['database'];

try {
  $conn = new PDO('mysql:host=' . $dbConfig['host'] . ';dbname=' . $dbConfig['name'], $dbConfig['user'], $dbConfig['password']);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
