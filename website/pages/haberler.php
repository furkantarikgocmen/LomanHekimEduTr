<div class="duyuru" style="color: #00d066; margin-left: 1%;margin-right: 1%">
			<h2 style="color: #00d066">HABERLER</h2>
	<?php
	$data = getDataOptionel('haber',"order by h_id asc limit 5");
	$data = json_decode($data, true);
	for($i = 0; $i < count($data); $i++)
	{
	$ay =explode('-',$data[$i]['h_tarih']);
	?>
			<div class="duyuru-item">
				<div class="tarih" style="background-color: #00d066">
					<span><?php echo(getDayNumber($data[$i]['h_tarih']))?></span><?php echo(getMonthName($ay[1]))?>
				</div>
				<div class="duyuru-baslik">
					<a href="index.php?s=icerik&icerik=haber&id=<?php echo($data[$i]['h_id'])?>"><?php if(strlen($data[$i]['h_baslik']) >= 45) echo(substr($data[$i]['h_baslik'],0,44)).'...'; else echo($data[$i]['h_baslik']);?></a>
				</div>
			</div>
	<?php } ?>
			<div class="duyuru-button">
				<a href="index.php?s=tumicerik&icerik=haber"  style="background-color: #00d066">Tüm Haberler</a>
			</div>
		</div>