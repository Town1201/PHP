<?php 

if (!isset($_POST['name'])) {
	die('username not found');
}

if (!isset($_POST['age'])) {
	die('userage not found');
}

$name = $_POST['name'];
if (empty($name)) {
	die('user name is empty');
}
$age = $_POST['age'];
if (empty($age)) {
	die('user age is empty');
}

require_once 'function.php';
$conn = connectDB();

mysql_query("INSERT INTO users(name,age) VALUES ('$name','$age')");
if (mysql_errno()) {
	echo mysql_error();
}

header('Location:allusers.php');

 ?>