<div class="duyuru" style="color: #fb3a2f; margin-left: 0; margin-right: 1%">
			<h2 style="color: #fb3a2f">ETKİNLİKLER</h2>
	<?php
	$connection = mysqli_connect('localhost', 'root', '', 'ip_no_2019');
	mysqli_query($connection,"SET NAMES 'utf8'");
	$sql = mysqli_query($connection,"select * from etkinlik order by e_id desc limit 5");
	while($satir = mysqli_fetch_assoc($sql))
	{?>
			<div class="duyuru-item">
				<div class="tarih" style="background-color: #fb3a2f">
					<span><?php echo(getDayNumber($satir['e_tarih']))?></span><?php echo(getMonthName($satir['e_tarih']))?>
				</div>
				<div class="duyuru-baslik">
					<a href="index.php?s=icerik&icerik=etkinlik&id=<?php echo($satir['e_id'])?>"><?php if(strlen($satir['e_baslik']) >= 45) echo(substr($satir['e_baslik'],0,43)).'...'; else echo($satir['e_baslik']);?></a>
				</div>
			</div>
	<?php } ?>
			<div class="duyuru-button">
				<a href="index.php?s=tumicerik&icerik=etkinlik"  style="background-color: #fb3a2f">Tüm Etkinlikler</a>
			</div>
		</div>