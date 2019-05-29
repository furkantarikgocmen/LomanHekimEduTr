<?php 
$dId = $_GET['id'];

if(isset($dId))
{
	include("../lib/sql.php");
	veriSil("duyuru","d_id",$dId);
	header("location:../pages/admin.php?s=duyuru&sil=true");
}
else
	header("location:../pages/admin.php?s=duyuru&sil=false");
?>