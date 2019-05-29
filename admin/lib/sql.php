<?php 
//explode işlemi virgül yerine başka bir işaret ile değiştirilmeli, adresde virgül olduğu zaman hata oluşuyor.
//23.05.2019 Fixlendi. Yeni ayraç +-*/ 

function getAdres(){
	return 'localhost';
}
function getDbUser(){
	return 'root';
}function getDbPassword(){
	return '';
}function getDb(){
	return 'ip_no_2019';
}

function veriEkle ($tablo_adi,$kolon_adlari,$gelen_degerler)
{
	$tablo = $tablo_adi;
	$kolonlar = explode(',',$kolon_adlari);
	$degerler = explode('+-*/',$gelen_degerler);
	$uzunluk = count($degerler);
	/////////////////
	
	$columns = "";
	for($i = 0; $i < $uzunluk; $i++)
	{
		if($i == 0)
		{
			$columns = "$columns$kolonlar[$i]";
		}
		if($i == $i -1)
		{
			$columns = "$columns$kolonlar[$i]";
		}
		if($i != 0 && $i != $i -1)
		{
			//$i= $i - 1;
			$columns = "$columns,$kolonlar[$i]";
			//$i= $i + 1;
		}
	}
	
	$values = "";
	for($i = 0; $i < $uzunluk; $i++)
	{
		if($i == 0)
		{
			$values = "$values'$degerler[$i]'";
		}
		if($i == $i -1)
		{
			$values = "$values'$degerler[$i]'";
		}
		if($i != 0 && $i != $i -1)
		{
			$values = "$values,'$degerler[$i]'";
		}
	}
		
	$sorgu = "insert into $tablo ($columns) values ($values) ";
	istek($sorgu);
}

function veriGuncelle ($tablo_adi,$nelerinGuncellenecegi,$yeniDegerler,$neyeGoreGuncellenecegi,$hangiDegerinGuncellenecegi)
{
	
	$tablo = $tablo_adi;
	$kolonlar = explode(',',$nelerinGuncellenecegi);
	$degerler = explode('+-*/',$yeniDegerler);
	$uzunluk = count($degerler);
	/////////////////
	
	$degisen = "";
	for($i = 0; $i < $uzunluk; $i++)
	{
		if($i == 0)
		{
			$degisen = "$kolonlar[$i] = '$degerler[$i]'";
		}
		if($i == $i -1)
		{
			$degisen = "$kolonlar[$i] = '$degerler[$i]'";
		}
		if($i != 0 && $i != $i -1)
		{
			$degisen = "$degisen, $kolonlar[$i] = '$degerler[$i]'";
		}
	}
	$sorgu = "update $tablo set $degisen where $neyeGoreGuncellenecegi = '$hangiDegerinGuncellenecegi'";
	istek($sorgu);
	return($sorgu);
}

function veriSil($tablo_adi,$neredenSilinecegi,$neyinSilinecegi)
{
	$sorgu = "delete from $tablo_adi where $neredenSilinecegi = '$neyinSilinecegi'";
	istek($sorgu);
}

function loginAuthentication($kullanici_adi,$kullanici_sifre)
{
	$connection = mysqli_connect(getAdres(),getDbUser(),getDbPassword(),getDb());
	$sql = "select * from kullanici where k_adi='".$kullanici_adi."' and k_sifre = '".$kullanici_sifre."'";
	$query = mysqli_query($connection,$sql);
	$satir = mysqli_num_rows($query);
	return($satir);
	mysqli_close($connection);
}

function howMany($tablo){
	
	$connection = mysqli_connect(getAdres(),getDbUser(),getDbPassword(),getDb());
	$query = mysqli_query($connection,"SELECT COUNT(*) FROM `$tablo`");
	$rows = mysqli_fetch_row($query);
	return($rows[0]);
}

function getInformation($tablo,$id){
	$t = substr($tablo,0,1);
	$connection = mysqli_connect(getAdres(),getDbUser(),getDbPassword(),getDb());
	mysqli_query($connection,"SET NAMES 'utf8'");
	$sql = mysqli_query($connection,"select * from $tablo where ".$t."_id"."= '$id'");
	$i=0;
	while($satir = mysqli_fetch_assoc($sql))
	{
		return $satir;
	}
}

function istek($sorgu)
{
	$connection = mysqli_connect(getAdres(),getDbUser(),getDbPassword(),getDb());
	
//	mysqli_query($connection,"SET NAMES 'utf-8'");
//	mysqli_query($connection,"SET CHARACTER SET 'utf-8'");
//	mysqli_query($connection,"SET COLLATION_CONNECTION 'utf8_turkish_ci'");
	
	mysqli_query($connection,"SET NAMES 'utf8'");
	mysqli_query($connection,$sorgu);
	mysqli_close($connection);
}
?>