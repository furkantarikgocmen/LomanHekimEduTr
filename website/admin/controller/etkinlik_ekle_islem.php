<?php
session_start();
if($_SESSION['login']=="true")
{

$etkinlikBaslik = $_POST['txtAdi'];
$icerik = $_POST['icerik'];
$tarih = date('y-m-d');
$tabloadi = "etkinlik";
$kolonlar = "e_baslik,e_icerik,e_tarih";
$degerler = "$etkinlikBaslik#$icerik#$tarih";

if(isset($etkinlikBaslik) && isset($icerik)){
    include_once __DIR__."/../../lib/sql.php";
	veriEkle($tabloadi,$kolonlar,$degerler);
	header('location:../pages/admin.php?s=etkinlik&kayit=true');
}
else{
	   header('location:../pages/admin.php?s=etkinlik&kayit=false');
   }
}
else
	header('location:../index.php?hata=yetkisizErisimReddedildi');
?>