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
	$connection = mysqli_connect('localhost', 'root', '', 'ip_no_2019');
	mysqli_query($connection,"SET NAMES 'utf8'");
	$sql = "select * from duyuru where d_id='".$duyuruId."' ";
	$query = mysqli_query($connection,$sql);
	$i=0;
	while($satir = mysqli_fetch_assoc($query))
	{
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
<?php }?>