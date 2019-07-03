<style>
	#tablo th{
		background-color: #941475;
	}
	.form button{
		background-color: #941475;
	}
</style>
<?php 
	$sayfaId = $_GET['s_id'];
	$satir = getInformation("sayfalar","$sayfaId");
?>
<form id="form1" name="form1" method="post" action="../controller/sayfa_guncelle_islem.php?s_id=<?php echo($satir['s_id']); ?>" class="form">
	<?
		$oFCKeditor = new FCKeditor('icerik');
		$oFCKeditor->BasePath = 'fckeditor/';
		$oFCKeditor->Value = $satir['s_icerik'];
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
        <td><input type="text" name="txtAdi" id="textfield2" value="<?php echo($satir['s_baslik']); ?>"></td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center"><button>Kaydet</button></td>
      </tr>
    </tbody>
  </table>
</form>