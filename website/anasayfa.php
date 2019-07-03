<?php
if(isset($_GET['id']))
{
	$sayfaId = $_GET['id'];
    include_once __DIR__.'/lib/sql.php';
	$veri = getInformation('sayfalar',$sayfaId);

	
	echo('<div class="singletitle akademiksingle">');
	echo('<h3>');
	echo($veri['s_baslik']);
	echo('</h3>');
	echo('</div>');
	
	
	echo('<div class="post_content post_content_akademik">');
	echo($veri['s_icerik']);
	echo('</div>');
	
}
if(!isset($_GET['id']))
{
	include('pages/banner.php');
	echo('<div class="icerik">');
	include('pages/duyurular.php');
	include('pages/haberler.php');
	include('pages/etkinlikler.php');
	echo('</div>');
	include('pages/hizlibaglantilar.php');
}
?>