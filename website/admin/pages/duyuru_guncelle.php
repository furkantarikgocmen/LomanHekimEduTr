<style>
	#tablo th{
		background-color: #008cd5;
	}
	.form button{
		background-color: #008cd5;
	}
</style>
<?php 
	$duyuruId = $_GET['d_id'];
	$satir = getInformation("duyuru","$duyuruId");
?>
<form id="form1" name="form1" method="post" action="../controller/duyuru_guncelle_islem.php?d_id=<?php echo($satir['d_id']); ?>" class="form">
	<?
		$oFCKeditor = new FCKeditor('icerik');
		$oFCKeditor->BasePath = 'fckeditor/';
		$oFCKeditor->Value = $satir['d_icerik'];
		$oFCKeditor -> Height = 320; 
		$oFCKeditor->Create();
		?>
  <table id="tablo">
    <tbody>
      <tr>
        <th colspan="2" style="text-align: center">Duyuru Bilgileri</th>
      </tr>
      <tr>
        <th style="text-align: right">Duyuru Başlığı</th>
        <td><input type="text" name="txtAdi" id="textfield2" value="<?php echo($satir['d_baslik']); ?>"></td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center"><button>Kaydet</button></td>
      </tr>
    </tbody>
  </table>
</form>