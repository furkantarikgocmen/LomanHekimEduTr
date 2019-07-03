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
	$satir = getInformation("kullanici","$kullaniciId");
?>

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