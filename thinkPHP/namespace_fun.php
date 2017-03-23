<?php 
namespace lz;//命名空间，解决函数或类命名冲突问题

function var_dump(){
	echo "1";
}
//默认使用命名空间之下的方法和类
var_dump();

//使用系统函数之下的函数
$name = 100;
\var_dump($name);

 ?>