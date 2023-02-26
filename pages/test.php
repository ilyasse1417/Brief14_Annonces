<?php
$errors = [];
$annonce = [
    'id' => 1,
    'title' => 'Mon annonce'
];

require_with('templates/test.html.php', ['annonce' => $annonce]);
