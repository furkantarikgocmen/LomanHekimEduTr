<ul class="sol-menu">
	
	<?php
		$data = getData('sayfalar');
		$data = json_decode($data, true);
		for($i = 0; $i < count($data); $i++)
		{
		?>
			<li><a href="index.php?id=<?php echo($data[$i]['s_id']); ?>"><?php echo($data[$i]['s_baslik']); ?></a></li>
		<?php } ?>
</ul>