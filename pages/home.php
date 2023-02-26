<?php

$inst = $pdo->prepare("SELECT `announcement`.*, `image`.file_name FROM `announcement` JOIN `image` ON announcement.`id` = image.announcement_id  WHERE  image.type = 'primary'");
$inst->execute();
$announcements = $inst->fetchall(PDO::FETCH_ASSOC);

// rendre la vue
require_with('templates/home.html.php', [
    'announcements' => $announcements
]);
