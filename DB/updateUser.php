<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php

require_once 'function.php';

if (!empty($_GET['id'])) {
	connectDB();
	$id = $_GET['id'];
	$result = @mysql_query("SELECT * FROM users WHERE id = $id");
	if (mysql_errno()) {
		echo mysql_error();
	}
	$arr = mysql_fetch_assoc($result);
	print_r($arr);
}else{
	die('id not found');
}

 ?>

 <form action="updateServer.php" method="post">
 		<label for="">ID:</label>
		<input type="text" name="id" value="<?php echo $arr['id'];?>">
		<br>
 		<label for="">name:</label>
		<input type="text" name="name" value="<?php echo $arr['name'];?>">
		<br>
		<label for=""> age :</label>
		<input type="text" name="age" value="<?php echo $arr['age'];?>">
		<br>
		<input type="submit">
 </form>	
</body>
</html>
