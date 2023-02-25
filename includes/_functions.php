<?php
function require_with($pg, $vars)
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

function renderView($templateName, $data)
{
	$template = realpath(__DIR__ . '/../templates/' . $templateName);
	if (!is_file($template)) {
		throw new \RuntimeException('Template not found: ' . $template);
	}

	// define a closure with a scope for the variable extraction
	$result = function ($file, array $data = array()) {
		ob_start();
		extract($data, EXTR_SKIP);
		try {
			include $file;
		} catch (\Exception $e) {
			ob_end_clean();
			throw $e;
		}
		return ob_get_clean();
	};

	// call the closure
	echo $result($template, $data);
}



function runApp()
{
	$uri = trim($_SERVER['REQUEST_URI'], '/');
	if (!$uri) {
		$uri = 'page/home';
	}
	$explode = explode('/', $uri);
	if (count($explode) < 2) {
		$explode = ['page', '404'];
	}
	$pageName = $explode[1];
	$file = realpath(__DIR__ . '/../pages/' . $pageName . '.php');

	if (file_exists($file)) {
		dump($file);
		require_once $file;
	} else {
		require_once realpath(__DIR__ . '/../pages/404.php');
	}
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


function findClient()
{
	$inst = $this->db->prepare("SELECT * FROM announcement ORDER BY created_at DESC");
	$inst->execute();
	$annonces = $inst->fetchall(\PDO::FETCH_OBJ);
	$listannonces = array();
	foreach ($annonces as $annonce) {
		$annonce = $this->_sdtClassToAnnonceObject($annonce);
		array_push($listannonces, $annonce);
	}
	return $listannonces;
}
