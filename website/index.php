<?php

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
<link rel="stylesheet" href="style/style.css" media="screen" type="text/css">
</head>
	<header>
		<?php include('pages/header.php');include('pages/ortamenu.php')?>
	</header>
<body>
	
	<?php include($sayfa . '.php')?>
</body>
	<footer><?php include('pages/footer.php')?></footer>
</html>
