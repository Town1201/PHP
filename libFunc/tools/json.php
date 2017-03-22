<?php 


//eccode>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
$arr = array(1,2,3,4,array('a'=>'111','2'=>'222'));


//decode>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
$jsonStr = json_encode($arr); 
echo $jsonStr;

$obj = json_decode($jsonStr);

print_r($obj);

$jsonElem = '{"h":"hello","w":"wwo"}';
$elem = json_decode($jsonElem);
echo $elem->h;


 ?>