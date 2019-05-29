<style>
	#tablo th{
		background-color: #fdaf26;
	}
	.form button{
		background-color: #fdaf26;
	}
</style>
<?php 
	$kullaniciId = $_GET['k_id'];
	$connection = mysqli_connect('localhost', 'root', '', 'ip_no_2019');
	mysqli_query($connection,"SET NAMES 'utf8'");
	$sql = "select * from kullanici where k_id='".$kullaniciId."' ";
	$query = mysqli_query($connection,$sql);
	while($satir = mysqli_fetch_assoc($query))
	{
?>
<link rel="stylesheet" href="../style/otomasyon.css" media="screen" type="text/css">
<form id="form1" name="form1" method="post" action="../controller/kullanici_guncelle_islem.php?k_id=<?php echo $kullaniciId?>" class="form">
  <table id="tablo">
    <tbody>
      <tr>
        <th colspan="2" style="text-align: center">Kullanıcı Bilgileri</th>
      </tr>
      <tr>
        <th style="text-align: right">Kullanıcı Adı</th>
        <td><input type="text" name="txtAdi" id="textfield2" value="<?php echo $satir['k_adi'] ?>"></td>
      </tr>
		<tr>
        <th style="text-align: right">Kullanıcı Şifresi</th>
        <td><input type="text" name="txtSifre" id="textfield2" value="<?php echo $satir['k_sifre'] ?>"></td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center"><button>Güneclle</button></td>
      </tr>
    </tbody>
  </table>
</form>
<?php }?>