<?php

if(isset($_GET['icerik']) && isset($_GET['id'])){
	$id = $_GET['id'];
	$icerik = $_GET['icerik'];//tablo adı ile aynıdır. Haberler Duyurular Etkinlik vs..
	include('lib/sql.php');
	$harf = substr($icerik,0,1);
	include('pages/solmenu.php');
	?>
<div class="singletitle"><?php echo(getInformation($icerik,$id)[$harf.'_baslik'])?></div>
	<div class="post-icerik"><?php echo(getInformation($icerik,$id)[$harf.'_icerik'])?></div>
<?php
} 
?>