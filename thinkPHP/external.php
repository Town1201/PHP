<?php 
namespace lz;
include "lz.class.php";

use test\lz;

//不使用Use
$class = new \test\lz();
$class->a();

//使用Use
$class = new lz();
$class->a();

 ?>