<?php

$errors = [];
if ($_SERVER['REQUEST_METHOD']  == 'POST') {
  // @TODO use trim
  $data = [
    'firstname' => $_POST['firstname'],
    'lastname' => $_POST['lastname'],
    'email' => $_POST['email'],
    'password' => $_POST['password'],
    'verifypassword' => $_POST['verifypassword'],
    'phone' => $_POST['phone'],
  ];

  if ($_POST['verifypassword'] !=  $_POST['password']) {
    $errors[] = 'Les deux mot de passe ne matchent pas !';
  }
  // @TODO add validation server side
  // @TODO check if user is already exist

  if ($errors) {
    // silence
  } else {
    $id = instert_client($pdo, $data);
    $_SESSION['client'] = [
      'id' => $id,
      'firstname' => $_POST['firstname'],
      'lastname' => $_POST['lastname'],
      'email' => $_POST['email'],
      'phone' => $_POST['phone'],
    ];
    header("location:/home");
  }
};


// rendre la vue
$data = ['errors' => $errors];
require_with('templates/register.html.php', $data);
