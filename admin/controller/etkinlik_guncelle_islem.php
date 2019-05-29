<?php
$etkinlikId = $_GET['e_id'];
$etkinlikBaslik = $_POST['txtAdi'];
$icerik = $_POST['icerik'];
$tabloadi = "etkinlik";
$kolonlar = "e_baslik,e_icerik";
$degerler = "$etkinlikBaslik+-*/$icerik";
if(isset($etkinlikId)){
	include('../lib/sql.php');
	veriGuncelle($tabloadi,$kolonlar,$degerler,"e_id",$etkinlikId);
	header('location:../pages/admin.php?s=etkinlik&guncelle=true');
}
else{
	header('location:../pages/admin.php?s=etkinlik&guncelle=false');
}
?>