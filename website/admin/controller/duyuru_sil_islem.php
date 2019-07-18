<?php
session_start();
if($_SESSION['login']=="true")
{

$dId = $_GET['id'];

if(isset($dId))
{
    include_once __DIR__."/../../lib/sql.php";
	veriSil("duyuru","d_id",$dId);
	header("location:../pages/admin.php?s=duyuru&sil=true");
}
else
	header("location:../pages/admin.php?s=duyuru&sil=false");
}
else
	header('location:../index.php?hata=yetkisizErisimReddedildi');
?>