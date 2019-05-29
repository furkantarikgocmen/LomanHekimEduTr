<ul class="sol-menu">
	
	<?php
		$connection = mysqli_connect('localhost', 'root', '', 'ip_no_2019');
		mysqli_query($connection,"SET NAMES 'utf8'");
		$sql = mysqli_query($connection,"select * from sayfalar");
		while($satir = mysqli_fetch_assoc($sql))
		{
		?>
			<li><a href="index.php?id=<?php echo($satir['s_id']); ?>"><?php echo($satir['s_baslik']); ?></a></li>
		<?php } ?>
</ul>