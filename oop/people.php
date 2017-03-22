<?php 
/**
* 
*/
class People
{
	/**
	 * @param $age 年龄
	 *@param $name 名字
	 */

	public function __construct($age, $name)
	{
		$this->_age = $age;
		$this->_name = $name;
		$this->_sex = $_sex;	
		if (People::$NUMBER > People::MAX_NUMBER) {
			throw new Exception("Error Processing Request", 1);
			
		}
	}

	public function getAge(){
		return $this->_age;
	}

	public function getName(){
		return $this->_name;
	}

	public function getSex(){
		return $this->_sex;
	}

	private $_age, $_name, $_sex;
	private static $NUMBER = 10;
	const MAX_NUMBER = 200;

	public static function sayHello(){
		echo "static";
	}
}

 ?>