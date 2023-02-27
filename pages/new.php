<?php
if (!getUser()) {
    header("location:/login");
}
$errors = [];
if ($_SERVER['REQUEST_METHOD']  == 'POST') {

    $images = [];
    $total_count = count($_FILES['files']['name']);
    for ($i = 0; $i < $total_count; $i++) {
        $dir = realpath(__DIR__ . '/../uploads');
        $tmp_name = $_FILES["files"]["tmp_name"][$i];
        $ext = pathinfo($_FILES['files']['name'][$i], PATHINFO_EXTENSION);
        $newName =  uniqid() . '.' . $ext; // TODO voir
        $newNameFileFullPath = $dir . '/' . $newName;
        // dd($newNameFileFullPath);

        try {
            $move = move_uploaded_file($tmp_name, $newNameFileFullPath);
            var_dump($move);
            echo $_FILES["files"]["error"][$i];
            $images[] = $newName;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    $data = $_POST;

    $inst = $pdo->prepare(
        "INSERT INTO announcement (`title`, `price`, `category`, `type`,`city`, `address`, `postal_code`, `client_id`, `superficie`, `created_at`, `updated_at`) 
    	VALUES(:title, :price, :category, :type, :city, :address, :postal_code, :client_id, :superficie, :created_at, :updated_at)"
    );

    $client_id = getUser()['id'];
    $now =  date('Y-m-d H:i:s');
    $inst->bindParam(':title', $data['title']);
    $inst->bindParam(':price', $data['price']);
    $inst->bindParam(':category', $data['category']);
    $inst->bindParam(':type', $data['type']);
    $inst->bindParam(':city', $data['city']);
    $inst->bindParam(':address', $data['address']);
    $inst->bindParam(':postal_code', $data['postal_code']);
    $inst->bindParam(':client_id', $client_id);
    $inst->bindParam(':superficie', $data['superficie']);
    $inst->bindParam(':created_at', $now);
    $inst->bindParam(':updated_at', $now);
    $inst->execute();
    $announcement_id = $pdo->lastInsertId();


    // insert les images
    foreach ($images as $k => $imageName) {

        $inst = $pdo->prepare(
            "INSERT INTO image (`file_name`, `type`, `announcement_id`, `created_at`, `updated_at`) 
    	    VALUES(:file_name, :type, :announcement_id,:created_at, :updated_at)"
        );
        $type = null;
        if ($k == 0) {
            $type = 'primary';
        }
        $inst->bindParam(':file_name', $imageName);
        $inst->bindParam(':type', $type);
        $inst->bindParam(':announcement_id', $announcement_id);
        $inst->bindParam(':created_at', $now);
        $inst->bindParam(':updated_at', $now);
        $inst->execute();
    }

    $pdo = null;

    header("location:/home");
}


// rendre la vue
$data = ['errors' => $errors];
require_with('templates/new.html.php', $data);
