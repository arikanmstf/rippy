<?php
if(!defined('APPURL')) exit('No direct script access allowed');

Class Lang extends Rippy{

	public $language;
	private $lang_array = Array();

	function __construct(){
	
		$this->setConfig();
		$s = parent::$Session;
		$default_lang = ($s->get('user_default_language') ) ? $s->get('user_default_language') : $this->getConfig('default_language');
		define('ML_LANGUAGE',$default_lang);
		$this->language = $default_lang;
		$this->lang_array = $this->load();
	}
	function g($key=false){
	
		 return 
		 ($key)? 
			isset($this->lang_array[$key]) ? 
				$this->lang_array[$key] 
				: $key
			:$this->lang_array;
	
	}
	/**
		function loadLang() : 
		İstenilen dil dizisini verir.
		* @param String ~ dil idsi,yüklü dilleri görmek için ./config/language klasörüne bakın ;
		* Returns : @var Array() ~Yüklenmiş dili barındıran dizi;
	**/
	private function load(){
		$l = $this->language;
		if(file_exists("./core/config/language/$l.php")){
			include("./core/config/language/$l.php");
		}else{
			return false;
		}
		return $lang;
	}
	public static function loadLang($l){
		if(file_exists("./config/language/$l.php")){
			include("./config/language/$l.php");
		}else{
			return false;
		}
		return $lang;
	}

}

?>