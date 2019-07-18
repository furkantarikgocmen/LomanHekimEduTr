<?php
session_start();
if($_SESSION['login']=="true")
{

$kullaniciId = $_GET['id'];

if(isset($kullaniciId))
{
    include_once __DIR__."/../../lib/sql.php";
	veriSil("kullanici","k_id",$kullaniciId);
	header("location:../pages/admin.php?s=kullanici&sil=true");
}
else
	header("location:../pages/admin.php?s=kullanici&hata=1");
}
else
	header('location:../index.php?hata=yetkisizErisimReddedildi');
?>