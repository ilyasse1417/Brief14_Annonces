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


  // @TODO check errors like :  $errors = ['firstname' => 'Valeur invalide'];

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
