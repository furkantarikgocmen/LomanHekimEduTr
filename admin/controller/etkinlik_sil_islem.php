<?php 
$eId = $_GET['id'];

if(isset($eId))
{
	include("../lib/sql.php");
	veriSil("etkinlik","e_id",$eId);
	header("location:../pages/admin.php?s=etkinlik&sil=true");
}
else
	header("location:../pages/admin.php?s=etkinlik&sil=false");
?>