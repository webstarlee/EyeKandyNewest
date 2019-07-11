<?php
/**
Eyekandi main class that will trigger all things
*/
abstract class EyeKandi{
	protected function __construct(){}
	/*
	@ Init function that trigger when the there loaded
	*/
	public static function init(){ self::getObj('Users'); }
	/*
	* Creating object for any class
	*/
	public static function getObj($class_name,$methods = array()){
		include_once('class-users.php');
		
		if(!empty($methods)){
			// var_dump($class_name);
			// exit(0);
			return new $class_name($methods);
			
			
		}else{
			// var_dump($class_name);
			// exit(0);
			return new $class_name;
		
		}
		 
	}
	
}
?>