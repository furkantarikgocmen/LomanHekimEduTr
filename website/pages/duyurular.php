		<div class="duyuru">
			<h2>DUYURULAR</h2>
			<?php
	include_once __DIR__ . '/../lib/dateConverter.php';
	$data = getDataOptionel('duyuru',"order by d_id asc limit 5");
	$data = json_decode($data, true);
	for($i = 0; $i < count($data); $i++)
	{
	$ay =explode('-',$data[$i]['d_tarih']);
			?>
			<div class="duyuru-item">
				<div class="tarih">
					<span><?php echo(getDayNumber($data[$i]['d_tarih']))?></span><?php echo(getMonthName($ay[1]))?>
				</div>
				<div class="duyuru-baslik">
					<a href="index.php?s=icerik&icerik=duyuru&id=<?php echo($data[$i]['d_id'])?>"><?php if(strlen($data[$i]['d_baslik']) >= 45) echo(substr($data[$i]['d_baslik'],0,44)).'...'; else echo($data[$i]['d_baslik']);?></a>
				</div>
			</div>
			<?php } ?>	
			<div class="duyuru-button">
				<a href="index.php?s=tumicerik&icerik=duyuru">Tüm Duyurular</a>
			</div>
		</div>