<?php
require_once 'function.php';


if (!empty($_GET['id'])) {
	connectDB();
	$id = $_GET['id'];
	mysql_query("DELETE FROM users WHERE id = $id");
	if (mysql_errno()) {
		echo $id;
		echo mysql_error();
	}
	header("location:allusers.php");
}

?>