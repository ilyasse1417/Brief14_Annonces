

<?php
session_start();
require 'includes/functions.php';

not_auth_redirect();


require 'includes/conn.php';




if(auth()){


$id = 	$_SESSION['id'];

$user = $conn
->query("SELECT * FROM `client` WHERE client_id = $id  ")
->fetch(PDO::FETCH_ASSOC);

print_r($user);
}










require 'includes/navbar.php';


  
	require_with('includes/miniheader.php', array('pagename' => 'your profile mr ' . $user["firstname"]));




	


?>












<?php
require 'includes/footer.php';


?>