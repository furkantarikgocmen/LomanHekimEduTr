<style>
	#tablo th{
		background-color: #fb3a2f;
	}
	.form button{
		background-color: #fb3a2f;
	}
</style>
<form id="form1" name="form1" method="post" action="../controller/etkinlik_ekle_islem.php" class="form">
	<?
		$oFCKeditor = new FCKeditor('icerik');
		$oFCKeditor->BasePath = 'fckeditor/';
		//$oFCKeditor->Value = $rowd['s_icerik'];
		$oFCKeditor -> Height = 320; 
		$oFCKeditor->Create();
		?>
  <table id="tablo">
    <tbody>
      <tr>
        <th colspan="2" style="text-align: center">Etkinlik Bilgileri</th>
      </tr>
      <tr>
        <th style="text-align: right">Etkinlik Başlığı</th>
        <td><input type="text" name="txtAdi" id="textfield2"></td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center"><button>Kaydet</button></td>
      </tr>
    </tbody>
  </table>
</form>
