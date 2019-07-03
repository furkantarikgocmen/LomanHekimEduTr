<?php
include_once __DIR__."/../../lib/sql.php";
$kullaniciAdi = $_POST['txtAdi'];
$kullaniciSifre = $_POST['txtSifre'];
$tabloadi = "kullanici";
$kolonlar = "k_adi,k_sifre";
if(isset($kullaniciAdi) && isset($kullaniciSifre)){
	veriEkle($tabloadi,$kolonlar,"$kullaniciAdi#$kullaniciSifre");
	header('location:../pages/admin.php?s=kullanici&ekle=true');
}
else{
	header('location:../pages/admin.php?s=kullanici&ekle=false');
}

?>