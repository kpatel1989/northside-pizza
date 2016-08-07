<?php
// Create user in db- CREATE USER 'admin'@'localhost' IDENTIFIED BY 'northside';
// Grant all privilleges GRANT ALL PRIVILEGES ON * . * TO 'admin'@'localhost';
class Config{
	public $settings = array(
		'servername' => "localhost",
		'username' => "admin",
        'password' => "northside",
		'database' => "northsidedb"
		);
	private $g_Config;

	public static function  getInstance(){
		if (!isset($g_Config)){
			$g_Config = new Config();
		}
		return $g_Config;
	}

	public function connect(){
		$con = mysqli_connect($this->settings['servername'],$this->settings['username'],$this->settings['password']) or die("Error " . mysqli_error($con));
		mysqli_select_db($con,$this->settings['database']);
		return $con;
	}

	public function disconnect($con){
		mysqli_close($con);
	}
	
	
}
?>