<!DOCTYPE html>
<html>
	<head>
		<title>ZADANIE 15</title>
	</head>
	<body>
		<?php
			$N = 4;
			$wynik = 1;
			if($N == 1){
				echo "Return result $N!: $wynik";
			}
			else{
				for($i=1;$i<=$N;$i++){
				
					$wynik  = $wynik * $i;		// You write this a: $wynik *= $i
		
				}
				echo "Return result $N!: $wynik";
			}
		?>
	</body>
</html>