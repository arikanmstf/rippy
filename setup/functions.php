<?php
function isphp(){
	$v = floatval(phpversion());
	return ($v > 5.3);
}
function isapache(){
	$v = floatval(str_replace('Apache/','',  (apache_get_version())));
	return ($v > 2.2);
}
function ismcrypt(){
	return function_exists('mcrypt_encrypt');
}
function isrewrite(){
	return in_array('mod_rewrite', apache_get_modules());
}
function iswritep(){
	return (is_writable('./core/config') && is_readable('./core/config') && is_writable('./') && is_readable('./') && is_writable('./index.php') && is_readable('./index.php') );
}
function checkPHPVersion(){
	
	return (isphp()) ? 'PHP versiyonunuz uygun . <span class="green glyphicon glyphicon-ok"></span>' : 'PHP versiyonunuz düşük.<span class="red glyphicon glyphicon-remove"></span>';
}
function checkApacheVersion(){
	
	return (isapache()) ? 'Apache versiyonunuz uygun . <span class="green glyphicon glyphicon-ok"></span>' : 'Apache versiyonunuz düşük.<span class="red glyphicon glyphicon-remove"></span>';
}
function checkMcrypt(){
	return (ismcrypt()) ? 'php5-mcrypt eklentisi kurulu . <span class="green glyphicon glyphicon-ok"></span>' : 'php5-mcrypt eklentisi kurulu değil.<span class="red glyphicon glyphicon-remove"></span>';	
}
function checkModRewrite(){

	return (isrewrite()) ? 'apache mod-rewrite eklentisi kurulu . <span class="green glyphicon glyphicon-ok"></span>' : 'apache mod-rewrite eklentisi kurulu değil.<span class="red glyphicon glyphicon-remove"></span>';	
}
function checkWritePermission(){
	$u = exec('whoami');
	return (iswritep()) ? '  Kullanıcı yetkisi var. Kullanıcı Adı: <b>'.$u.'</b> . <span class="green glyphicon glyphicon-ok"></span>' : 'Kullanıcı yetkisi yok. Kullanıcı Adı: <b>'.$u.'</b> . Lütfen bu kullanıcıya <b>./</b> , <b>./index.php</b> ve <b>./core/config</b> dizinleri için yazma ve okuma yetkisi veriniz.<span class="red glyphicon glyphicon-remove"></span>';	
}
function caninstall(){
	return (isphp() && isapache() && ismcrypt() && isrewrite() && iswritep());
}
function startinstall(){
	 return (caninstall()) ? '<form method="post" action="index.php"><input type="hidden" name="a" value="step1"/><button class="btn btn-primary">Kuruluma Başla</button></form>' : '<div class="alert alert-danger"> Kurulum için sistem gereksinimleri yetersiz.</div>';
}
function startAction(){
	if(isset($_POST['a']))$action = $_SESSION['action'] = $_POST['a'];
	else if(isset($_SESSION['action']))$action = $_SESSION['action'];
	else  $action = $_SESSION['action'] = 'step0';
	switch ($action) {
		case 'step0':
			
			return 'step0.php';

			break;
		case 'step1':
			
			return 'step1.php';

			break;
		case 'step2':
			
			return 'step2.php';

			break;
		case 'step3':
			
			return 'step3.php';

			break;
		
		default:
			die('unknown action');
			break;
	}
}
function is_writable_r($dir) {
	if (is_dir($dir)) {
		if(is_writable($dir)){
			$objects = scandir($dir);
			foreach ($objects as $object) {
				if ($object != "." && $object != "..") {
					if (!is_writable_r($dir."/".$object)) return false;
					else continue;
				}
			}	
			return true;	
		}else{
			return false;
		}
		
	}else if(file_exists($dir)){
		return (is_writable($dir));
		
	}
}
function is_readable_r($dir) {
	if (is_dir($dir)) {
		if(is_readable($dir)){
			$objects = scandir($dir);
			foreach ($objects as $object) {
				if ($object != "." && $object != "..") {
					if (!is_readable_r($dir."/".$object)) return false;
					else continue;
				}
			}	
			return true;	
		}else{
			return false;
		}
		
	}else if(file_exists($dir)){
		return (is_readable($dir));
		
	}
}

function install(){

	if(!isset( $_SESSION["tmName"]) || $_SESSION['tmName']=="" )die("lütfen tema belirleyiniz.");

	//create config file.
	$config_str = <<<EOF
<?php
/** <------ System Configurations
	* All of system configuration variables must be exist for correctly run.
**/
\$conf["default_language"] = "tr"; // language path that contains  \$lang array.
\$conf["database"] = Array(	//database configurations
	"dbhost" => "{$_SESSION['dbHost']}",
	"dbusername" => "{$_SESSION['dbUser']}",
	"dbpass" => "{$_SESSION['dbPw']}",
	"dbname" => "{$_SESSION['dbName']}"
);
\$conf['theme'] = "{$_SESSION['tmName']}";
/*  System Configurations ------> */
?>
EOF;
	
	$temp = fopen('./core/config/config.php','w');
	fwrite($temp,$config_str);
	fclose($temp);
	@chmod('./core/config/config.php', 0777);
	//.htaccess
	
	$theme  = $_SESSION['tmName'];

	$htaccess_str = <<<EOF
RewriteEngine on

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_URI} (?i)\.(jpeg|jpg|png|gif|svg|ico|css|js|woff|woff2|ttf)$
RewriteRule .* view/$theme/$0 [PT]

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule .* index.php/$0/

<ifmodule mod_expires.c>
<filesmatch "\.(jpg|gif|png)$">
ExpiresActive on
ExpiresDefault "access plus 1 year"
</filesmatch>
</ifmodule>
Options All -Indexes

EOF;
	$temp = fopen('./.htaccess','w');
	fwrite($temp,$htaccess_str);
	fclose($temp);
	chmod('./.htaccess', 0777);

	//index.php
	$index_str = <<<EOF
<?php
include 'rippy.class.php';// main class
\$R = new Rippy();
\$R->run();
?>
EOF;
	$temp = fopen('./index.php','w');
	fwrite($temp,$index_str);
	fclose($temp);

	if(file_exists('./index.php') && file_exists('./.htaccess') && file_exists('./core/config/config.php') ){
		include './core/config/config.php';
		if($conf['theme'] != ''){
			echo '<meta http-equiv="refresh" content="5; url=./">';
		}
	}
	

}
?>