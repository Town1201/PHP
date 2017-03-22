<?php
require_once 'function.php'
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<table>
	<a href="adduser.html">添加用户</a>
	<tr>
	<th>id</th>
	<th>name</th>
	<th>age</th>
	</tr>
<?php
	$conn = connectDB();
	$result = mysql_query("SELECT * FROM users ORDER BY id DESC",$conn);
	$dataCount = mysql_num_rows($result);
	echo $dataCount;
	for ($i=0; $i < $dataCount; $i++) {
		$result_arr = mysql_fetch_assoc($result);
		$id = $result_arr['id'];
		$name = $result_arr['name'];
		$age = $result_arr['age'];
		echo"<tr>
		<td>$id</td>
		<td>$name</td>
		<td>$age</td>
		<td><a href='updateUser.php?id=$id'>update</a></td>
		<td><a href='deleteUser.php?id=$id'>DELETE</a></td>
		</tr>";

	}
	echo "</table>";
 ?>
</body>
</html>