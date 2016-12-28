<?php
/**
	***	Rippy php library ***
		Author  : Mustafa Arıkan
		Version : 1.8.0
		Release : 18.01.2016
		Contact : arikan134@gmail.com
		Web 	: http://mustafaarikan.net

	*** Minimum System Requirements ***
		PHP   :	5.3
		Apache:	2.2.22
		
	*** Apache Modules ***
		rewrite_module (shared)

	*** PHP Modules ***
		~$: dpkg --get-selections | grep php5
		php5-mcrypt

**/


ini_set('display_errors', '1');
//ini_set('session.gc_maxlifetime', 3*60*60); // 3 hours
error_reporting (E_ALL ) ;
session_name("Rippy");
session_start();

/**
 * Main Rippy Class
 *
 * This is the main class of the system. include one time at index.php
 *
**/
class Rippy{
	
	/**
	 * Variables.
	 * @var $conf - Array : Contains the configurations of all system . To edit configurations
	 please check the file "./includes/config/config.php" file.
	 *
	 * @var $User - Object : Contains user class of all system. To edit User Class
	 please check the file "./core/User.class.php"
	 
	 * @var $Session - Object : Contains session class of all system. To edit Session Class
	 please check the file "./core/Session.class.php"
	 
	 * @var $Database - Object : Contains database class of all system. To edit Database Class
	 please check the file "./core/Database.class.php"
	 
	 * @var $Lang - Object : Contains language class of all system. To edit Lang Class
	 please check the file "./core/Lang.class.php"
	 
	 * @var $Error - Object : Contains error class of all system. To edit Error Class
	 please check the file "./core/Error.class.php"
	 
	 * @var $View - Object : Contains view class of all system. To edit View Class
	 please check the file "./core/View.class.php"
	 
	 
	**/
	protected $conf;
	protected static $User;
	protected static $Session;
	protected static $Database;
	protected static $Lang;
	protected static $Error;
	protected static $View;
	
	/**
	 * Constructor() :  
	 *
	**/
	function __construct(){


		Rippy::siteDefines();
		$this->loadCore('Error');
		$this->loadCore('Session');
		$this->loadCore('User');
		$this->loadCore('View');
		$this->loadCore('Lang');		
		
		
		$this::$User->setProps($this::$Session->get());
		
		$this::$User->setPermissions();
		
		$this->setConfig();
		
		
		$this::$Session->checkLoggedIn();
	}
	
	/**
	 * run() : Includes the controller file , if file not exists launchs error number 3
	 *
	**/
	public function run(){
		header("Content-Security-Policy: default-src 'self' ".INDEXURL."; script-src 'self' ".INDEXURL." 'unsafe-inline' 'unsafe-eval' https://connect.facebook.net http://connect.facebook.net http://ajax.googleapis.com http://www.google-analytics.com; connect-src 'self' ".INDEXURL."; img-src 'self' ".INDEXURL."; style-src 'self' ".INDEXURL." 'unsafe-inline' http://fonts.googleapis.com;font-src 'self' ".INDEXURL." http://fonts.gstatic.com ;frame-src 'self' ".INDEXURL." ; object-src 'self' ".INDEXURL.";media-src 'self' ".INDEXURL." ");
		$conf = $this->conf;
		$a = Rippy::getControllerPath();

		$path = $a[0];
		$cont_name = (basename($path));
		$cont_name_arr = explode('.',$cont_name);
		array_pop($cont_name_arr);
		$cont_name = implode('.', $cont_name_arr);
		define('CONTNAME',$cont_name);

		if(!defined(@SUBFOLD)) define(@SUBFOLD,$a[1]);

		$this->defineCurDir();

		//$path = ltrim ($path,'/');
		//$path = "./controller/$path.php";
		
		if(file_exists($path)){			
			include($path);
		}
		else{
			Rippy::$Error->s('3',$path);
			header('HTTP/1.0 404 Not Found !', true, 404);
		}
	
	}
	
	/**
	 * getConfig() : Gets the value of config array's key given. If key not given , returns all config array. If key not found, returns false.
	 *
	 * @param $c - String : config array's key . DEFAULT : false
	 *
	 * @returns - Array , Variable , false :  Config value
	 *
	**/
	public function getConfig($c=false){
		if(!$c) return $this->conf;
		if(isset($this->conf[$c])) return $this->conf[$c];
		return false;
	}
	
	/**
	 * setConfig() : Sets the config array.
	 *
	 * @param $config - Array : Extra config options will been added to site configuration. DEFAULT : false
	 * 
	**/
	public function setConfig($config=false){
		include CONFDIR.'config.php';
		if(is_array($config)) $conf = array_merge($conf, $config);
		
		//get theme config 
		@include './view/'.$conf['theme'].'/system/config.php';

		$this->conf = $conf;
		
	}
	
	/**
	 * setProps() : Sets properties of the object. 
	 *
	 * @param $opt - Array : Properties like 'key' => 'value'
	 * 
	 * @returns - Bool : Properties set or not
	 * 
	**/
	public function setProps($opt){
		
		if(is_array($opt))
			foreach($opt as $k=>$v)$this->$k = $v;
		else 
			return false;
			
		return true;
	}
	
	/**
	 * setProp() : Sets property of the object. 
	 *
	 * @param $key - String: Property name 
	 * 
	 * @param $val - Variable : Property value DEFAULT : false
	 * 
	 * @returns - Variable : Property value.
	**/
	public function setProp($key,$val=false){
		
		
		$this->$key = $val;
		return $val;
	}
	
	/**
	 * getProp() : Gets the property key's given of the object. 
	 *
	 * @param $key - String: Key name of the desired property
	 * 
	 * @returns - Variable : Property value
	 * 
	**/
	public function getProp($key){
		return $this-> $key;
	}
	
	/**
	 * loadModel() : Includes the php model of application. The model file path must be on the 
	 "./model/ ~filename~ .php"  format. If file not exists launchs error number 1
	 *
	 * @param $model - String: Name of the model file will been loaded to the application
	 * 
	**/
	public static function loadModel($model){
	
		if(file_exists("./model/$model.class.php")){
			include_once("./model/$model.class.php");
		}else{
			Rippy::$Error->s('1',$model);
		}
	}
	
	/**
	 * loadCore() : Includes the php core of application.
	 "./core/ ~filename~ .php"  format. If file not exists launchs error number 4
	 *
	 * @param $model - String: Name of the core file will been loaded to the application
	 * 
	**/
	public function loadCore($model){
	
		if(file_exists("./core/$model.class.php")){
			include_once("./core/$model.class.php");
			if($this::$$model == null){
				$this::$$model = new $model();
				return $this::$$model;
			}
		}else{
			Rippy::$Error->s('4',$module);
		}
	}
	
	/**
	 * getInput() : Gets the gloal variable from request post or get.
	 *
	 * @param $index - String: Name of the key of superglobal
	 * 
	 * @param $mod - String : Name of the method , post or get. DEFAULT : 'post'
	 *
	 * @param $default - Variable : Default return value if variables not found. DEFAULT : false
	**/
	public static function getInput($index,$mod='post',$default=false){
		error_reporting(0);
		switch($mod){
			case 'post':
				$glo = $_POST;
				break;
			
			case 'get':
				$glo = $_GET;			
				break;

			case 'both':
				$glo = $_REQUEST;
				break;
			default:
				return $default;
		
		}
		return (isset($glo[$index]) && $glo[$index] != '') ? $glo[$index] : $default;
	
	}
	
	/**
	 * siteDefines() : Defines the site consts , such as APPURL , APPPATH , INDEXURL
	 *
	**/
	public static function siteDefines(){
			
			if(defined('INDEXURL')) return false;
			
			//indexurl
			$index = 'http'.(empty($_SERVER['HTTPS'])?'':'s').'://'.$_SERVER['SERVER_NAME'].($_SERVER['SERVER_PORT'] != '80' ? $_SERVER['SERVER_PORT'] : '' );
			
			define('INDEXURL',$index);
			define('CONFDIR','./core/config/');
			
			$uri = strtok($_SERVER["REQUEST_URI"],'?');
			//appurl
			$uri_arr = preg_split('[/|\\\\]',trim($uri));
			$appfolder = Rippy::appurlFind($uri_arr);
			$appurl = $index.$appfolder."/";
			
			define ('APPURL',$appurl);
			
			//app folder path
			define('APPPATH',$appfolder);
			
			//app folder name
			$appfold_arr = preg_split('[/|\\\\]',trim($appfolder));
			$appfold  = end($appfold_arr);
			define('DIRNAME',$appfold);
			
			//php version
			$x = version_compare(PHP_VERSION, '5.4');
			if($x < 0 ) $varr  = '5.4-';
			else $varr = '5.4+';
			define('PHPVER',$varr);

			
	}
	
	/**
	 * ctrlrFind() : Calculates the controller path , step 2.
	 *
	 * @param $cwd_arr - Array: 
	 * 
	**/
	protected static function ctrlrFind($cwd_arr,$subfold){
		
		if(!isset($cwd_arr[0])){
			return false;
		}
		$first = array_shift($cwd_arr);
		
		//echo $first."#";
		$cwd_str = implode('/', $cwd_arr);
		//$cwd_str = ($cwd_str=='') ? 'index' : $cwd_str;
		if($cwd_str=='' ){ // means index
			//if($first != DIRNAME) return false;
		
		}
		
		//echo count($cwd_arr)."<br>";
		
		$path = './controller/'.$cwd_str.'.php';
		$path_index = './controller/'.$cwd_str.'/index.php';
		
		//echo $path."<br>".$path_index."<hr>";
		if(file_exists($path) ){
			define('SUBFOLD',$subfold);
			return $path;
			
		}else if(@file_exists($path_index) && $cwd_str != DIRNAME ){
			
			define('SUBFOLD',$subfold);
			return $path_index;
			
		}else{
			if($first == DIRNAME)return $path;
			$subfold--;

			return Rippy::ctrlrFind($cwd_arr,$subfold);
		}
		
	}

	/**
	 * defineCurDir() : Set folder such as  './' './../'
	 *
	 * 
	**/
	protected static function defineCurDir(){

		if(!defined(SUBFOLD))die("undefined SUBFOLD");
		$str = './';
		for ($i=1; $i <SUBFOLD ; $i++) { 
			$str .= '../';
		}
		define('CURRENTDIR',$str);
	}



	/**
	 * appurlFind() : Calculates the application url .
	 *
	 * @param $cwd_arr - Array: 
	 * 
	**/
	protected static function appurlFind($cwd_arr){
	
		$root  = $_SERVER['DOCUMENT_ROOT'];
		
		if(!isset($cwd_arr[0])){
			return false;
		}
		array_pop($cwd_arr);
		$cwd_str = implode('/', $cwd_arr);
		$cwd_str = ($cwd_str=='') ? '' : $cwd_str;
		
		$path = $root.'/'.$cwd_str.'/rippy.class.php';
		if(@file_exists($path) ){
			return $cwd_str;
			
		}else{
			return Rippy::appurlFind($cwd_arr);
		}	
		
	}
	
	/**
	 * getControllerPath() : Calculates the controller path , step 1 .
	 *
	 * @returns - String : The controller path 
	**/
	protected static function getControllerPath(){
		
		$path = pathinfo( strtok($_SERVER["REQUEST_URI"],'?'));
		$cwd_arr = preg_split('[/|\\\\]',trim($path['dirname'].'/'.$path['basename']));
		$s = count($cwd_arr);
		$x = Rippy::ctrlrFind($cwd_arr,$s);
		return Array($x,@SUBFOLD);
	}
	
	/**
	 * getIp() : Gets the IP address of current referer .
	 *
	 * @returns - String : The ip addres of referer . 
	**/
	public static function getIp(){
	
		if (!empty($_SERVER['HTTP_CLIENT_IP'])){	//check ip from share internet
			$ip=$_SERVER['HTTP_CLIENT_IP'];
		}
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){	//to check ip is pass from proxy
			$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else{
			$ip=$_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}
	public static function error($s){

		die($s);
	}
	public static function dir(){
		$script = $_SERVER['SCRIPT_NAME'];
		return dirname($script).'/';
	}
	
}
?>