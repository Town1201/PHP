<?php 

// $f = fopen('data', 'w');
// if ($f) {
// 	fwrite($f, 'hello php');
// 	fclose($f);
// }

$f = fopen('data', 'r');
if ($f) {
	$content = fgets($f);
	fclose($f);
}

echo $content;
 ?>