<?php

class View extends Rippy {

	function __construct($conf=false,$time_out=false){
		
		$this->setConfig();

	}
	public function load($path,$data=false){
		$theme = $this->getConfig('theme');
		
		if($data && is_array($data)) extract($data);
		
		if(!@include("./view/$theme/$path.php")) parent::$Error->s('2',$path);
	}
}
?>