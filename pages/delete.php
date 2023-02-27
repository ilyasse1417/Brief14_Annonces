<?php
if (!getUser()) {
    header("location:/login");
}
$announcement = null;
$images = null;
$errors = null;
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $inst = $pdo->prepare("SELECT announcement.*, client.phone FROM `announcement` join client on announcement.client_id = client.id WHERE  announcement.id = $id ");
    $inst->execute();
    $announcement = $inst->fetch(PDO::FETCH_ASSOC);

    if (!$announcement) {
        header("location:/home");
    }

    $inst = $pdo->prepare("DELETE FROM `image` WHERE  announcement_id = $id ");
    $inst->execute();
    $inst = $pdo->prepare("DELETE FROM `announcement` WHERE  id = $id ");
    $inst->execute();
}


header("location:/my-announcements");
