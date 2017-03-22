<?php 

require_once 'function.php';

if (empty($_POST['id'])) {
	die('id is empty');
}

$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];

connectDB();
mysql_query("UPDATE users SET name = '$name', age = '$age' WHERE id = $id");
if (mysql_errno()) {
	echo mysql_error();
}else{
	header("location:allusers.php");
}

 ?>