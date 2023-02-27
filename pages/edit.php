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

    $inst = $pdo->prepare("SELECT file_name,id, type FROM `image` WHERE  announcement_id = $id ");
    $inst->execute();
    $images = $inst->fetchAll(PDO::FETCH_ASSOC);
} else {
    $errors[] = 'Aucune donnée.';
}

if ($_SERVER['REQUEST_METHOD']  == 'POST') {

    $images = [];
    $total_count = count($_FILES['files']['name']);
    for ($i = 0; $i < $total_count; $i++) {
        if (!$_FILES["files"]["tmp_name"][$i]) continue;
        $dir = realpath(__DIR__ . '/../uploads');
        $tmp_name = $_FILES["files"]["tmp_name"][$i];
        $ext = pathinfo($_FILES['files']['name'][$i], PATHINFO_EXTENSION);
        $newName =  uniqid() . '.' . $ext; // TODO voir
        $newNameFileFullPath = $dir . '/' . $newName;

        try {
            move_uploaded_file($tmp_name, $newNameFileFullPath);
            $images[] = $newName;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    $data = $_POST;

    $inst = $pdo->prepare(
        "UPDATE announcement SET `title`=:title, `price`=:price, `category`=:category, `type`=:type,`city`=:city, `address`=:address, `postal_code`=:postal_code, `superficie`=:superficie, `updated_at`=:updated_at WHERE id=:id"
    );
    $announcement_id = $announcement['id'];
    $now =  date('Y-m-d H:i:s');
    $inst->bindParam(':id', $announcement_id);
    $inst->bindParam(':title', $data['title']);
    $inst->bindParam(':price', $data['price']);
    $inst->bindParam(':category', $data['category']);
    $inst->bindParam(':type', $data['type']);
    $inst->bindParam(':city', $data['city']);
    $inst->bindParam(':address', $data['address']);
    $inst->bindParam(':postal_code', $data['postal_code']);
    $inst->bindParam(':superficie', $data['superficie']);
    $inst->bindParam(':updated_at', $now);
    $inst->execute();

    // insert les images
    foreach ($images as $k => $imageName) {

        $inst = $pdo->prepare(
            "INSERT INTO image (`file_name`, `type`, `announcement_id`, `created_at`, `updated_at`) 
    	    VALUES(:file_name, :type, :announcement_id,:created_at, :updated_at)"
        );
        $type = null;
        if ($k == 0) {
            // $type = 'primary';
        }
        $inst->bindParam(':file_name', $imageName);
        $inst->bindParam(':type', $type);
        $inst->bindParam(':announcement_id', $announcement_id);
        $inst->bindParam(':created_at', $now);
        $inst->bindParam(':updated_at', $now);
        $inst->execute();
    }

    $pdo = null;

    header("location:/my-announcements");
}

// rendre la vue
$data = ['errors' => $errors];
require_with('templates/edit.html.php', [
    'errors' => $errors,
    'announcement' => $announcement,
    'images' => $images
]);
