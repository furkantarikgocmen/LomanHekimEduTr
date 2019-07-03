<?php
$sayfaId = $_GET['s_id'];
$sayfaBaslik = $_POST['txtAdi'];
$icerik = $_POST['icerik'];
$tabloadi = "sayfalar";
$kolonlar = "s_baslik,s_icerik";
$degerler = "$sayfaBaslik#$icerik";
if(isset($sayfaId)){
    include_once __DIR__."/../../lib/sql.php";
	veriGuncelle($tabloadi,$kolonlar,$degerler,"s_id",$sayfaId);
	header('location:../pages/admin.php?s=sayfa&guncelle=true');
}
else{
	header('location:../pages/admin.php?s=sayfa&guncelle=false');
}
?>