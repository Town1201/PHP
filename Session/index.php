<?php 
	
	session_start();
	$_SESSION['name'] = 'lz';
	//echo session_id();
	session_destroy();
	header('Location:a.php');
 ?>