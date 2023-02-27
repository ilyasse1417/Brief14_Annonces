<?php
if (!getUser()) {
    header("location:/login");
}
$image = null;
$errors = null;
if (isset($_GET["id"]) && isset($_GET['announcement_id'])) {
    $announcement_id = $_GET['announcement_id'];
    $id_image = $_GET["id"];
    $inst = $pdo->prepare("SELECT id FROM `image` WHERE  id = $id_image");
    $inst->execute();
    $image = $inst->fetch(PDO::FETCH_ASSOC);

    // dd($image);

    if ($image) {
        $inst = $pdo->prepare("DELETE FROM `image` WHERE  id = $id_image ");
        $inst->execute();
        header("location: /edit/?id=" . $announcement_id);
        die();
    }
}

header("location:/home");
