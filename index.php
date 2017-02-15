<?php
session_start();
include './setup/functions.php';
$p= startAction();
//sudo usermod -a -G www-data [username]
?>

<!DOCTYPE html>
<html lang="en">
	<head>
    <title>Rippy | Kurulum</title>
    <meta  charset ='utf-8'  />
    <meta  http-equiv ='Content-Type'  content ='text/html; charset=UTF-8'  />
    <meta  name ='author'  content ='arikan'  />
    <link type='text/css' href='./view/documentation/css/bootstrap.min.css' rel='stylesheet'/>
    <link type='text/css' href='./view/documentation/css/style.css' rel='stylesheet'/>
    <script src='./view/documentation/js/jquery.min.js' type='text/javascript'>
    </script><script src='./view/documentation/js/custom.js' type='text/javascript'></script>
    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
	  <div class="navbar-inner">
	    <div class="container">
	      <a class="brand" href="#"><img src="./view/documentation/images/logo.png" height="40"> Rippy 1.8.0</a>
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
	    <div class="main" style="margin-left:0px;">
			<header>
				<h2>
					<span class="ancestors">Kurulum
				</h2>
				<?php include './setup/'.$p;?>
			</header>
		</div>
	</div>
</body>
</html>