<?php
if(!defined('APPURL')) exit('No direct script access allowed');

Class Error extends Rippy{

	var $errors = Array(
	
		"1" => " Model File Not Found: ",
		"2" => " View File Not Found: ",
		"3" => " Controller File Not Found: ",
		"4" => " Core File Not Found: ",
		"5" => " Permission Denied: "
	
	);

	function __construct(){
	
	
	
	}
	public function s($errno,$var=false){
	
	
		die ( $this->errors[$errno].$var );
	
	
	}
	


}