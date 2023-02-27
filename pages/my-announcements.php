<?php

$errors = [];

$client = getUser();
if (!$client) {
    header('Location: /home');
}

$sql = "SELECT `announcement`.*, `image`.file_name 
FROM `announcement` 
LEFT JOIN `image` ON announcement.`id` = image.announcement_id  AND  image.type = 'primary' 
WHERE client_id = " . $client['id'];

$inst = $pdo->prepare($sql);
$inst->execute();
$announcements = $inst->fetchall(PDO::FETCH_ASSOC);

// rendre la vue
require_with('templates/my-announcements.html.php', [
    'announcements' => $announcements
]);
