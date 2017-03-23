<?php 
namespace lz;
function var_dump(){
	echo "string1";
}

var_dump();

namespace lz2;
function var_dump(){
	echo "string2";
}

var_dump();

//跨命名空间的调用
\lz\var_dump();

//输出当前命名空间
echo __NAMESPACE__;

 ?>