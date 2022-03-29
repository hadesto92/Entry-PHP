<?php
	//Zadanie 13
	//Napisz skrypt, który wyliczy pierwiastki równania kwadratowego o współczynnikach A, B, C.
	
	$A = -2;
	$B = 4;
	$C = -2;
	
	$delta = ($B*$B) - 4*($A*$C);
	
	
	if($delta > 0){
	
		$pierwiastek_delta = sqrt($delta);
		
		$X1 = (((-$B)-$pierwiastek_delta)/(2*$A));
		$X2 = (((-$B)+$pierwiastek_delta)/(2*$A));
			
		echo("Pierwistkami kwadratowymi są: $X1 i $X2");
		
	}
	elseif($delta == 0){
		
		$X1 = ((-$B)/(2*$A));
		
		echo("Pierwiastkiem kwadratowym jest: $X1");
		
	}
	else{
		
		echo("Brak pierwiastków kwadratowych :(");
		
	}

?>