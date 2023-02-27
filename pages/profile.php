<?php

$errors = [];

$client = getUser();
if (!$client) {
    header('/home');
}



require_with('templates/profile.html.php', [
    'client' => $client,
    'errors' => $errors,
]);
