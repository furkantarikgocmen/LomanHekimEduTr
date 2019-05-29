		<div class="duyuru">
			<h2>DUYURULAR</h2>
			<?php
				include('lib/dateConverter.php');
	$connection = mysqli_connect('localhost', 'root', '', 'ip_no_2019');
	mysqli_query($connection,"SET NAMES 'utf8'");
	$sql = mysqli_query($connection,"select * from duyuru order by d_id desc limit 5"); // burası duyuruydu
	while($satir = mysqli_fetch_assoc($sql))
	{?>
			<div class="duyuru-item">
				<div class="tarih">
					<span><?php echo(getDayNumber($satir['d_tarih']))?></span><?php echo(getMonthName($satir['d_tarih']))?>
				</div>
				<div class="duyuru-baslik">
					<a href="index.php?s=icerik&icerik=duyuru&id=<?php echo($satir['d_id'])?>"><?php if(strlen($satir['d_baslik']) >= 45) echo(substr($satir['d_baslik'],0,44)).'...'; else echo($satir['d_baslik']);?></a>
				</div>
			</div>
			<?php } ?>	
			<div class="duyuru-button">
				<a href="index.php?s=tumicerik&icerik=duyuru">Tüm Duyurular</a>
			</div>
		</div>