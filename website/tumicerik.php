<div class="subcat-list">
	<ul>
<?php
if(isset($_GET['icerik'])){
    include_once __DIR__.'/lib/sql.php';
	$icerik = $_GET['icerik'];//tablo adı ile aynıdır. Haberler Duyurular Etkinlik vs..
	$harf = substr($icerik,0,1);
	$sHarf = "$harf"."_id";
	
	$satir = getDataOptionel($icerik,"order by $sHarf desc"); // veya where u_id = 1 veya join işlemleri
	$satir = json_decode($satir, true);
	for($i = 0; $i < count($satir); $i++)	
	{?>
			<li>
				<div class="catfloat">
					<div class="catdetail catpost">
						<h2><?php echo($satir[$i][$harf.'_baslik'])?></h2>
						<a class="catalink" href="index.php?s=icerik&icerik=<?php echo($icerik) ?>&id=<?php echo($satir[$i][$harf.'_id'])?>">
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

