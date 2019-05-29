<?php 
//2019-03-12
//Kullanım
//	
//echo(getDayNumber('2019-03-11'));
//echo(getMonthName('2019-03-12'));
//
//getDayNumber gün değerinin başında eğer 0 varsa 0'ı geri döndürmez.

function getMonthName($date){
	$month = substr($date,5,-3);
	switch ( $month ){
			
		case 01: return("Oca"); break;
		case 02: return("Şub"); break;
		case 03: return("Mar"); break;
		case 04: return("Nis"); break;
		case 05: return("May"); break;
		case 06: return("Haz"); break;
		case 07: return("Tem"); break;
		case 08: return("Agu"); break;
		case 09: return("Eyl"); break;
		case 10: return("Eki"); break;
		case 11: return("Kas"); break;
		case 12: return("Ara"); break;
	}
}

function getDayNumber($date){
	if(substr($date,8,2)[0]==0)
	{
		return $day = substr($date,9,2);
	}
	else
		return $day = substr($date,8,2);
}
?>