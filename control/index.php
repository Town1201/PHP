<?php 

require 'lib.php';//引用lib.php重复引用会重复调用该文件，报错重复定义
//require_once //只引用一次

$num = 0;
$arr = array();
for ($i=0; $i < 5; $i++) { 
	$arr[$i] = $num;
	$num++;
}

print_r($arr);
sayHello();

 ?>