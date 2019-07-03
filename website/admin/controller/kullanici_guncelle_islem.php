<?php
include_once __DIR__."/../../lib/sql.php";
$kullaniciId = $_GET['k_id'];
$kullaniciAdi = $_POST['txtAdi'];
$kullaniciSifre = $_POST['txtSifre'];
$tabloadi = "kullanici";
if(isset($kullaniciId) && isset($kullaniciAdi) && isset($kullaniciSifre)){
	veriGuncelle($tabloadi,"k_adi, k_sifre","$kullaniciAdi#$kullaniciSifre","k_id",$kullaniciId);
	header('location:../pages/admin.php?s=kullanici&guncelle=true');
}
else{
	header('location:../pages/admin.php?s=kullanici&guncelle=false');
}
?>