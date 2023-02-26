<?php
$errors = [];
$announcement = [];
$images = [];

if (isset($_GET["id"])) {
	$id = $_GET["id"];
	$inst = $pdo->prepare("SELECT announcement.*, client.phone FROM `announcement` join client on announcement.client_id = client.id WHERE  announcement.id = $id ");
	$inst->execute();
	$announcement = $inst->fetch(PDO::FETCH_ASSOC);

	$inst = $pdo->prepare("SELECT file_name, type FROM `image` WHERE  announcement_id = $id ");
	$inst->execute();
	$images = $inst->fetchAll(PDO::FETCH_ASSOC);
} else {
	$errors[] = 'Aucune donnée.';
}
// rendre la vue
require_with('templates/details.html.php', [
	'errors' => $errors,
	'announcement' => $announcement,
	'images' => $images
]);
