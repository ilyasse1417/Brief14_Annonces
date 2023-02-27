<?php

$errors = [];

$client = getUser();
if (!$client) {
    header('Location: /home');
}

$where = " AND client_id = " . $client['id'];
$sql = "SELECT `announcement`.*, `image`.file_name FROM `announcement` JOIN `image` ON announcement.`id` = image.announcement_id  WHERE  image.type = 'primary' ";
$sql .= $where;

$inst = $pdo->prepare($sql);
$inst->execute();
$announcements = $inst->fetchall(PDO::FETCH_ASSOC);

// rendre la vue
require_with('templates/my-announcements.html.php', [
    'announcements' => $announcements
]);
