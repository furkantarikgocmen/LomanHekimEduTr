<div class="ortamenu">
	  <div class="kapsama">
			<div class="ortamenuicerik">
				<div class="logo"><a href="index.php"><img src="images/logo.png" width="122.88" height="122.84" alt=""/></a></div>
			  <div class="ortamenusag">
				  <?php
				  	$connection = mysqli_connect('localhost', 'root', '', 'ip_no_2019');
					mysqli_query($connection,"SET NAMES 'utf8'");
					$sql = mysqli_query($connection,"select * from sayfalar order by s_id asc limit 8");
					while($satir = mysqli_fetch_assoc($sql))
					{
				  ?>
					<a href="index.php?id=<?php echo($satir['s_id']); ?>"><div class="ortamenusag-box"><?php echo($satir['s_baslik']); ?></div></a>
				  <?php } ?>
				</div>
			</div>
		</div>
	</div>