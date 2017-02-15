<?php
if(!defined(@CURRENTDIR))define('CURRENTDIR','./');
?>
<!DOCTYPE html>
<html lang="tr">
	<head>
    <title>Rippy | Dökümantasyon</title>
    <meta charset ='utf-8' />
    <meta http-equiv ='Content-Type' content ='text/html; charset=UTF-8' />
    <meta name ='author' content ='arikan' />
    <link type='text/css' href='<?= CURRENTDIR ?>css/bootstrap.min.css' rel='stylesheet'/>
    <link type='text/css' href='<?= CURRENTDIR ?>css/style.css' rel='stylesheet'/>
    <script src='<?= CURRENTDIR ?>js/jquery.min.js' type='text/javascript'></script>
    <script src='<?= CURRENTDIR ?>js/custom.js' type='text/javascript'></script>
    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="brand" href="#"><img src="./images/logo.png" height="40"> Rippy 1.8.5</a>
       <!-- 
	   <a class="brand" href="#">MVC <? ?></a>
	
      <label id="stability">
        <input type="checkbox" id="stability-toggle" checked=""> Stable Only
      </label>
	  -->
    </div>
  </div>
</div>
<div id="wrap" class="clearfix">
    <div class="navigation" style="height: 932px;">
        <div class="search">
            <input id="search" type="text" class="form-control input-sm" placeholder="Dökümantasyonda Ara">
        </div>
        <ul class="list" style="height: 809px;">
    		<li class="item" data-name="Start">
    			 <span class="title">
                    <a href="javascript:void()">Başlarken</a>
                </span>
                <ul class="installation itemMembers">
    				 <span class="subtitle">Kurulum</span>
                    <li data-name="installation.system_requirements"><a href="#system_requirements">Sistem Gereksinimleri</a></li>
                    <li data-name="installation"><a href="#installation">Kurulum</a></li>
    			</ul>
    			<ul class="system itemMembers">
                    <span class="subtitle">Sistem</span>
                    <li ><a href="#constructs">Sabitler</a></li>
    				<li ><a href="#language">Dil Yapısı</a></li>
    				<li><a href="#view_struct">View Yapısı</a></li>
                    <li ><a href="#model_struct">Model Yapısı</a></li>
    				<li ><a href="#controller_struct">Controller Yapısı</a></li>
    			</ul>
    		</li>
            <li class="item" data-name="Rippy">
                <span class="title">
                    <a href="javascript:void()">Rippy</a>
                </span>
                <ul class="variables itemMembers">
                <span class="subtitle">Değişkenler</span>
                    <li data-name="Rippy.conf"><a href="#rippy.conf">conf</a></li>
                    <li data-name="Rippy.User"><a href="#rippy.user">User</a></li>
                    <li data-name="Rippy.Session"><a href="#rippy.session">Session</a></li>
                    <li data-name="Rippy.Database"><a href="#rippy.database">Database</a></li>
                    <li data-name="Rippy.Lang"><a href="#rippy.lang">Lang</a></li>
                    <li data-name="Rippy.Error"><a href="#rippy.error">Error</a></li>
                </ul>
                <ul class="typedefs itemMembers">
                    <span class="subtitle">Yöntemler</span>
                    <li data-name="Rippy.__construct" class="">
                        <a href="#rippy.construct">__construct</a>
                    </li>
                    <li data-name="Rippy.run" class="">
                        <a href="#rippy.run">run</a>
                    </li>
                    <li data-name="Rippy.getConfig" class="">
                        <a href="#rippy.getconfig">getConfig</a>
                    </li>
                    <li data-name="Rippy.setConfig" class="">
                        <a href="#rippy.setconfig">setConfig</a>
                    </li>
                    <li data-name="Rippy.setProps" class="">
                        <a href="#rippy.setprops">setProps</a>
                    </li>
                    <li data-name="Rippy.setProp" class="">
                        <a href="#rippy.setprop">setProp</a>
                    </li>
                    <li data-name="Rippy.getProp" class="">
                        <a href="#rippy.getprop">getProp</a>
                    </li>
                    <li data-name="Rippy.loadModel" class="">
                        <a href="#rippy.loadmodel">loadModel</a>
                    </li>
                    <li data-name="Rippy.loadCore" class="">
                        <a href="#rippy.loadcore">loadCore</a>
                    </li>
                    <li data-name="Rippy.input" class="">
                        <a href="#rippy.input">input</a>
                    </li>
                    <li data-name="Rippy.getip" class="">
                        <a href="#rippy.getip">getip</a>
                    </li>
                </ul>
            </li>
            <li class="item" data-name="Rippy.User">
                <span class="title">
                    <a href="javascript:void()">Rippy.User</a>
                </span>
                <ul class="variables itemMembers">
                    <span class="subtitle">Değişkenler</span>
                    <li data-name="Rippy.User.user_id" class="">
                        <a href="#rippy.User.user_id">user_id</a>
                    </li>
                    <li data-name="Rippy.User.user_permission_id" class="">
                        <a href="#rippy.User.user_permission_id">user_permission_id</a>
                    </li>
    				<li data-name="Rippy.User.P" class="">
                        <a href="#rippy.User.p">P</a>
                    </li>
                </ul>
                <ul class="methods itemMembers">
                    <span class="subtitle">Yöntemler</span>
                
                    <li data-name="Rippy.User.__construct" class="">
                        <a href="#rippy.User.construct">__construct</a>
                    </li>
    				<li data-name="Rippy.User.setPermissions" class="">
                        <a href="#rippy.User.setpermissions">setPermissions</a>
                    </li>
                </ul>
            </li>
    		<li class="item" data-name="Rippy.Session">
                <span class="title">
                    <a href="javascript:void()">Rippy.Session</a>
                </span>
                    <ul class="variables itemMembers">
                    <span class="subtitle">Değişkenler</span>
                    <li data-name="Rippy.Session.token" class="">
                        <a href="#rippy.Session.token">token</a>
                    </li>
                </ul>
                <ul class="methods itemMembers">
                <span class="subtitle">Yöntemler</span>
                    <li data-name="Rippy.Session.__construct" class="">
                        <a href="#rippy.Session.construct">__construct</a>
                    </li>
                    <li data-name="Rippy.Session.set" class="">
                        <a href="#rippy.Session.set">set</a>
                    </li>
    				<li data-name="Rippy.Session.get" class="">
                        <a href="#rippy.Session.get">get</a>
                    </li>
    				<li data-name="Rippy.Session.destroy" class="">
                        <a href="#rippy.Session.destroy">destroy</a>
                    </li>
    				<li data-name="Rippy.Session.setCookie" class="">
                        <a href="#rippy.Session.setcookie">setCookie</a>
                    </li>
    				<li data-name="Rippy.Session.getCookie" class="">
                        <a href="#rippy.Session.getcookie">getCookie</a>
                    </li>
    				<li data-name="Rippy.Session.rmcookie" class="">
                        <a href="#rippy.Session.rmcookie">rmcookie</a>
                    </li>
                </ul>
            </li>
    		
    		<li class="item" data-name="Rippy.Database">
                <span class="title">
                    <a href="javascript:void()">Rippy.Database</a>
                </span>
                <ul class="variables itemMembers">
                    <span class="subtitle">Değişkenler</span>
                </ul>
                <ul class="methods itemMembers">
                    <span class="subtitle">Yöntemler</span>
                    <li data-name="Rippy.Database.__construct" class="">
                        <a href="#rippy.Database.__construct">__construct</a>
                    </li>
    				<li data-name="Rippy.Database.__destruct" class="">
                        <a href="#rippy.Database.__destruct">__destruct</a>
                    </li>
    				<li data-name="Rippy.Database.connect" class="">
                        <a href="#rippy.Database.connect">connect</a>
                    </li>
    				<li data-name="Rippy.Database.disconnect" class="">
                        <a href="#rippy.Database.disconnect">disconnect</a>
                    </li>
                </ul>
            </li>
    		<li class="item" data-name="Rippy.Lang">
                <span class="title">
                    <a href="javascript:void()">Rippy.Lang</a>
                </span>
                <ul class="variables itemMembers">
                    <span class="subtitle">Değişkenler</span>
                    <li data-name="Rippy.Lang.language" class="">
                        <a href="#rippy.Lang.language">language</a>
                    </li>
                </ul>
                <ul class="methods itemMembers">
                    <span class="subtitle">Yöntemler</span>
                    <li data-name="Rippy.Lang.__construct" class="">
                        <a href="#rippy.Lang.__construct">__construct</a>
                    </li>
    				<li data-name="Rippy.Lang.g" class="">
                        <a href="#rippy.Lang.g">g</a>
                    </li>
    				<li data-name="Rippy.Lang.loadLang" class="">
                        <a href="#rippy.Lang.loadLang">loadLang</a>
                    </li>
                </ul>
            </li>
    		<li class="item" data-name="Rippy.Error">
                <span class="title">
                    <a href="javascript:void()">Rippy.Error</a>
                </span>
                <ul class="variables itemMembers">
                    <span class="subtitle">Değişkenler</span>
                
                    <li data-name="Rippy.Error.errors" class="">
                        <a href="#rippy.Error.errors">errors</a>
                    </li>
                </ul>
                <ul class="methods itemMembers">
                <span class="subtitle">Yöntemler</span>
                    <li data-name="Rippy.Error.__construct" class="">
                        <a href="#rippy.Error.__construct">__construct</a>
                    </li>
    				<li data-name="Rippy.Error.s" class="">
                        <a href="#rippy.Error.s">s</a>
                    </li>
                </ul>
            </li>
    		<li class="item" data-name="Rippy.View">
                <span class="title">
                    <a href="javascript:void()">Rippy.View</a>
                </span>
                <ul class="variables itemMembers">
                    <span class="subtitle">Değişkenler</span>
                </ul>
                <ul class="methods itemMembers">
                    <span class="subtitle">Yöntemler</span>
                    <li data-name="Rippy.View.__construct" class="">
                        <a href="#rippy.View.__construct">__construct</a>
                    </li>
    				<li data-name="Rippy.View.load" class="">
                        <a href="#rippy.View.load">load</a>
                    </li>
                </ul>
            </li>
    		<li class="item" data-name="Permission">
                <span class="title">
                    <a href="javascript::void();">Permission</a>
                </span>
                <ul class="variables itemMembers">
                    <span class="subtitle">Değişkenler</span>
                    <li data-name="Permission.perm_id" class="">
                        <a href="#">perm_id</a>
                    </li>
                    <li data-name="Permission.user_permissions" class="">
                        <a href="#">user_permissions</a>
                    </li>
    				<li data-name="Permission.path" class="">
                        <a href="#">path</a>
                    </li>
    				<li data-name="Permission.delimiter" class="">
                        <a href="#">delimiter</a>
                    </li>
                </ul>
                <ul class="methods itemMembers">
                    <span class="subtitle">Yöntemler</span>
                    <li data-name="Permission.__construct" class="">
                        <a href="#">__construct</a>
                    </li>
    				<li data-name="Permission.updatePermissions" class="">
                        <a href="#">updatePermissions</a>
                    </li>
    				<li data-name="Permission.get" class="">
                        <a href="#">get</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
<div class="main">
    <h1 class="page-title" data-filename="rippy">Rippy</h1>
<section>

<article>
    <ol>
        <li>
            <h2><span class="ancestors" >Başlarken</span></h2>
            <ol>
                <li>
                    <h3><span class="ancestors" >Kurulum</span></h3>
                    <ol>
                        <li>
                            <h4>
                                <span class="ancestors">Sistem Gereksinimleri</span>
                                <span id="system_requirements" class="anchor"></span>
                            </h4>
                            <ol>
                                <li>minimum PHP : 5.3</li>
                                <li>minimum Apache : 2.2</li>
                                <li>PHP mcrypt </li>
                                <li>Apache mod_rewrite</li>
                                <li>Okuma-Yazma izinleri</li>
                            </ol>
                        </li>
                        <li>
                            <h4>
                                <span class="ancestors">Kurulum</span>
                                <span id="installation" class="anchor"></span>
                            </h4>
                            <p class="description">Tam ve doğru bir kurulum için apache kullanıcısının (<?= exec('whoami');?>) ana dizin altındaki tüm dosyalara erişim ve yazma izninin olduğundan emin olun. </p>
                            <ol>
                                <li>
                                    <h5>1.Adım : Veritabanı</h5>
                                    <p class="description">Sistem gereksinimleriniz uygunsa 1.adımda veri tabanı ayaları yapılır. Sitem kurulum esnasında veri tabanı bağlantıları kontrol etmez. Bu yüzden ayarlarınızı yazmadan önce kontrol edin. Veri tabanı kullanmak istemiyorsanız host ismini boş bırakmanız yeterlidir.Veritabanı ile ilgili ayrıntılı bilgi için <a href="#rippy.Database">Rippy.Database</a> bölümüne bakınız.</p>
                                </li>
                                <li>
                                    <h5>2.Adım : Tema</h5>
                                    <p class="description">Sistem kurulumuna başlamadan önce <b>./view</b> dizini altına temanızı koyun.Tema dizininiz içinde <b>index.php</b> sayfası olmalıdır. Bu dizinin ismini de kurulumun 2.adımında tema ismi bölümüne yazın. Bu tema ismi <b>./core/config/config.php</b> ve <b>./.htaccess</b> dosyalarında kullanılmaktadır. Temanızın değiştirmek istediğiniz zaman bu dosyaları değiştirmeniz yeterlidir. </p>
                                </li>
                            </ol>

                            <p class="description">Kurulum başarıyla tamamlandığı taktirde anasayfaya yönlendirilirsiniz ve temanız içerisinde yeralan <b>index.php</b> sayfasını görürsünüz.</p>
                        </li>
                        
                    </ol>
                </li>
                <li>
                    <h3>Sistem</h3>
                    <ol>
                        <li>
                            <h4>
                                <span class="ancestors">Sabitler</span>
                                <span id="constructs" class="anchor"></span>
                            </h4>
                            <p class="description">Sistemde aşağıdaki sabitler kullanılır :</p>
                            <ol>
                                <li>
                                    <h5>APPURL</h5>
                                    <p class="description">Uygulama dosyasının bulunduğu dizinin url olarak karşılığı. Anasayfa url'i. Bu sayfada : <code><?= (@$this) ? @APPURL : "Henüz kurulum yapılmamış." ?></code></p>
                                </li>
                                <li>
                                    <h5>APPPATH</h5>
                                    <p class="description">Uygulama dosyasının bulunduğu dizin.Bu sayfada : <code><?=(@$this) ? @APPPATH : "Henüz kurulum yapılmamış."?> </code></p>
                                </li>
                                <li>
                                    <h5>DIRNAME</h5>
                                    <p class="description">Uygulama dosyasının bulunduğu dizinin adı.Bu sayfada : <code><?= (@$this) ? @DIRNAME : "Henüz kurulum yapılmamış." ?> </code></p>
                                </li>
                                <li>
                                    <h5>PHPVER</h5>
                                    <p class="description">PHP versiyonunun 5.4'ten küçük ,5.6'dan küçük ya da 5.6'dan büyük olduğunu gösteren ifade.Bu sayfada : <code><?= (@$this) ? @PHPVER : "Henüz kurulum yapılmamış." ?> </code></p>
                                </li>
                                <li>
                                    <h5>INDEXURL</h5>
                                    <p class="description">Sunucu anasayfa adresi.Bu sayfada : <code><?= (@$this) ? @INDEXURL : "Henüz kurulum yapılmamış." ?> </code></p>
                                </li>
                                <li>
                                    <h5>CONFDIR</h5>
                                    <p class="description">Ayar dosyasının bulunduğu dizin .Bu sayfada : <code><?= (@$this) ? @CONFDIR : "Henüz kurulum yapılmamış."  ?> </code></p>
                                </li>
                                <li>
                                    <h5>CONTNAME</h5>
                                    <p class="description">Çalışan kontroller dosyasının ismi (php uzantısı olmadan). Bu sayfada : <code><?= (@$this) ? @CONTNAME : "Henüz kurulum yapılmamış."?> </code></p>
                                </li>
                                <li>
                                    <h5>CURRENTDIR</h5>
                                    <p class="description">Tema dosyalarına ve linklere ulaşmak için kullanılan ön ek. Bu sayfada : <code><?= @CURRENTDIR ?> </code></p>
                                </li>
                                <li>
                                    <h5>SESTOKEN</h5>
                                    <p class="description">Session tokenı. Oturum boyunca aynı kalır. Güvenlik için kullanılabilir Bu sayfada : <code><?= (@$this) ? @SESTOKEN : "Henüz kurulum yapılmamış."?> </code></p>
                                </li>
                                <li>
                                    <h5>ML_LANGUAGE</h5>
                                    <p class="description">Aktif dil dosyası ismi.<code><?= (@$this) ? @ML_LANGUAGE : "Henüz kurulum yapılmamış."?> </code></p>
                                </li>
                            </ol>
                        </li>
                        <li>
                            <h4>
                                <span class="ancestors">Dil Yapısı</span>
                                <span id="language" class="anchor"></span>
                            </h4>
                            <p class="description">Çoklu dil kullanabilmek için <code>./core/config/language</code> dizini altına dil dosyanızı atın. Dil dosyanız <b>.php</b> uzantılı olmalıdır ve <code>$lang</code> isminde bir array değişkeni tutmalıdır. Bu değişkeni içine dil dizgelerinizi anahtar=>değer şeklinde yazın.  Şuanki dil : <code><?= (@$this) ? ML_LANGUAGE : "Henüz kurulum yapılmamış."; ?> </code><br>Varsayılan dili değiştirmek için <code>./core/config/config.php</code> dosyasındaki <b>default_language</b> ayarını dil dosyanız ismiyle değiştirin. Dil yapısı ile ilgili ayrıntılı bilgi için <a href="#rippy.Lang">Rippy.Lang</a> bölümüne bakınız.</p>
                        </li>
                        <li>
                            <h4> 
                                <span class="ancestors">View Yapısı</span>
                                <span id="view_struct" class="anchor"></span>
                            </h4>
                            <p class="description">View yapılarını kullanmak sitenizin farklı temalarla uyum içinde çalışması ve kod tekrarı yapmamak açısından faydalı. View yapıların kullanabilmek için bir kaç ayar yapmak gerekmektedir. Öncelikle <code>./view</code> klasörü altında temanızın klasörünün bulunduğundan emin olun. Css, js, jpeg, font, gibi tüm front-end kaynakları ve .php uzantılı web sayfaları bu klasör altında bulunmalıdır. Ayrıca <code>./core/config/config.php</code> dosyası altında <b>theme</b> ayarının yapıldığından ve tema klasör ismiyle aynı olduğundan emin olun. Tema klasörü isminizde <b>ö,ç,ğ,ı,ü</b> gibi Türkçe ve <b>?,-,\,%,&</b> gibi özel karakterler kullanmayın. Temaya özel ayarları <code>./view/{tema_klasoru_ismi}/system/config.php</code> dosyası içine yazabilirsiniz. Şuan kullanılan tema : <code><?= (@$this) ? $this->getConfig('theme') : "Henüz kurulum yapılmamış." ?></code> </p>
                            <h5>Tema Ayarları</h5>
                            <ol>
                                <li>
                                    <h6>nav_class</h6>
                                    <p class="description">
                                        Temanızda kullanılan navigation menünün alacağı class değeridir.
                                    </p>
                                </li>
                                <li>
                                    <h6>mobile_nav_class</h6>
                                    <p class="description">
                                        Temanızda kullanılan mobil navigation menünün alacağı class değeridir.
                                    </p>
                                </li>
                                <li>
                                    <h6>active_nav_class</h6>
                                    <p class="description">
                                        Temanızda kullanılan mobil navigation menüde aktif linklere verilecek class değeridir.
                                    </p>
                                </li>
                            </ol>

                            <p class="description">Temaların ve View'lerin kullanımıyla ilgili ayrıntılı bilgi için <a href="#rippy.view">Rippy.View</a> bölümüne bakınız.</p>
                        </li>
                        <li>
                            <h4>
                                <span class="ancestors">Model Yapısı</span>
                                <span id="model_struct" class="anchor"></span>
                            </h4>
                            <p class="description">Model yapılarını kullanarak Rippy sınıfından extend edilmiş kendi sınıflarınızı kullanabilirsiniz. Bunun için Model dosyanızını <code>./model/</code> klasörü altına kopyalayın. <span class="alert alert-warning">Model dosyanız .class.php uzantılı olmalıdır.</span> Model sınıfınızı <b>controller</b> ya da <b>view</b> dosyalarınızda <code>$this->loadModel({model_ismi})</code> şeklinde kolaylıkla include edebilirsiniz. Modellerin kullanımıyla ilgili ayrıntılı bilgi için  <a href="#rippy.model">Rippy.Model</a> bölümüne bakınız. </p>
                        </li>
                        <li>
                            <h4>
                                <span class="ancestors">Controller Yapısı</span>
                                <span id="controller_struct" class="anchor"></span>
                            </h4>
                            <p class="description">Controller dosyaları sayfa açıldığında ilk çalışan ve model ile view arasında bağlantı kuran ana çalışma sayfalarıdır. Bir sayfada bir çok view ya  da model dosyası çalışabilir fakat yalnızca bir tane controller dosyası çalışır. Mevcut sayfada hangi controller dosyanın çalıştığını öğrenmek için <code>CONTNAME</code> sabitini kullanabilirsiniz.<br>  Controller dosyalarınızı <code>./controller </code> dizini altına tıpkı view ve model dosyaları gibi .php uzantılı olarak koymalısınız. Dosyanın ismini ne yaparsanız url de onun .php uzantısız hali olur. Örneğin <code>./controller/galeri.php</code> sayfasını görüntülemek için <code>{host ismi}/galeri/</code> adresine gitmelisiniz.<br> Controller dizininin altına alt dizinler ekleyerek alt sayfalar yapabilirsiniz. Örneğin <code>./controller/blog/yeni-blog-yazisi.php</code> sayfasını çağırmak için <code>{host ismi}/blog/yeni-blog-yazisi/</code> adresine gitmelisiniz.<br><span class="alert alert-warning">Unutmayın , sistem eğer controller sayfasını bulamazsa , bir alt dizindeki index.php sayfasını arar.</span> Onu da bulamazsa <b>Controller Not Found</b> hatası döner.Örneğin <code>{host ismi}/sayfalar/yeni-sayfa/</code> adresi girildiğinde öncelikle <code>./controller/sayfalar/yeni-sayfa.php</code> dosyası aranır. Bu dosya yoksa <code>./controller/sayfalar/yeni-sayfa/index.php</code> dosyası aranır. Bu dosya da yoksa hata mesajı gelir. </p>
                        </li>
                    </ol>
                </li>
            </ol>
        </li>
        <li>
            <h2>
                <span class="ancestors">Rippy</span>
                <span id="rippy" class="anchor"></span>
            </h2>
            <div class="class-description">
                    <p>Ana sınıftır. Buradan extend edeceğiniz sınıflarla config değerlerini kullanabilirsiniz. Anasayfada tek seferlik tanımlanması yeterlidir.</p>
            </div>
            <h4>Extends : <code>-</code></h4>
            <p>Örnek index.php dosyası :</p>
            <pre class="prettyprint source">
                <code>
<span class="php">&#60;?php</span>
<span class="red">include</span> 'rippy.class.php';<span class="gray">// main class</span>
<span class="blue">$R</span> = <span class="green">new</span> Rippy();</span>
<span class="blue">$R</span>->run();</span>
<span class="php">?&#62;</span>
                </code>
            </pre>

            <div class="nameContainer">
                <h3 class="name">
                    new Rippy<span class="signature">()</span>
                </h3>
                <div class="tag-source">
                    <a href="javascript::void();">rippy.class.php</a>, <a href="javascript::void();">line 36</a>
                </div>
            </div>
            <h4>
                <span class="ancestors">Değişkenler</span>
               
            </h4>
            <table class="params">
                <thead>
                    <tr>
                        <th>Ad</th>
                        <th>Tip</th>
                        <th>Varsayılan</th>
                        <th class="last">Tanım</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="name">$conf<span id="rippy.conf" class="anchor"></span></td>
                        <td class="type">Array</td>
                        <td class="type">-</td>
                        <td class="description last">Tüm site ve view ayarları.</td>
                    </tr>
                    <tr>
                        <td class="name">$User<span id="rippy.user" class="anchor"></span></td>
                        <td class="type">Rippy.User (static) </td>
                        <td class="type">-</td>
                        <td class="description last">Rippy kullanıcı sınıfı.</td>
                    </tr>
                    <tr>
                        <td class="name">$Session<span id="rippy.session" class="anchor"></span></td>
                        <td class="type">Rippy.Session (static) </td>
                        <td class="type">-</td>
                        <td class="description last">Rippy oturum sınıfı.</td>
                    </tr>
                    <tr>
                        <td class="name">$Database<span id="rippy.database" class="anchor"></span></td>
                        <td class="type">Rippy.Database (static) </td>
                        <td class="type">-</td>
                        <td class="description last">Rippy veri tabanı sınıfı.</td>
                    </tr>
                    <tr>
                        <td class="name">$Lang<span id="rippy.lang" class="anchor"></span></td>
                        <td class="type">Rippy.Lang (static) </td>
                        <td class="type">-</td>
                        <td class="description last">Rippy dil sınıfı.</td>
                    </tr>
                    <tr>
                        <td class="name">$Error<span id="rippy.error" class="anchor"></span></td>
                        <td class="type">Rippy.Error (static) </td>
                        <td class="type">-</td>
                        <td class="description last">Rippy hata sınıfı.</td>
                    </tr>
                </tbody>
            </table>
            <p class="description">Yukarıda yer alan statik sistem değişkenlerini yüklemek için <code>Rippy.loadCore({sınıf adı})</code> metodunu kullanmalısınız. </p>
            <h4>
                <span class="ancestors">Yöntemler</span>
            </h4>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">__construct()</span>
                     <span id="rippy.construct" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">rippy.class.php</a>, <a href="javascript::void();">line 75</a>
                </div>
                <p class="description">Sistem değişkenlerini , site sabitlerini ve ayarları tanımlar. Bir sayfada bir defa çağrılmalıdır.</p>

                <h6>Params : </h6>
                <table class="params">
                    <thead>
                        <tr>
                            <th>Ad</th>
                            <th>Tip</th>
                            <th>Varsayılan</th>         
                            <th class="last">Tanım</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <h6>Returns :</h6><span>-</span>
               
            </div>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">run()</span>
                     <span id="rippy.run" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">rippy.class.php</a>, <a href="javascript::void();">line 98</a>
                </div>
                <p class="description">Siteyi yüklemeyi başlatmak için kullanılır. Anasayfada bir defa çağrılmalıdır. </p>
                <h6>Params</h6>
                <table class="params">
                    <thead>
                        <tr>
                            <th>Ad</th>
                            <th>Tip</th>
                            <th>Varsayılan</th>
                            <th class="last">Tanım</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

                <h6>Returns :</h6><span>-</span>
                
            </div>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">getConfig($key)</span>
                     <span id="rippy.getconfig" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">rippy.class.php</a>, <a href="javascript::void();">line 135</a>
                </div>
                <p class="description">İstenilen config değerini çekmek için kullanılır. Bu metodu kullanmadan önce <code>Rippy.setConfig()</code> metodu o sınıf için çağrılmış olmalıdır.</p>
                <h6>Params</h6>
                <table class="params">
                    <thead>
                        <tr>
                            <th>Ad</th>
                            <th>Tip</th>
                            <th>Varsayılan</th>
                            <th class="last">Tanım</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="name">$key</td>
                            <td class="type">String</td>
                            <td class="type">false</td>
                            <td class="description">İstenilen config anahtarı. Belirtilmediği taktirde tüm config dizisi döner.</td>
                        </tr>
                    </tbody>
                </table>
                <h6>Returns :</h6>
                <p><code>(Mixed)</code>İstenilen anahtarın değeri döner. Anahtar ismi belirtilmemişse tüm config dizisi döner.</p>
            </div>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">setConfig($config)</span>
                     <span id="rippy.setconfig" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">rippy.class.php</a>, <a href="javascript::void();">line 147</a>
                </div>
                <p class="description">Ayar dizisini sınıfın içerisine yükler. Böylelikle <code>Rippy.getConfig()</code> metodu kullanılabilir hale gelmiş olur.</p>
                <h6>Params</h6>
                <table class="params">
                    <thead>
                        <tr>
                            <th>Ad</th>
                            <th>Tip</th>
                            <th>Varsayılan</th>
                            <th class="last">Tanım</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="name">$config</td>
                            <td class="type">Array</td>
                            <td class="type">false</td>
                            <td class="description">Yeni config değerleri. Varolan config dosyası üzerine dinamik olarak overwrite etmek istediğinizde kullanabilirsiniz.</td>
                        </tr>
                    </tbody>
                </table>
                <h6>Returns :</h6><span>-</span>
            </div>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">setProps($opts)</span>
                     <span id="rippy.setprops" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">rippy.class.php</a>, <a href="javascript::void();">line 166</a>
                </div>
                <p class="description">Gönderilen seçenekleri sınıfın içerisine property olarak ekler.</p>
                <h6>Params</h6>
                <table class="params">
                    <thead>
                        <tr>
                            <th>Ad</th>
                            <th>Tip</th>
                            <th>Varsayılan</th>
                            <th class="last">Tanım</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="name">$opts</td>
                            <td class="type">Array</td>
                            <td class="type">-</td>
                            <td class="description">Sınıfın içerisine yüklenecek olan anahtar=>değer şeklinde tanımlanmış dizi.</td>
                        </tr>
                    </tbody>
                </table>
                <h6>Returns :</h6>
                <p><code>(Boolean)</code>İşlemin başarı olup olmadığı durumu.</p>
            </div>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">setProp($key,$value)</span>
                     <span id="rippy.setprop" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">rippy.class.php</a>, <a href="javascript::void();">line 185</a>
                </div>
                <p class="description">Gönderilen seçeneği sınıfın içerisine property olarak ekler.</p>
                <h6>Params</h6>
                <table class="params">
                    <thead>
                        <tr>
                            <th>Ad</th>
                            <th>Tip</th>
                            <th>Varsayılan</th>
                            <th class="last">Tanım</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="name">$key</td>
                            <td class="type">String</td>
                            <td class="type">-</td>
                            <td class="description">Property anahtar değeri.</td>
                        </tr>
                        <tr>
                            <td class="name">$value</td>
                            <td class="type">Mixed</td>
                            <td class="type">false</td>
                            <td class="description">Anahtara atanacak değer.</td>
                        </tr>
                    </tbody>
                </table>
                <h6>Returns :</h6>
                <p><code>(Mixed)</code>Anahtara atanan değer.</p>
            </div>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">getProp($key)</span>
                     <span id="rippy.getprop" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">rippy.class.php</a>, <a href="javascript::void();">line 200</a>
                </div>
                <p class="description">İstenilen property değerini döndürür.</p>
                <h6>Params</h6>
                <table class="params">
                    <thead>
                        <tr>
                            <th>Ad</th>
                            <th>Tip</th>
                            <th>Varsayılan</th>
                            <th class="last">Tanım</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="name">$key</td>
                            <td class="type">String</td>
                            <td class="type">-</td>
                            <td class="description">İstenilen property anahtar değeri.</td>
                        </tr>
                    </tbody>
                </table>
                <h6>Returns :</h6>
                <p><code>(Mixed)</code>İstenilen değer.</p>
            </div>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">loadModel($name)<code>(static)</code></span>
                     <span id="rippy.loadmodel" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">rippy.class.php</a>, <a href="javascript::void();">line 211</a>
                </div>
                <p class="description">İstenilen model sınıfını include eder.</p>
                <h6>Params</h6>
                <table class="params">
                    <thead>
                        <tr>
                            <th>Ad</th>
                            <th>Tip</th>
                            <th>Varsayılan</th>
                            <th class="last">Tanım</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="name">$name</td>
                            <td class="type">String</td>
                            <td class="type">-</td>
                            <td class="description">İstenilen model sınıfı.</td>
                        </tr>
                    </tbody>
                </table>
                <h6>Returns :</h6><span>-</span>

                <h6>Errors</h6>
                <p>Model sınıfı bulunamadığında 1 nolu hata mesajı yüklenir.</p>
            </div>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">loadCore($name)</span>
                     <span id="rippy.loadcore" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">rippy.class.php</a>, <a href="javascript::void();">line 227</a>
                </div>
                <p class="description">İstenilen core sınıfını include eder. Core sınıfı olarak <code>./core/</code> dizini altında bulunan 6 sınıftan biri olmalıdır. Örnek controller,model veya view dosyası aşağıdaki gibidir: </p>
                <pre class="prettyprint source">
                    <code>
<span class="php">&#60;?php</span>
<span class="blue">$this</span>->loadCore('Session');
<span class="blue">$Session</span> = <span class="blue">$this</span>::<span class="blue">$Session</span> <span class="gray">//Session sınıfı yüklendi</span>
<span class="php">?&#62;</span>
                    </code>
                </pre>
               
                <h6>Params</h6>
                <table class="params">
                    <thead>
                        <tr>
                            <th>Ad</th>
                            <th>Tip</th>
                            <th>Varsayılan</th>
                            <th class="last">Tanım</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="name">$name</td>
                            <td class="type">String</td>
                            <td class="type">-</td>
                            <td class="description">İstenilen core sınıfı.</td>
                        </tr>
                    </tbody>
                </table>
                <h6>Returns :</h6><span>-</span>

                <h6>Errors</h6>
                <p>Core sınıfı bulunamadığında 4 nolu hata mesajı yüklenir.</p>
            </div>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">input($index,$mod,$default)<code>(static)</code></span>
                     <span id="rippy.input" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">rippy.class.php</a>, <a href="javascript::void();">line 249</a>
                </div>
                <p class="description">İstenilen input değerini döndürür. </p>               
                <h6>Params</h6>
                <table class="params">
                    <thead>
                        <tr>
                            <th>Ad</th>
                            <th>Tip</th>
                            <th>Varsayılan</th>
                            <th class="last">Tanım</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="name">$index</td>
                            <td class="type">String</td>
                            <td class="type">-</td>
                            <td class="description">İstenilen input anahtarı.</td>
                        </tr>
                        <tr>
                            <td class="name">$mod</td>
                            <td class="type">String</td>
                            <td class="type">request</td>
                            <td class="description">inputun nereden alınacağı. request,get ya da post.</td>
                        </tr>
                        <tr>
                            <td class="name">$default</td>
                            <td class="type">Mixed</td>
                            <td class="type">false</td>
                            <td class="description">input bulunamadığı taktirde dönecek olan değer.</td>
                        </tr>
                    </tbody>
                </table>
                <h6>Returns :</h6>
                <p><code>Midex</code> İstenilen input değeri.</p>
            </div>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">getip()<code>(static)</code></span>
                     <span id="rippy.getip" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">rippy.class.php</a>, <a href="javascript::void();">line 419</a>
                </div>
                <p class="description">İstemcinin ip adresini döndürür.</p>               
                <h6>Params</h6>
                <table class="params">
                    <thead>
                        <tr>
                            <th>Ad</th>
                            <th>Tip</th>
                            <th>Varsayılan</th>
                            <th class="last">Tanım</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <h6>Returns :</h6>
                <p><code>String</code>İstemcinin ip adresi.</p>
            </div>
        </li>
        <li>
            <h2>
                <span class="ancestors">Rippy.User</span>
                <span class="anchor" id="rippy.User"></span>
            </h2>
            <div class="class-description">
                    <p>Kullanıcı sınıfıdır. Buraya ihtiyaçlarınıza göre eklemeler yapabilirsiniz.Bu sınıf Permission sınıfıyla beraber çalıştığı için her iki sınıf da aynı dosyadadır.</p>
            </div>
            <h4>Extends : <code>Rippy</code></h4>
            <div class="nameContainer">
                <h3 class="name">
                    new User<span class="signature">()</span>
                </h3>
                <div class="tag-source">
                    <a href="javascript::void();">User.class.php</a>, <a href="javascript::void();">line 3</a>
                </div>
            </div>
            <h4>
                <span class="ancestors">Değişkenler</span>
            </h4>
            <table class="params">
                <thead>
                    <tr>
                        <th>Ad</th>
                        <th>Tip</th>
                        <th>Varsayılan</th>
                        <th class="last">Tanım</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="name">$user_id<span id="rippy.User.user_id" class="anchor"></span></td>
                        <td class="type">Integer</td>
                        <td class="type">0</td>
                        <td class="description">Kullanıcı unique id'si.</td>
                    </tr>
                    <tr>
                        <td class="name">$user_permission_id<span id="rippy.User.user_permission_id" class="anchor"></span></td>
                        <td class="type">Integer</td>
                        <td class="type">0</td>
                        <td class="description">Kullanıcı yetki id'si.</td>
                    </tr>
                    <tr>
                        <td class="name">$P<span id="rippy.User.p" class="anchor"></span></td>
                        <td class="type">Object {Permission}</td>
                        <td class="type">-</td>
                        <td class="description">Kullanıcı yetki sınıfı. Bu sınıfı kullanabilmek için setPermissions() metodu çağrılmalıdır.</td>
                    </tr>
                </tbody>
            </table>
            <p class="description"> Kullanıcı yetkilerinin nasıl kullanılacağı ile ilgili ayrıntılı bilgi için <a href="#Permission">Permission</a> bölümüne bakın. </p>
            <h4>
                <span class="ancestors">Yöntemler</span>
            </h4>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">__construct()</span>
                     <span id="rippy.User.construct" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">User.class.php</a>, <a href="javascript::void();">line 13</a>
                </div>
                <p class="description">Ayarları yükler.</p>

                <h6>Params : </h6>
                <table class="params">
                    <thead>
                        <tr>
                            <th>Ad</th>
                            <th>Tip</th>
                            <th>Varsayılan</th>
                            <th class="last">Tanım</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <h6>Returns :</h6><span>-</span>
            </div>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">setPermissions()</span>
                     <span id="rippy.User.setpermissions" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">User.class.php</a>, <a href="javascript::void();">line 17</a>
                </div>
                <p class="description">Kullanıcı yetkilerini yükler.</p>

                <h6>Params : </h6>
                <table class="params">
                    <thead>
                        <tr>
                            <th>Ad</th>
                            <th>Tip</th>
                            <th>Varsayılan</th>
                            <th class="last">Tanım</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <h6>Returns :</h6><span>-</span>
            </div>           
        </li>
        <li>
            <h2>
                <span class="ancestors">Rippy.Session</span>
                <span class="anchor" id="rippy.Session"></span>
            </h2>
            <div class="class-description">
                    <p>Oturum sınıfıdır. PHP sessionlarına değerleri bu sınıfı kullanarak atarsanız extra mcrypt ile şifrelemiş olur.</p>
            </div>
            <h4>Extends : <code>Rippy</code></h4>
            <div class="nameContainer">
                <h3 class="name">
                    new Session<span class="signature">()</span>
                </h3>
                <div class="tag-source">
                    <a href="javascript::void();">Session.class.php</a>, <a href="javascript::void();">line 3</a>
                </div>
            </div>
            <h4>
                <span class="ancestors">Değişkenler</span>
            </h4>
            <table class="params">
                <thead>
                    <tr>
                        <th>Ad</th>
                        <th>Tip</th>
                        <th>Varsayılan</th>
                        <th class="last">Tanım</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="name">$token<span id="rippy.Session.token" class="anchor"></span></td>
                        <td class="type">String</td>
                        <td class="type">null</td>
                        <td class="description">Session tokenı. Bu değer oturum boyunca aynı kalır ve <code>SESTOKEN</code> sabitine atanır.</td>
                    </tr>
                    
                </tbody>
            </table>
            <h4>
                <span class="ancestors">Yöntemler</span>
            </h4>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">__construct()</span>
                     <span id="rippy.Session.construct" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">Session.class.php</a>, <a href="javascript::void();">line 5</a>
                </div>
                <p class="description">Session token yükler.</p>

                <h6>Params : </h6>
                <table class="params">
                    <thead>
                        <tr>
                            <th>Ad</th>
                            <th>Tip</th>
                            <th>Varsayılan</th>
                            <th class="last">Tanım</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <h6>Returns :</h6><span>-</span>
            </div>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">set($arr)</span>
                     <span id="rippy.Session.set" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">Session.class.php</a>, <a href="javascript::void();">line 18</a>
                </div>
                <p class="description">Session içerisine yeni değer atar.</p>

                <h6>Params : </h6>
                <table class="params">
                    <thead>
                        <tr>
                            <th>Ad</th>
                            <th>Tip</th>
                            <th>Varsayılan</th>
                            <th class="last">Tanım</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="name">$arr</td>
                            <td class="type">Array</td>
                            <td class="type">-</td>
                            <td class="description">Session içerisine atanacak anahtar=>değer şeklinde tanımlanmış dizi.</td>
                        </tr>
                    </tbody>
                </table>
                <h6>Returns :</h6>
                <p><code>Boolean </code> İşlemin başarı durumu.</p>
                <p class="description"> Örnek Kullanım : </p>
                <pre class="prettyprint source">
                <code>
<span class="php">&#60;?php</span>
<span class="blue">$S</span> = <span class="green">new</span> Session();
<span class="blue">$arr</span> = <span class="green">Array</span> (
<span class="red">'user_id'</span> => 123,
<span class="red">'user_name'</span> => <span class="red">'test'</span>,
);
<span class="blue">$S</span>->set(<span class="blue">$arr</span>);
<span class="php">?&#62;</span>
                </code>
            </pre>
            </div>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">get($key,$default)</span>
                     <span id="rippy.Session.get" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">Session.class.php</a>, <a href="javascript::void();">line 29</a>
                </div>
                <p class="description">İstenilen session değerini çeker.</p>

                <h6>Params : </h6>
                <table class="params">
                    <thead>
                        <tr>
                            <th>Ad</th>
                            <th>Tip</th>
                            <th>Varsayılan</th>
                            <th class="last">Tanım</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="name">$key</td>
                            <td class="type">String</td>
                            <td class="type">-</td>
                            <td class="description">İstenilen session anahtar değeri.</td>
                        </tr>
                        <tr>
                            <td class="name">$default</td>
                            <td class="type">Mixed</td>
                            <td class="type">false</td>
                            <td class="description">Değer bulunamadığı taktirde dönecek olan değer.</td>
                        </tr>
                    </tbody>
                </table>
                <h6>Returns :</h6>
                <p><code>Mixed </code> İstenilen değer.</p>
            </div>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">destroy()</span>
                     <span id="rippy.Session.destroy" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">Session.class.php</a>, <a href="javascript::void();">line 45</a>
                </div>
                <p class="description">Sessionı sonlandırır.</p>
                <h6>Params : </h6>
                <table class="params">
                    <thead>
                        <tr>
                            <th>Ad</th>
                            <th>Tip</th>
                            <th>Varsayılan</th>
                            <th class="last">Tanım</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <h6>Returns :</h6><span>-</span>
            </div>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">setCookie($key,$value,$timeout)</span>
                     <span id="rippy.Session.setcookie" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">Session.class.php</a>, <a href="javascript::void();">line 50</a>
                </div>
                <p class="description">Cookie yazar. PHP setcookie fonksiyonundan farklı olarak, anahtar ve değerleri mcrypt ile şifreler.</p>
                <h6>Params : </h6>
                <table class="params">
                    <thead>
                        <tr>
                            <th>Ad</th>
                            <th>Tip</th>
                            <th>Varsayılan</th>
                            <th class="last">Tanım</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="name">$key</td>
                            <td class="type">String</td>
                            <td class="type">-</td>
                            <td class="description">Atanacak değerin anahtarı.</td>
                        </tr>
                        <tr>
                            <td class="name">$value</td>
                            <td class="type">String</td>
                            <td class="type">-</td>
                            <td class="description">Atanacak değer.</td>
                        </tr>
                        <tr>
                            <td class="name">$timeout</td>
                            <td class="type">Mixed</td>
                            <td class="type">-</td>
                            <td class="description">Çerezin silinme süresi.</td>
                        </tr>
                    </tbody>
                </table>
                <h6>Returns :</h6><span>-</span>
            </div>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">getCookie($key)</span>
                     <span id="rippy.Session.getcookie" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">Session.class.php</a>, <a href="javascript::void();">line 58</a>
                </div>
                <p class="description"><code>setCookie</code> ile yazılmış cookileri çeker.</p>
                <h6>Params : </h6>
                <table class="params">
                    <thead>
                        <tr>
                            <th>Ad</th>
                            <th>Tip</th>
                            <th>Varsayılan</th>
                            <th class="last">Tanım</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="name">$key</td>
                            <td class="type">String</td>
                            <td class="type">-</td>
                            <td class="description">Çekilecek değerin anahtarı.</td>
                        </tr>
                    </tbody>
                </table>
                <h6>Returns :</h6>
                <p><code>Mixed</code> Çekilecek değer döner, bulunamazsa false döner.</p>
            </div>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">rmcookie($key)</span>
                     <span id="rippy.Session.rmcookie" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">Session.class.php</a>, <a href="javascript::void();">line 65</a>
                </div>
                <p class="description">Anahtar değeri belirtilmiş çerezi siler.</p>
                <h6>Params : </h6>
                <table class="params">
                    <thead>
                        <tr>
                            <th>Ad</th>
                            <th>Tip</th>
                            <th>Varsayılan</th>
                            <th class="last">Tanım</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="name">$key</td>
                            <td class="type">String</td>
                            <td class="type">-</td>
                            <td class="description">Silinecek çerezin anahtarı.</td>
                        </tr>
                    </tbody>
                </table>
                <h6>Returns :</h6><span>-</span>
            </div>
        </li>
        <li>

            <h2>
                <span class="ancestors" >Rippy.Database</span>
                <span class="anchor" id="rippy.Database"></span>
            </h2>
            <div class="class-description">
                    <p>Veritabanı sınıfı. Tüm veritabanı işlemleri redbeanphp kullanılarak yapılır. PHP versiyonunuza göre uygun olan redbean dosyasını kullanır.</p>
            </div>
            <h4>Extends : <code>Rippy</code></h4>
            <div class="nameContainer">
                <h3 class="name">
                    new Database<span class="signature">()</span>
                </h3>
                <div class="tag-source">
                    <a href="javascript::void();">Database.class.php</a>, <a href="javascript::void();">line 3</a>
                </div>
            </div>
            <h4>
                <span class="ancestors">Değişkenler</span>
            </h4>
            <table class="params">
                
            </table>
            <h4>
                <span class="ancestors">Yöntemler</span>
            </h4>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">__construct()</span>
                     <span id="rippy.Database.__construct" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">Session.class.php</a>, <a href="javascript::void();">line 5</a>
                </div>
                <p class="description">Uygun redbean versiyonunu belirleyip include eder. Veritabanına bağlanır.</p>

                <h6>Params : </h6>
                <table class="params">

                </table>
                <h6>Returns :</h6><span>-</span>
            </div>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">__destruct()</span>
                     <span id="rippy.Database.__destruct" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">Database.class.php</a>, <a href="javascript::void();">line 11</a>
                </div>
                <p class="description">Veritabanı bağlantısını keser.</p>

                <h6>Params : </h6>
                <table class="params">
                    
                </table>
                <h6>Returns :</h6>
                <span>-</span>
            </div>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">connect()</span>
                     <span id="rippy.Database.connect" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">Database.class.php</a>, <a href="javascript::void();">line 14</a>
                </div>
                <p class="description">Veritabanına bağlanır.</p>

                <h6>Params : </h6>
                <table class="params">
                    
                </table>
                <h6>Returns :</h6>
                <span>-</span>
            </div>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">disconnect()</span>
                     <span id="rippy.Database.disconnect" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">Database.class.php</a>, <a href="javascript::void();">line 20</a>
                </div>
                <p class="description">Veritabanı bağlantısını keser.</p>
                <h6>Params : </h6>
                <table class="params">
                  
                </table>
                <h6>Returns :</h6><span>-</span>
            </div>
        </li>
        <li>
            <h2>
                <span class="ancestors">Rippy.Lang</span>
                <span class="anchor" id="rippy.Lang"></span>
            </h2>
            <div class="class-description">
                    <p>Dil sınıfı. Bu sınıfı kullanabilmek için;
                        <ol>
                            <li>Dil dosyanızda <code>$lang</code> isminde bir array olmalı ve verileriniz bu arraya anahtar => değer şeklinde yazılmalıdır. Örnek dil dosyası aşağıdaki gibidir:
                                <pre class="prettyprint source">
                                    <code>
<span class="gray">// ./core/config/language/tr.php </span>
<span class="php">&lt;?php</span>
<span class="red">setlocale</span>(LC_TIME, "turkish");
<span class="blue">$lang</span>= <span class="green">Array</span>(
    'documentation' => 'Dökümantasyon',
    'variables' => 'Değişkenler',
    'methods' => 'Yöntemler',
    'search_documentation' => 'Dökümantasyonda Ara',
    'getting_started' => 'Başlarken',
    'installation' => 'Kurulum',
    'system_requirements' => 'Sistem Gereksinimleri',
    'settings' => 'Ayarlar',
    'first_application' => 'İlk Uygulama',
    'constants' => 'Sabitler',
    'system' => 'Sistem',
    'language_struct' => 'Dil Yapısı',
    'view_struct' => 'View Yapısı',
    'model_struct' => 'Model Yapısı',
    'welcome' => 'Hoşgeldiniz'
);
<span class="php">?></span>
</code>
                                </pre>

                            </li>
                            <li><code>./core/config/language/</code> dizini altına dil dosyanızı gönderin.</li> 
                            <li>
                                Model Controller ya da View farketmeksizin , dil dosyanızı aşağıdaki gibi kullanabilirsiniz: 
                                <pre class="prettyprint source">
<code>
<span class="php">&lt;?php</span>

    <span class="gray">//1. Örnek - default dil kullanımı</span>
    <span class="blue">$L</span> = <span class="blue">$this</span>::<span class="blue">$Lang</span>;
    <span class="red">echo</span> <span class="blue">$L</span> -> g('welcome'); <span class="gray">// Hoşgeldiniz</span>

    <span class="gray">//2. Örnek - default dili değiştirmeden, farklı bir dil kullanımı</span>
    <span class="blue">$L</span> = <span class="blue">$this</span>::<span class="blue">$Lang</span>;
    <span class="blue">$foo</span> = <span class="blue">$L</span>::loadLang("en");
    <span class="red">echo</span> <span class="blue">$foo</span> ['welcome']; <span class="gray">// Welcome</span>
<span class="php">?></span>
</code>
                                </pre>

                            </li>
                        </ol>
                    </p>
            </div>
            <h4>Extends : <code>Rippy</code></h4>
            <div class="nameContainer">
                <h3 class="name">
                    new Lang<span class="signature">()</span>
                </h3>
                <div class="tag-source">
                    <a href="javascript::void();">Lang.class.php</a>, <a href="javascript::void();">line 4</a>
                </div>
            </div>
            <h4>
                <span class="ancestors">Değişkenler</span>
            </h4>
            <table class="params">
                <thead>
                    <tr>
                        <th>Ad</th>
                        <th>Tip</th>
                        <th>Varsayılan</th>
                        <th class="last">Tanım</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="name">$language<span id="rippy.Lang.language" class="anchor"></span></td>
                        <td class="type">String</td>
                        <td class="type">null</td>
                        <td class="description">Yüklü olan dil dosyası ismi.</td>
                    </tr>
                </tbody>
            </table>
            <h4>
                <span class="ancestors">Yöntemler</span>
            </h4>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">__construct()</span>
                     <span id="rippy.Lang.__construct" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">Lang.class.php</a>, <a href="javascript::void();">line 9</a>
                </div>
                <p class="description"><code>ML_LANGUAGE</code> sabitini berlirler. Uygun dil dosyasını yükler.</p>

                <h6>Params : </h6>
                <table class="params">

                </table>
                <h6>Returns :</h6><span>-</span>
            </div>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">g($key)</span>
                     <span id="rippy.Lang.g" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">Lang.class.php</a>, <a href="javascript::void();">line 18</a>
                </div>
                <p class="description">Dil değerini döndürür.</p>

                <h6>Params : </h6>
                <table class="params">
                    <thead>
                        <tr>
                            <th>Ad</th>
                            <th>Tip</th>
                            <th>Varsayılan</th>
                            <th class="last">Tanım</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="name">$key</td>
                            <td class="type">String</td>
                            <td class="type">null</td>
                            <td class="description">İstenilen anahtar.</td>
                        </tr>
                    </tbody>
                </table>
                <h6>Returns :</h6>
                <p><code>(Mixed)</code>İstenilen dil değeri döner. Anahtar ismi belirtilmemişse tüm dil dizisi döner.</p>
            </div>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">loadLang($l) <code>(static)</code></span>
                     <span id="rippy.Lang.loadLang" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">Lang.class.php</a>, <a href="javascript::void();">line 43</a>
                </div>
                <p class="description"> İstenilen dil dosyasını include eder.</p>
                <h6>Params : </h6>
                <table class="params">
                    <thead>
                        <tr>
                            <th>Ad</th>
                            <th>Tip</th>
                            <th>Varsayılan</th>
                            <th class="last">Tanım</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="name">$l</td>
                            <td class="type">String</td>
                            <td class="type">null</td>
                            <td class="description">Dil dosyasının ismi. (.php uzantısı olmadan)</td>
                        </tr>
                    </tbody>
                </table>
                <h6>Returns :</h6>
                <p><code>(Array)</code>Yüklenen dil dizisi döner. Dosya bulunamazsa <b>false</b> döner.</p>
            </div>
        </li>
        <li>
            <h2>
                <span class="ancestors">Rippy.Error</span>
                <span class="anchor" id="rippy.Error"></span>
            </h2>
            <div class="class-description">
                    <p>Hata ayıklama sınıfı. Bu sınıf içerisinde varsayılan olarak 5 adet hata kodu mevcuttur. Bunlara ekleme veya düzenleme yapabilirsiniz. Bu düzenlemeler için <code>./core/Error.class.php</code> dosyasında yer alan <code>$errors</code> dizisini düzenleyin.
                        <pre class="prettyprint source">
                                    <code>
<span class="gray">// ./core/Error.php </span>
<span class="php">&lt;?php</span>
...
<span class="blue">$errors</span>= <span class="green">Array</span>(
        "1" => " Model File Not Found: ",
        "2" => " View File Not Found: ",
        "3" => " Controller File Not Found: ",
        "4" => " Core File Not Found: ",
        "5" => " Permission Denied: "
);
...
<span class="php">?></span>
</code>
                    </pre>
                </p>
            </div>
            <h4>Extends : <code>Rippy</code></h4>
            <div class="nameContainer">
                <h3 class="name">
                    new Error<span class="signature">()</span>
                </h3>
                <div class="tag-source">
                    <a href="javascript::void();">Error.class.php</a>, <a href="javascript::void();">line 4</a>
                </div>
            </div>
            <h4>
                <span class="ancestors">Değişkenler</span>
            </h4>
            <table class="params">
                <thead>
                    <tr>
                        <th>Ad</th>
                        <th>Tip</th>
                        <th>Varsayılan</th>
                        <th class="last">Tanım</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="name">$errors<span id="rippy.Error.errors" class="anchor"></span></td>
                        <td class="type">String</td>
                        <td class="type">null</td>
                        <td class="description">Yüklü hata mesajları dizisi.</td>
                    </tr>
                </tbody>
            </table>
            <h4>
                <span class="ancestors">Yöntemler</span>
            </h4>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">__construct()</span>
                     <span id="rippy.Error.__construct" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">Error.class.php</a>, <a href="javascript::void();">line 16</a>
                </div>
                <p class="description"></p>

                <h6>Params : </h6>
                <table class="params">
                </table>
                <h6>Returns :</h6><span>-</span>
            </div>
            <div class="nameContainer">
                <h5>
                     <span class="ancestors">s($errno,$var)</span>
                     <span id="rippy.Error.s" class="anchor"></span>
                </h5>
                <div class="tag-source">
                    <a href="javascript::void();">Error.class.php</a>, <a href="javascript::void();">line 21</a>
                </div>
                <p class="description">İstenilen hata mesajını döndürür. Değişken gönderilerek , hata mesajında kullanılabilir. <span class="alert alert-warning"> Bu fonksiyondan sonra php scripti çalışmayı durdurur. ( <b>die()</b>  )</span> </p>

                <h6>Params : </h6>
                <table class="params">
                    <thead>
                        <tr>
                            <th>Ad</th>
                            <th>Tip</th>
                            <th>Varsayılan</th>
                            <th class="last">Tanım</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="name">$errno</td>
                            <td class="type">Integer</td>
                            <td class="type">null</td>
                            <td class="description">İstenilen hata numarası .</td>
                        </tr>
                        <tr>
                            <td class="name">$var</td>
                            <td class="type">String</td>
                            <td class="type">null</td>
                            <td class="description">Hata mesajında görüntülemek istediğiniz değişken.</td>
                        </tr>
                    </tbody>
                </table>
                <h6>Returns :</h6><span>-</span>
            </div>
        </li>
    </ol>
</article>
</section>
</div>
</div>
</body></html>