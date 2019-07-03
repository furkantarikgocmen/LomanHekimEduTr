<?php
session_start();
include("fckeditor/fckeditor.php") ;
include_once __DIR__."/../../lib/sql.php";

if($_SESSION['login']=="true")
{
	if (isset($_GET['s']))
    {
        $sayfa = $_GET['s'];
    }
    else
    {
        $sayfa = "anasayfa";
    }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lokman Hekim Üniversitesi</title>
	<link rel="stylesheet" href="../style/admin.css" media="screen" type="text/css">
</head>

<body>
	<div id="top">
		<div id="top-sol"><a href="admin.php?s=anasayfa"><img src="../images/logo.png" style="width: 110px"></a></div>
		<div id="top-sag"><a href="../controller/logout.php"><img src="../images/logout.png" width="95" height="95" alt=""/></a></div>
	</div>
	
	<div id="govde">
		<div id="govde-sol">
			<?php include('menu.php')?>
		</div>
		<div id="govde-sag">
			<?php include($sayfa . '.php')?>
		</div>
	</div>
	
	<div id="footer">
		<h3>Furkan Tarık Göçmen 174256006</h3>
	</div>
</body>
</html>
<?php
}
else
{
	header('location:../index.php?hata=2');
}
?>