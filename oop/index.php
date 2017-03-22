<?php 

// require 'hello.php';
// $i=new Hello();
// $i->sayHello();

// $desk = new Desktop();
// $desk->work();
require_once 'man.php';
$m = new Man(22,'name');
echo $m->getName();
Man::sayHello();
Man::MAX_NUMBER;

 ?>