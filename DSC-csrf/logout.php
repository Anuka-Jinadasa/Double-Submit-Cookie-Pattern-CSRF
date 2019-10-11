<?php
	//loged out function
	session_start();
	session_unset();
	session_destroy();
	//destroy session and uset all the variables
	
	
	unset($_COOKIE['id_1']);
	setcookie('PHPSESSID');
    setcookie('id_1');
	setcookie('CSRFtoken',null, time() - 3600, "/");
	header("Location:index.php");
   	exit;


?>
