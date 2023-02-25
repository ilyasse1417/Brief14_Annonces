<?php
$errors = [];
$annonce = [
    'id' => 1,
    'title' => 'Mon annonce'
];

require_with('templates/rachid.html.php', ['annonce' => $annonce]);
