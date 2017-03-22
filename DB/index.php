<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php

$conn = mysql_connect('localhost','root','');
if ($conn) {
	mysql_select_db('myapp',$conn);
	$res = mysql_query('SELECT id, name FROM users');
	//$res_arr = @mysql_fetch_array($res);
	//print_r($res_arr);
	//echo "data number:".mysql_num_rows($res);
	$data_count = mysql_num_rows($res);
	for ($i=0; $i < $data_count; $i++) { 
		print_r(mysql_fetch_assoc($res));
	}
}else{
	echo "failed";
}


 ?>
</body>
</html>

