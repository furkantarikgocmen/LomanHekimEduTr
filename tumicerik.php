<div class="subcat-list">
	<ul>
<?php
if(isset($_GET['icerik'])){
	$icerik = $_GET['icerik'];//tablo adı ile aynıdır. Haberler Duyurular Etkinlik vs..
	$harf = substr($icerik,0,1);
	
	$connection = mysqli_connect('localhost', 'root', '', 'ip_no_2019');
	mysqli_query($connection,"SET NAMES 'utf8'");
	$sorgu =  "select * from $icerik order by ".$harf."_id desc";
	$sql = mysqli_query($connection,$sorgu);
	while($satir = mysqli_fetch_assoc($sql))
	{?>
			<li>
				<div class="catfloat">
					<div class="catdetail catpost">
						<h2><?php echo($satir[$harf.'_baslik'])?></h2>
						<a class="catalink" href="index.php?s=icerik&icerik=<?php echo($icerik) ?>&id=<?php echo($satir[$harf.'_id'])?>">
							<div class="catcatimg">
								<div class="catimg">
							    <img src="images/image-empty.png" alt="" width="349.6px" height="203.2px"/> </div>
							</div>
						</a>
					</div>
				</div>
			</li>
		<?php }}?>
	</ul>
</div>

