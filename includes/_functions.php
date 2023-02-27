<?php
function require_with($pg, $vars = [])
{
	extract($vars);
	require $pg;
}

function auth()
{
	if (isset($_SESSION['client'])) {
		return true;
	}
}


function getUser()
{
	if (isset($_SESSION['client'])) {
		return $_SESSION['client'];
	}

	return false;
}


function not_auth_redirect()
{
	if (!auth()) {
		header("location:login.php");
	}
}

function auth_redirect()
{
	if (auth()) {
		header("location:profile.php");
	}
}

function dd($var = null)
{
	if (is_null($var)) {
		die();
	}
	echo "dd =>";
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	die();
}

function dump($var)
{
	echo "dump =>";
	echo '<pre>';
	print_r($var);
	echo '</pre>';
}

function instert_client($pdo, $data)
{
	$inst = $pdo->prepare(
		"INSERT INTO client (`firstname`,`lastname`,`email`,`password`,`phone`,`created_at`,`updated_at`) 
    	VALUES(:firstname,:lastname,:email,:_password, :phone,:created_at, :updated_at)"
	);

	$now =  date('Y-m-d H:i:s');
	$pwd = md5($data['password']);
	$inst->bindParam(':firstname', $data['firstname']);
	$inst->bindParam(':lastname', $data['lastname']);
	$inst->bindParam(':email', $data['email']);
	$inst->bindParam(':phone', $data['phone']);
	$inst->bindParam(':_password', $pwd);
	$inst->bindParam(':created_at', $now);
	$inst->bindParam(':updated_at', $now);
	$inst->execute();
	$id = $pdo->lastInsertId();
	$pdo = null;
	return $id;
}

function flash_message($type, $message)
{
	if (isset($_SESSION['flash_message'])) {
		$message = $_SESSION['flash_message'];
		unset($_SESSION['flash_message']);
		return $message;
	}
	return null;
}
