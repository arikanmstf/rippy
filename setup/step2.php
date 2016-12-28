<?php 
  if(!caninstall()) die('Sistem Gereksinimleri yetersiz.');

  if(isset($_POST['dbHost']))$_SESSION['dbHost'] = $_POST['dbHost'];
  if(isset($_POST['dbHost']))$_SESSION['dbUser'] = $_POST['dbUser'];
  if(isset($_POST['dbHost']))$_SESSION['dbPw'] = $_POST['dbPw'];
  if(isset($_POST['dbHost']))$_SESSION['dbPw_'] = $_POST['dbPw_'];
  if(isset($_POST['dbHost']))$_SESSION['dbName'] = $_POST['dbName'];
  if(isset($_SESSION['dbPw'])){
    if($_SESSION['dbPw']!=$_SESSION['dbPw_'])die('Şifreler uyumsuz');
  }
?>
  <h3> 2. Adım : Tema Seçimi </h3>
   <p class="help-block">Kullanmak istediğiniz temayı <code>./view</code> dizini altına bir dizin içine kopyalayın. Tema dizininiz içinde anasayfanın <code>index.php</code> dosyası olduğudan emin olun. </p>
    <div class="sub_step">
      <form method="post" action="index.php" role="form">
        
        <div class="form-group">
          <label class="control-label" for="tmName">Tema İsmi</label>
          <input type="text" class="form-control" name="tmName" id="tmName"value="documentation" placeholder="Tema İsmi">
          <p class="help-block">Temanızın dizinin ismini yazınız.</p>
        </div>
        <p class="help-block">Temayı daha sonra değiştirmek istediğinizde <code>./.htaccess</code> ve <code>./core/config/config.php</code> dosyalarını düzenlemeniz yeterlidir. Bu dosyalarda tema ismini aratın ve yeni tema ismiyle değiştirin. </p>
        <input type="hidden" name="a" value="step3"/>
        <button class="btn btn-primary">Sonraki Adım</button>


 
</form>
    </div>
  