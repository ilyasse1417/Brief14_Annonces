<?php
require_once realpath(__DIR__ . '/includes/_app.php');
require_once realpath(__DIR__ . '/includes/_header.php');
require_once realpath(__DIR__ . '/includes/_navbar.php');



if ($_SERVER['REQUEST_METHOD']  == 'POST') {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $verifypassword = $_POST['verifypassword'];
  $phone = $_POST['phone'];

  $errors =[];

  // TODO check form 

  $sql = "INSERT INTO `client` (`firstname`, `lastname`, `email`, `password`, `phone`)
 VALUES
  ('$firstname', '$lastname' , '$email' , '$password' , '$phone')";
  // execute a query
  $conn->exec($sql);
  $_SESSION['client'] = $conn->query("SELECT * FROM client WHERE email = '$email' ")->fetch();

  // fetch all rows
  header("location:profile.php");
};


// rendre la vue
$data = ['name' => 'rachid'];
renderView('register.html.php', $data);


require_once realpath(__DIR__ . '/includes/_footer.php');
