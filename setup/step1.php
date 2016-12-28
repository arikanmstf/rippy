<?php 
  if(!caninstall()) die('Sistem Gereksinimleri yetersiz.');
?>
  <h3> 1. Adım : Veri Tabanı </h3>
   <p class="help-block">Bağlanmak istediğiniz veri tabanının hostunu yazınız. Veri tabanı kullanmak istemiyorsanız boş bırakabilirsiniz.Veri tabanı ayarlarını daha sonra <code>./core/config/config.php</code> dosyasını altında değiştirebilirsiniz. </p>
    <div class="sub_step">
      <form method="post" action="index.php" role="form">
        
        <div class="form-group">
          <label class="control-label" for="dbHost">Veri Tabanı Hostu</label>
          <input type="text" class="form-control" name="dbHost" id="dbHost" placeholder="Veri Tabanı Hostu">
          <p class="help-block">Bağlanmak istediğiniz veri tabanının hostunu yazınız.</p>
        </div>
        <div class="form-group">
          <label class="control-label" for="dbUser">Veri Tabanı Kullanıcı Adı</label>
          <input type="text" class="form-control" name="dbUser" id="dbUser" placeholder="Veri Tabanı Kullanıcı Adı">
          <p class="help-block">Bağlanmak istediğiniz veri tabanının kullanıcı adını yazınız.</p>
        </div>
        <div class="form-group">
          <label class="control-label" for="dbPw">Veri Tabanı Şifresi</label>
          <input type="password" class="form-control" name="dbPw" id="dbPw" placeholder="Veri Tabanı Şifresi">
          <input type="password" class="form-control" name="dbPw_" placeholder="Veri Tabanı Şifresi (Tekrar)">
          <p class="help-block">Bağlanmak istediğiniz veri tabanının şifresini yazınız.</p>
        </div>
        <div class="form-group">
          <label class="control-label" for="dbName">Veri Tabanı Adı</label>
          <input type="text" class="form-control" name="dbName" id="dbName" placeholder="Veri Tabanı Adı">
          <p class="help-block">Bağlanmak istediğiniz veri tabanının adını yazınız.Bu veritabanı daha önceden oluşturulmuş olmalıdır.</p>
        </div>
        <input type="hidden" name="a" value="step2"/>
        <button class="btn btn-primary">Sonraki Adım</button>


 
</form>
    </div>
  