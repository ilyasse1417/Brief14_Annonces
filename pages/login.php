<?php

$errors = [];
if ($_SERVER['REQUEST_METHOD']  == 'POST') {
    $email = trim($_POST['email']);
    $password = md5($_POST['password']);

    $inst = $pdo->prepare("SELECT * FROM client WHERE `email` = '$email' AND `password`= '$password'");
    $inst->execute();
    $client = $inst->fetch(PDO::FETCH_ASSOC);

    if ($client) {
        // TODO refactoring
        $_SESSION['client'] = [
            'id' => $client['id'],
            'firstname' => $client['firstname'],
            'lastname' => $client['lastname'],
            'email' => $client['email'],
            'phone' => $client['phone'],
        ];
    } else {
        $errors[] = 'Email et/ou mot de passe incorrect(s).';
    }

    if (!$errors) {
        header("location:/");
    }
};
$data = ['errors' => $errors];
require_with('templates/login.html.php', $data);
