<?php

$errors = [];
if ($_SERVER['REQUEST_METHOD']  == 'POST') {

    $email = trim($_POST['email']);
    $password = md5(trim($_POST['password']));

    // TODO validation server inside and full $errors
    if ($errors) {
        // silence
    } else {
        $inst = $pdo->prepare("SELECT * FROM client WHERE email = :email AND password= :password");
        $inst->bindParam(':email', $email);
        $inst->bindParam(':password', $password);
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
    }
    if ($errors) {
        /// TODO traitement ici
    } else { // connexion OK
        header("location:/page/home");
    }
};
$data = ['errors' => $errors];
renderView('login.html.php', $data);
