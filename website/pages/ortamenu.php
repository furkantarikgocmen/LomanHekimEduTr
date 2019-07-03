<div class="ortamenu">
	  <div class="kapsama">
			<div class="ortamenuicerik">
				<div class="logo"><a href="index.php"><img src="images/logo.png" width="122.88" height="122.84" alt=""/></a></div>
			  <div class="ortamenusag">
				  <?php
				  	include_once __DIR__ . '/../lib/sql.php';
				  	$data = getDataOptionel('sayfalar',"order by s_id asc limit 8");
				  	$data = json_decode($data, true);
				  	for($i = 0; $i < count($data); $i++)
					{
				  ?>
					<a href="index.php?id=<?php echo($data[$i]['s_id']); ?>"><div class="ortamenusag-box"><?php echo($data[$i]['s_baslik']); ?></div></a>
				  <?php } ?>
				</div>
			</div>
		</div>
	</div>