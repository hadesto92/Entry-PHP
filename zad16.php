<?php

	$tab[]=0;
	
	$N=98;
	
	for($i=1; $i<=($N*$N); $i++){
		
		if($N%$i==0){
			$tab[$i]=0;
		}
		else{
			$tab[$i]=1;
		}

	}
	
	$flaga=0;
	$i=2;
	while($flaga==0){
		
		if($i==$N){
			
			$i++;
			
		}
		
		if($tab[$i]==0){
			
			$flaga=1;
			echo("Podana liczba $N nie jest liczbą pierwszą");
			
		}
		
		if($i==($N*$N)){
			
			$flaga=1;
			echo("Podana liczba $N jest liczbą pierwszą");
			
		}
		else{
			
			$i++;
			
		}
		
	}

?>