<style>
	#tablo th{
		background-color: #fb3a2f;
	}
	.form button{
		background-color: #fb3a2f;
	}
</style>
<?php 
	$etkinlikId = $_GET['e_id'];
	$connection = mysqli_connect('localhost', 'root', '', 'ip_no_2019');
	mysqli_query($connection,"SET NAMES 'utf8'");
	$sql = "select * from etkinlik where e_id='".$etkinlikId."' ";
	$query = mysqli_query($connection,$sql);
	$i=0;
	while($satir = mysqli_fetch_assoc($query))
	{
?>
<form id="form1" name="form1" method="post" action="../controller/etkinlik_guncelle_islem.php?e_id=<?php echo($satir['e_id']); ?>" class="form">
	<?
		$oFCKeditor = new FCKeditor('icerik');
		$oFCKeditor->BasePath = 'fckeditor/';
		$oFCKeditor->Value = $satir['e_icerik'];
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
        <td><input type="text" name="txtAdi" id="textfield2" value="<?php echo($satir['e_baslik']); ?>"></td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center"><button>Kaydet</button></td>
      </tr>
    </tbody>
  </table>
</form>
<?php }?>