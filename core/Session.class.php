<?php
if( ! defined('APPURL')) exit('No direct script access allowed');
class Session extends Rippy {
    public $token = '';
	function __construct(){
        $this->setConfig();
		
        $inactive = $this->getConfig('inactive',false);
        $time = time();
        $timeout = $this->get('timeout');
        $session_life=-1;
        if(!$inactive || $inactive<0 ) goto notimeout;

        if($timeout) $session_life =  $time - $timeout;
        if($session_life>$inactive) header('Location: '.APPURL.'/actions?action_name=logout');

        $data['timeout']=$time;

        notimeout:
        //session token
        $s = $this->get('token',false);
		$this->token = ($s) ? $s : time();

        $data['token']=$this->token;
        $this->set($data);
		if( ! defined('SESTOKEN'))  define('SESTOKEN',$this->token);
		else $this->token = SESTOKEN;

	}
	public function set($array){
		$hash = new Hash;
		if(!is_array($array)) return false;
		foreach($array as $key=>$value){

		
			$value = $hash->make($value); 
			$key = $hash->make($key); 
			$_SESSION[$key]=$value;
		
		}
		return true;
	}
	public function get($key=false,$default=false){
		$hash = new Hash;
		if(!$key){
			$ret = Array();
			foreach($_SESSION as $k=>$v) {
			
				$k = $hash->take($k);
				$ret[$k] = $hash->take($v);
			
			}
			return $ret;
		}
		$key = $hash->make($key);		
		return  (isset($_SESSION[$key])) ? $hash->take($_SESSION[$key]) : $default;
       
	}
    public function isLoggedIn(){
        return $this->get("is_logged_in",false); 

    }
    public function destroy(){

        session_destroy();

    }
	public function setCookie($key,$value,$time){
	
		$hash = new Hash;
		$value = $hash->make($value); 
		$key = $hash->make($key); 
		setcookie($key,$value,$time);
	
	}
	public function getCookie($key){
	
		$hash = new Hash;
		$key = $hash->make($key);
		return  (isset($_COOKIE[$key])) ? $hash->take($_COOKIE[$key]) : false;
	
	}
	public function rmcookie($cname){
	
		$hash = new Hash;
		$this->setCookie($cname,'',time()-3600);
		//$cname = $hash->make($cname);
		//unset($_COOKIE[$cname]);
	}
	public function checkLoggedIn(){
		$db = parent:: $Database;
		
		if($this->isLoggedIn()) return true;
		else{
			$lid = $this->getCookie('remember');
			if($lid){
				
				$li_ar = unserialize($lid);
				
				$login_name = $li_ar['email'];
				$pass = $li_ar['password'];
				if($db->login($login_name,$pass))return true;
				else return false;
				//header('Location: '.APPURL);
				
			}
		}
	
	}
	public function onlyLogin(){
		if(!$this->isLoggedIn()) Rippy::error('login');
	}
	public function onlyLogout(){
		if($this->isLoggedIn()) Rippy::error('logout');
	}
	


}
class Hash {

    protected $key;     // Secret Key to secure hashed password
    protected $etype;   // Encryption Algorithm
    protected $mcmod;   // Mcrypt Mod
    protected $rand;    // Mcrypt Random Number generator
    protected $iv;      // Mcrypt initialization vector

    public function __construct()
    {
        $this->etype = MCRYPT_RIJNDAEL_256;
        $this->mcmod = MCRYPT_MODE_ECB;
        $this->rand  = MCRYPT_RAND;
        $this->key   = '<c349BzQ_02Y9p1j*Q1&&Zq2guN0X0';
        $this->iv    = @mcrypt_create_iv(@mcrypt_get_iv_size($this->etype, $this->mcmod), $this->rand);

        if(!function_exists('mcrypt_create_iv'))
        {
            exit('<strong>HASH Error:</strong> Class needs Mcrypt library to work.');
        }

        if(version_compare(PHP_VERSION, '5.3.0') === -1)
        {
            exit('<strong>HASH Error:</strong> Class needs at least PHP 5.3.0 to work.');
        }
    }

    public function make($password, $key = false)
    {
        return trim(bin2hex(mcrypt_encrypt($this->etype, $this->key($key), $password, $this->mcmod, $this->iv)));
    }

    public function take($protected, $key = false)
    {
        return trim(mcrypt_decrypt($this->etype, $this->key($key), Hash::hex2bin($protected), $this->mcmod, $this->iv));
    }

    public function key($key)
    {
        return strlen($key) == 32 ? $key : $this->key;
    }
    public static function hex2bin($hexstr){ 
        $n = strlen($hexstr); 
        $sbin="";   
        $i=0; 
        while($i<$n) 
        {       
            $a =substr($hexstr,$i,2);           
            $c = pack("H*",$a); 
            if ($i==0){$sbin=$c;} 
            else {$sbin.=$c;} 
            $i+=2; 
        } 
        return $sbin; 
    } 
}
?>