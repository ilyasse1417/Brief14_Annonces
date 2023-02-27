<?php

$errors = [];

$client = getUser();
if (!$client) {
    header('Location: /home');
}
require_with('templates/my-announcements.html.php');
