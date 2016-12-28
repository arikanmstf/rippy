<?php
$ref;
$error_messages = Array(

	"unknown_url" =>"Unknown Url: Please check the url.",
	"unknown_language_string"=>"Unknown Language String: Please make sure that you have corrent language",
	"invalid_login"=>"Sorry, username and password not matches",
	'unknown_language'=>'Sorry but  requested language not found.Please check the url',
	'forbidden'=>'Access Denied',
	'login' => 'Please Login',
	'logout'=>'Please Logout'

);

//$message = $error_messages[$ref];
switch($ref){
	
	case 'unknown_url':
		//TMSN::loadModel('html');
		//$html = new Html();
		//$html->load('error/404');
		exit("unknown_url");
	break;
	
	case 'login':
		TMSN::loadModel('html');
		//$db = $this::$Database;
		$html = new Html();
		$html->load('login/page');
		exit();
	break;
	
	case 'forbidden':
		TMSN::loadModel('html');
		$html = new Html();
		$html->load('error/403');
		exit();
	break;
	
	default : die(isset($error_messages[$ref]) ? $error_messages[$ref] : $ref );
}
?>