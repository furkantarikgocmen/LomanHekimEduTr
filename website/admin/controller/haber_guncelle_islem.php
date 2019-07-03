<?php
$haberId = $_GET['d_id'];
$haberBaslik = $_POST['txtAdi'];
$icerik = $_POST['icerik'];
$tabloadi = "haber";
$kolonlar = "h_baslik,h_icerik";
$degerler = "$haberBaslik#$icerik";
if(isset($haberId)){
    include_once __DIR__."/../../lib/sql.php";
	veriGuncelle($tabloadi,$kolonlar,$degerler,"h_id",$haberId);
	header('location:../pages/admin.php?s=haber&guncelle=true');
}
else{
	header('location:../pages/admin.php?s=haber&guncelle=false');
}
?>