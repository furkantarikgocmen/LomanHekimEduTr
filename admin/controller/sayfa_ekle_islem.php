<?php

$sayfaBaslik = $_POST['txtAdi'];
$icerik = $_POST['icerik'];
$tabloadi = "sayfalar";
$kolonlar = "s_baslik,s_icerik";
$degerler = "$sayfaBaslik+-*/$icerik";

if(isset($sayfaBaslik) && isset($icerik)){
	include('../lib/sql.php');
	veriEkle($tabloadi,$kolonlar,$degerler);
	header('location:../pages/admin.php?s=sayfa&kayit=true');
}
else{
	   header('location:../pages/admin.php?s=sayfa&kayit=false');
   }
?>