<?php
session_start();
if($_SESSION['login']=="true")
{

$duyuruId = $_GET['d_id'];
$duyuruBaslik = $_POST['txtAdi'];
$icerik = $_POST['icerik'];
$tabloadi = "duyuru";
$kolonlar = "d_baslik,d_icerik";
$degerler = "$duyuruBaslik#$icerik";
if(isset($duyuruId)){
    include_once __DIR__."/../../lib/sql.php";
	veriGuncelle($tabloadi,$kolonlar,$degerler,"d_id",$duyuruId);
	
	header('location:../pages/admin.php?s=duyuru&guncelle=true');
}
else{
	header('location:../pages/admin.php?s=duyuru&guncelle=false');
}
}
else
	header('location:../index.php?hata=yetkisizErisimReddedildi');
?>