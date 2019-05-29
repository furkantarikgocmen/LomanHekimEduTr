<?php 
$kullaniciId = $_GET['id'];

if(isset($kullaniciId))
{
	include('../lib/sql.php');
	veriSil("kullanici","k_id",$kullaniciId);
	header("location:../pages/admin.php?s=kullanici&sil=true");
}
else
	header("location:../pages/admin.php?s=kullanici&hata=1");
?>