<style>
	#tablo th{
		background-color: #941475;
	}
	.form button{
		background-color: #941475;
	}
</style>
<form id="form1" name="form1" method="post">
		<table border="1" id="tablo">
          <tbody>
            <tr>
              <th>#</th>
              <th>Sayfa Başlığı</th>
			  <th>İşlem</th>
            </tr>
			  <?php 
	$j=0;
 $data = getDataOptionel('sayfalar',"order by s_id desc"); // veya where u_id = 1 veya join işlemleri
 $data = json_decode($data, true);
 for($i = 0; $i < count($data); $i++)
	{
		$j++;
?>
            <tr style="background-color: #<?php if($j == 1)
				echo 'f2dede';
			if($j == 2)
				echo 'fcf8e3';
			if($j == 3)
				echo 'd9edf7';
			if($j == 4){
				echo 'dff0d8';
				$j = 0; 
			}
				?>">
              <td><?php echo($i)?></td>
              <td><?php echo $data[$i]['s_baslik']?></td>
			  <td>
				  	<a href="../controller/sayfa_sil_islem.php?id=<?php echo $data[$i]['s_id']?>" class="buton buton-kirmizi">Sil</a>
					<a href="admin.php?s=sayfa_guncelle&s_id=<?php echo $data[$i]['s_id']?>" class="buton buton-mavi">Güncelle</a>
			  </td>
            </tr>
			  <?php } ?>
          </tbody>
        </table>
</form>