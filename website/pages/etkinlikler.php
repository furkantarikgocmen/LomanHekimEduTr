<div class="duyuru" style="color: #fb3a2f; margin-left: 0; margin-right: 1%">
			<h2 style="color: #fb3a2f">ETKİNLİKLER</h2>
	<?php
	$data = getDataOptionel('etkinlik',"order by e_id asc limit 5");
	$data = json_decode($data, true);
	for($i = 0; $i < count($data); $i++)
	{
	$ay = explode('-',$data[$i]['e_tarih']);
	?>
			<div class="duyuru-item">
				<div class="tarih" style="background-color: #fb3a2f">
					<span><?php echo(getDayNumber($data[$i]['e_tarih']))?></span><?php echo(getMonthName($ay[1]))?>
				</div>
				<div class="duyuru-baslik">
					<a href="index.php?s=icerik&icerik=etkinlik&id=<?php echo($data[$i]['e_id'])?>"><?php if(strlen($data[$i]['e_baslik']) >= 45) echo(substr($data[$i]['e_baslik'],0,43)).'...'; else echo($data[$i]['e_baslik']);?></a>
				</div>
			</div>
	<?php } ?>
			<div class="duyuru-button">
				<a href="index.php?s=tumicerik&icerik=etkinlik"  style="background-color: #fb3a2f">Tüm Etkinlikler</a>
			</div>
		</div>