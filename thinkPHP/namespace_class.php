<?php 
namespace lz;
/**
* 
*/
class PDO
{
	
	public function a(){
		echo "string";
	}
}

$pdo = new PDO();
$pdo->a();
$pdo = new \PDO('mysql:host=localhost;daname=myapp','root','');
var_dump($pdo);


 ?>