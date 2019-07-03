<style>
	#tablo th{
		background-color: #941475;
	}
	.form button{
		background-color: #941475;
	}
</style>
<form id="form1" name="form1" method="post" action="../controller/sayfa_ekle_islem.php" class="form">
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
        <th colspan="2" style="text-align: center">Sayfa Bilgileri</th>
      </tr>
      <tr>
        <th style="text-align: right">Sayfa Başlığı</th>
        <td><input type="text" name="txtAdi" id="textfield2"></td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center"><button>Kaydet</button></td>
      </tr>
    </tbody>
  </table>
</form>
