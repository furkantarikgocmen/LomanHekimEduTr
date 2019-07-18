<?php
session_start();
if($_SESSION['login']=="true")
{

$sayfaBaslik = $_POST['txtAdi'];
$icerik = $_POST['icerik'];
$tabloadi = "sayfalar";
$kolonlar = "s_baslik,s_icerik";
$degerler = "$sayfaBaslik#$icerik";

if(isset($sayfaBaslik) && isset($icerik)){
    include_once __DIR__."/../../lib/sql.php";
	veriEkle($tabloadi,$kolonlar,$degerler);
	header('location:../pages/admin.php?s=sayfa&kayit=true');
}
else{
	   header('location:../pages/admin.php?s=sayfa&kayit=false');
   }
}
else
	header('location:../index.php?hata=yetkisizErisimReddedildi');
?>