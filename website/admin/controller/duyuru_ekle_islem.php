<?php

$duyuruBaslik = $_POST['txtAdi'];
$icerik = $_POST['icerik'];
$tarih = date('y-m-d');
$tabloadi = "duyuru";
$kolonlar = "d_baslik,d_icerik,d_tarih";
$degerler = "$duyuruBaslik#$icerik#$tarih";

if(isset($duyuruBaslik) && isset($icerik)){
	include_once __DIR__."/../../lib/sql.php";
	veriEkle($tabloadi,$kolonlar,$degerler);
	
	header('location:../pages/admin.php?s=duyuru&kayit=true');
}
else{
	   header('location:../pages/admin.php?s=duyuru&kayit=false');
   }
?>