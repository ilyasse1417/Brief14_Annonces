<?php
function require_with($pg, $vars)
{
	extract($vars);
	require $pg;
}

function auth()
{
	if (isset($_SESSION['id'])) {
		return true;
	}
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
	$result = function ($file, array $data2 = array()) {
		ob_start();
		extract($data2, EXTR_SKIP);
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
