<?php 
            
           
         	$n1 = $_REQUEST['nro1'];




	         echo "<center> <table style='text-align: center' border=1 bordercolor=#2D8303 cellpadding=5px>";
			echo "<tr style='color:#1F4605'>";
				echo "<th >Posición</th>";
				echo "<th>Número</th>";
				echo "<th>Suma de dígitos</th>";
				echo "<th>Descripción</th>";
			echo "</tr>";
			
			for ($var=1; $var<=$n1; $var++) {

				$Aleatorios[$n1] = rand(300,2000);


				$Pos = $var;
				$Num = $Aleatorios[$n1];
				$Suma = suma($Num);


				if (($Suma % 2) == 0) {
					$par_nopar = "Par";
				} else {
					$par_nopar = "Impar";
				}

				echo "<tr>";
					echo "<td style='color:#931010'><b> $Pos </b></td>";	
					echo "<td> $Num  </td>";	
					echo "<td> $Suma </td>";	
					echo "<td> $par_nopar  </td>";	
				echo "</tr>";
			}

	        echo "</table> </center>";



	          function suma($a){

	         	if ($a<10) 
	         		return $a;
	         		else
	         			return $a%10 + suma((int)($a/10));
	         	}
	     
?>