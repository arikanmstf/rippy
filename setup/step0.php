  <h3> Sitem Gereksinimleri</h3>
   <p class="help-block"> Yardım için <a href="./view/documentation/"> dökümantasyon</a> sayfasını ziyaret edebilirsiniz. </p>
    <table class="table requirements">
      <tbody>
        <tr>
          <td>PHP</td>
          <td class="type">minimum 5.3</td>
          <td>
            <?= checkPHPVersion(); ?>
          </td>
        </tr>
        <tr>
          <td>php5-mcrypt</td>
          <td class="type"></td>
          <td>
            <?= checkMcrypt(); ?>
          </td>
        </tr>
        <tr>
          <td>Apache</td>
          <td class="type">minimum 2.2.22</td>
          <td>
            <?= checkApacheVersion()?>
          </td>
        </tr>
        <tr>
          <td>Apache rewrite_module</td>
          <td class="type"></td>
          <td class="result">
            <?= checkModRewrite();?>
          </td>
        </tr>
        <tr>
          <td>Dosya İzinleri</td>
          <td class="type"></td>
          <td class="result">
            <?= checkWritePermission();?>
          </td>
        </tr>
      </tbody>
      <tfoot>
          <tr>
            <td colspan="3"><?= startinstall();?></td>
          </tr>
      </tfoot>
    </table>  