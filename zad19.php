<?php
	
	$dzien=date("j");
	$miesiac=date("m");
	$rok=date("Y");
	
	switch($miesiac){
		
		case 1:
			echo ($dzien.".Styczeń.".$rok);
			break;
			
		case 2:
			echo ($dzien.".Luty.".$rok);
			break;
			
		case 3:
			echo ($dzien.".Marzec.".$rok);
			break;
			
		case 4:
			echo ($dzien.".Kwiecień.".$rok);
			break;
			
		case 5:
			echo ($dzien.".Maj.".$rok);
			break;
			
		case 6:
			echo ($dzien.".Czerwiec.".$rok);
			break;
			
		case 7:
			echo ($dzien.".Lipiec.".$rok);
			break;
			
		case 8:
			echo ($dzien.".Sierpień.".$rok);
			break;
			
		case 9:
			echo ($dzien.".Wrzesień.".$rok);
			break;
			
		case 10:
			echo ($dzien.".Październik.".$rok);
			break;
		
		case 11:
			echo ($dzien.".Listopad.".$rok);
			break;
			
		case 12:
			echo ($dzien.".Grudzień.".$rok);
			break;	
		
	}

?>