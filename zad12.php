<?php
	//Zadanie 12
	//Napisz skrypt, wypisujący w kolejności niemalejącej (czyli na logikę rosnącej) trzy liczby.
	
	$liczba1 = 12;
	$liczba2 = 600;
	$liczba3 = 50;
	
	if($liczba1 < $liczba3){
		
		if($liczba2 < $liczba3){
			
			if($liczba1 < $liczba2){
				
				echo($liczba1."<".$liczba2."<".$liczba3);
				
			}
			else{
				
				echo($liczba2."<".$liczba1."<".$liczba3);
				
			}
			
		}
		else{
			
			echo($liczba1."<".$liczba3."<".$liczba2);
			
		}
		
	}
	else{
		
		if($liczba2 < $liczba3){
			
			echo($liczba2."<".$liczba3."<".$liczba1);
			
		}
		else{
			
			if($liczba1 < $liczba2){
				
				echo($liczba3."<".$liczba1."<".$liczba2);
				
			}
			else{
				
				echo($liczba3."<".$liczba2."<".$liczba1);
				
			}
			
		}
		
	}
	
?>