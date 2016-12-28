<?php

class Database extends Rippy{

	private $timeout=0;

	function __construct(){
		if(PHPVER == '5.4-') require_once './core/redbean3/rb.php';
		else require_once './core/redbean/rb.phar'; 
		$this->setConfig();
		$this->connect();
	}
	function __destruct(){
		$this->disconnect();
	}
	private function connect(){
	
		$db = $this->getConfig('database');
		R::setup("mysql:host=".$db['dbhost'].";dbname=".$db['dbname']."",$db['dbusername'],$db['dbpass']); //mysql or mariaDB
		//R::debug(true);
	}
	private function disconnect(){
	
		R::close();
	
	}
}

?>