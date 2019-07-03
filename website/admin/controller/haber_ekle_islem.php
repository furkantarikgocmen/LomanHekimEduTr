<?php

$haberBaslik = $_POST['txtAdi'];
$icerik = $_POST['icerik'];
$tarih = date('y-m-d');
$tabloadi = "haber";
$kolonlar = "h_baslik,h_icerik,h_tarih";
$degerler = "$haberBaslik#$icerik#$tarih";

if(isset($haberBaslik) && isset($icerik)){
    include_once __DIR__."/../../lib/sql.php";
	veriEkle($tabloadi,$kolonlar,$degerler);
	header('location:../pages/admin.php?s=haber&kayit=true');
}
else{
	   header('location:../pages/admin.php?s=haber&kayit=false');
   }
?>