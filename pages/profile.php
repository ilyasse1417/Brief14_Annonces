<?php

$errors = [];
$messages = [];

$client = getUser();
if (!$client) {
    header('Location: /home');
}

if ($_SERVER['REQUEST_METHOD']  == 'POST') {
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);

    $sql = "UPDATE  client SET `firstname` =:firstname ,`lastname` =:lastname,`email`=:email,`phone`=:phone,`updated_at`=:updated_at WHERE id=:id";

    // dd($sql);
    $inst = $pdo->prepare($sql);
    $now = date('Y-m-d H:i:s');
    $inst->bindParam(':id', $client['id']);
    $inst->bindParam(':firstname', $firstname);
    $inst->bindParam(':lastname', $lastname);
    $inst->bindParam(':email', $email);
    $inst->bindParam(':phone', $phone);
    $inst->bindParam(':updated_at', $now);
    $inst->execute();
    $pdo = null;

    $client = $_SESSION['client'] = [
        'id' => $client['id'],
        'firstname' => $firstname,
        'lastname' => $lastname,
        'email' => $email,
        'phone' => $phone,
    ];

    $messages[] = "Votre profil a été modifié.";
};


require_with('templates/profile.html.php', [
    'client' => $client,
    'errors' => $errors,
    'messages' => $messages
]);
