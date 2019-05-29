<style>
	#tablo th{
		background-color: #fb3a2f;
	}
	.form button{
		background-color: #fb3a2f;
	}
</style>
<form id="form1" name="form1" method="post">
		<table border="1" id="tablo">
          <tbody>
            <tr>
              <th>#</th>
              <th>Etkinlik Başlığı</th>
              <th>Etkinlik Tarihi</th>
			  <th>İşlem</th>
            </tr>
			  <?php 
	$connection = mysqli_connect('localhost', 'root', '', 'ip_no_2019');
	mysqli_query($connection,"SET NAMES 'utf8'");
	$sql = mysqli_query($connection,"select * from etkinlik order by e_id desc");
	$i=0;
	$j=0;
	while($satir = mysqli_fetch_assoc($sql))
	{
		$i++;
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
              <td><?php echo $satir['e_baslik']?></td>
              <td><?php echo $satir['e_tarih']?></td>	
			  <td>
				  	<a href="../controller/etkinlik_sil_islem?id=<?php echo $satir['e_id']?>" class="buton buton-kirmizi">Sil</a>
					<a href="admin.php?s=etkinlik_guncelle&e_id=<?php echo $satir['e_id']?>" class="buton buton-mavi">Güncelle</a>
			  </td>
            </tr>
			  <?php } ?>
          </tbody>
			<?php  mysqli_close($connection); ?>
        </table>
</form>