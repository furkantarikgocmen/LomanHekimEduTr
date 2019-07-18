<?php
session_start();
if($_SESSION['login']=="true")
{

$hId = $_GET['id'];

if(isset($hId))
{
    include_once __DIR__."/../../lib/sql.php";
	veriSil("haber","h_id",$hId);
	header("location:../pages/admin.php?s=haber&sil=true");
}
else
	header("location:../pages/admin.php?s=haber&sil=false");
}
else
	header('location:../index.php?hata=yetkisizErisimReddedildi');
?>