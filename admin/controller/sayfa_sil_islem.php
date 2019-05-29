<?php 
$sId = $_GET['id'];

if(isset($sId))
{
	include("../lib/sql.php");
	veriSil("sayfalar","s_id",$sId);
	header("location:../pages/admin.php?s=sayfa&sil=true");
}
else
	header("location:../pages/admin.php?s=sayfa&sil=false");
?>