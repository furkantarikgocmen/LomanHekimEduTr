<style>
	#tablo th{
		background-color: #fdaf26;
	}
	.form button{
		background-color: #fdaf26;
	}
</style>
<form name="form1" method="post" action="../controller/kullanici_ekle_islem.php" class="form">
  <table border="1" id="tablo">
    <tbody>
      <tr>
        <th>Kullanıcı Adı:</th>
        <th><input type="text" name="txtAdi" id="textfield"></th>
      </tr>
		<tr>
        <th>Kullanıcı Şifresi:</th>
        <th><input type="password" name="txtSifre" id="textfield"></th>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center"><button>Kaydet</button></td>
      </tr>
    </tbody>
  </table>
</form>
