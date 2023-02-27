<?php


$where = '';
if (isset($_GET['search'])) {
    $city = trim($_GET['city']);
    $price_min = trim($_GET['price_min']);
    $price_max =  trim($_GET['price_max']);
    $category = trim($_GET['category']);
    $type = trim($_GET['type']);
    $trier_par = trim($_GET['trier_par']);

    if ($city) {
        $where .= " AND city = '$city'";
    }
    if ($category) {
        $where .= " AND category = '$category'";
    }
    if ($type) {
        $where .= " AND `announcement`.`type` = '$type'";
    }
    if ($price_max) {
        $where .= " AND `announcement`.`price` <= '$price_max'";
    }
    if ($price_min) {
        $where .= " AND `announcement`.`price` >= '$price_min'";
    }
    if ($trier_par) {
        $where .= " ORDER BY $trier_par";
    }
}

if (isset($_GET['reset'])) {
    $_GET = [];
    $where = '';
}

$sql = "SELECT `announcement`.*, `image`.file_name FROM `announcement` LEFT JOIN `image` ON announcement.`id` = image.announcement_id  AND  image.type = 'primary' ";
if ($where) {
    $sql .= $where;
}

$inst = $pdo->prepare($sql);
$inst->execute();
$announcements = $inst->fetchall(PDO::FETCH_ASSOC);

// rendre la vue
require_with('templates/home.html.php', [
    'announcements' => $announcements
]);
