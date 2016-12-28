<?php
if(!defined('APPURL')) exit('No direct script access allowed');
/*
ClassName : user
Requires : ./model/session.class.php ,
			./model/database.class.php
			./model/permission.class.php
*/

class User extends Rippy{
	
	public $user_id = 0;
	public $user_permission_id = 0;

	function __construct(){
	
		$this->setConfig();
		
	}
	public function setPermissions(){
	
		$this->P = new Permission($this->user_permission_id);
	
	}
	
}
class Permission {
	private $perm_id;
	private $user_permissions;
	private $path = './core/config/permissions';
	private	$delimiter = '####';
	
	/* permmissions */
	
	/* end of permissions*/
	
	
	function __construct($perm_id=0){
		
		$this->perm_id = $perm_id;
		$this->updatePermissions();
		
	}
	private function updatePermissions(){
		$perm_id = $this->perm_id;
		$path = $this->path;
		$delimiter = $this->delimiter;
		$file = fopen($path,'r') or die ('permissions not found: '.$path);
		while (!feof ($file)){
			
			$row = fgets($file);
			$d = explode($delimiter,$row);
			
			if($d[0] == $perm_id){
				array_shift($d);
				foreach($d as $p){
					$perms[trim($p)] = true;					$this->$p = true;
				}
				$this->user_permissions = $perms;
				break;
			}
		}
		fclose($file);
	}
	public function get($permission_name=false){

		return ($permission_name) && isset($this->user_permissions[$permission_name]) ? $this->user_permissions[$permission_name] : (($permission_name) ? false : $this->user_permissions );
	}
	
	/*
	public function add($id,$data){
		$path = $this->path;
		chmod($path,0777);
		$delimiter = $this->delimiter;
		$file=fopen($path,'a+') or die('file not found : '.$path);
		$string ='';
		if(is_string($data)){
			$string = trim($data);
			unset($data);
		}else die('invalid data');
		
		
		$i = 0;
		//temp file
		$rand = './tmp/tmp_';
		$rand.= time();
		$temp = fopen($rand,'a');
		while (!feof ($file)){
			$row = fgets($file);
			$old_arr[] = $row;
		}
		foreach ($old_arr as  $old_row){
			$d = explode($delimiter,$old_row);
			if($d[0] ==$id) {
				$new = trim(trim($old_row).$this->delimiter.$string);
				$new_arr[] = $new;
			}else{
				$new_arr[]=trim($old_row);
			}
		}
		$string = implode("\n",$new_arr);
		fwrite($temp, $string);
		fclose($temp);
		fclose($file);
		unlink($path);
		rename($rand, $path); 
		$this->updatePermissions();
	}
	public function remove($id,$data){
		$path = $this->path;
		chmod($path,0777);
		$delimiter = $this->delimiter;
		$file=fopen($path,'a+') or die('file not found : '.$path);
		$string ='';
		if(is_string($data)){
			$string = trim($data);
			unset($data);
		}else die('invalid data');
		
		
		$i = 0;
		//temp file
		$rand = './tmp/tmp_';
		$rand.= time();
		$temp = fopen($rand,'a');
		while (!feof ($file)){
			$row = fgets($file);
			$old_arr[] = $row;
		}
		foreach ($old_arr as  $old_row){
			$d = explode($delimiter,trim($old_row));
			if($d[0] ==$id) {
				if($a = array_search($string,$d)){
					unset($d[$a]);
					$new = implode($this->delimiter,$d);
				}else{
					$new =trim($old_row);
				}

				$new_arr[] = $new;
			}else{
				$new_arr[]=trim($old_row);
			}
		}
		$string = implode("\n",$new_arr);
		fwrite($temp, $string);
		fclose($temp);
		fclose($file);
		unlink($path);
		rename($rand, $path);
		$this->updatePermissions();
	}
	*/
}

?>