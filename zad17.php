<?php

	$liczbaA=45;
	$liczbaB=36;
	$NWD=0;
	
	if($liczbaA%$liczbaB==0){
		
		$NWD=$liczbaB;
		echo("1: $NWD"."<Br>");
		
		
	}
	else{
		
		$flaga=0;
		
		$liczbaA2=$liczbaA;
		$liczbaB2=$liczbaB;
		
		while($flaga==0){
			
			$temp=$liczbaA2%$liczbaB2;
			$liczbaA2=$liczbaB2;
			$liczbaB2=$temp;
			
			echo("2: $temp"."<Br>");
			
			if($liczbaA2%$liczbaB2==0){
		
				$NWD=$liczbaB2;
				$flaga=1;
				
				echo("3: $NWD"."<Br>");
				
			}
			
		}
		
	}
	
	$NWW = (($liczbaA*$liczbaB)/$NWD);
	
	echo("Najmniejszym wspólnym podzielnikiem jest $NWW");

?>