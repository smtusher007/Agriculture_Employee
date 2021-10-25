<?php 

	require_once('header.php');
	session_start();
	setcookie('flag', 'true', time()-10, '/');
	header('location: Login.php');

?>