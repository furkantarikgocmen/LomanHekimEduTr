<div class="duyuru" style="color: #00d066; margin-left: 1%;margin-right: 1%">
			<h2 style="color: #00d066">HABERLER</h2>
	<?php
	$connection = mysqli_connect('localhost', 'root', '', 'ip_no_2019');
	mysqli_query($connection,"SET NAMES 'utf8'");
	$sql = mysqli_query($connection,"select * from haber order by h_id desc limit 5");
	while($satir = mysqli_fetch_assoc($sql))
	{?>
			<div class="duyuru-item">
				<div class="tarih" style="background-color: #00d066">
					<span><?php echo(getDayNumber($satir['h_tarih']))?></span><?php echo(getMonthName($satir['h_tarih']))?>
				</div>
				<div class="duyuru-baslik">
					<a href="index.php?s=icerik&icerik=haber&id=<?php echo($satir['h_id'])?>"><?php if(strlen($satir['h_baslik']) >= 45) echo(substr($satir['h_baslik'],0,44)).'...'; else echo($satir['h_baslik']);?></a>
				</div>
			</div>
	<?php } ?>
			<div class="duyuru-button">
				<a href="index.php?s=tumicerik&icerik=haber"  style="background-color: #00d066">Tüm Haberler</a>
			</div>
		</div>


