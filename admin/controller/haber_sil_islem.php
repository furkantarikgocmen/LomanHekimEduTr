<?php 
$hId = $_GET['id'];

if(isset($hId))
{
	include("../lib/sql.php");
	veriSil("haber","h_id",$hId);
	header("location:../pages/admin.php?s=haber&sil=true");
}
else
	header("location:../pages/admin.php?s=haber&sil=false");
?>