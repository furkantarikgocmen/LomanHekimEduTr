<?php
session_start();
if($_SESSION['login']=="true")
{

$eId = $_GET['id'];

if(isset($eId))
{
    include_once __DIR__."/../../lib/sql.php";
	veriSil("etkinlik","e_id",$eId);
	header("location:../pages/admin.php?s=etkinlik&sil=true");
}
else
	header("location:../pages/admin.php?s=etkinlik&sil=false");
}
else
	header('location:../index.php?hata=yetkisizErisimReddedildi');
?>