<?php 
  if(!caninstall()) die('Sistem Gereksinimleri yetersiz.');
  if(isset($_POST['tmName']))$_SESSION['tmName'] = $_POST['tmName'];
  install();
  session_destroy();
?>
  <h3>  Kurulum Tamamlandı.  </h3>
   <p class="help-block">Kurulum tamamlandı. Anasayfaya yönlendiriliyorsunuz.Lütfen bekleyin ya da sayfayı yenileyin.</p>
    <div class="sub_step">

    </div>
  