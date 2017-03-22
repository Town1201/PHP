<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	if (isset($_GET['name'])) {
		echo "hello".$_GET['name'];
	}else{
		echo "empty!";
	}

	 ?>
</body>
</html>

