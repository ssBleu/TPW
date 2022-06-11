<?php
	$a = $_REQUEST['Lado1'];
	$b = $_REQUEST['Lado2'];
	$c = $_REQUEST['Lado3'];

	
			if( ($a+$b)>$c and ($a+$c)>$b and ($b+$c)>$a ){

			    $s = ($a+$b+$c)/2;

				$area=round((sqrt($s*($s-$a)*($s-$b)*($s-$c))),2);

             
				echo "<br><br><center><b> Es un triángulo </b><br><br>";

				if ($a==$b and $b==$c){
                   echo "El Triangulo es Equilátero<br><br>";
				}
                else if ($a==$b || $a==$c || $c==$b){
                   echo "El Triangulo es Isósceles<br><br>";
                }
                else{
                	echo "El Triángulo es Escaleno<br><br>";
                }


				echo "Y su área es ".$area." u² <br><br></center>";

			}

			else
				echo '<br><br><center><b> No es un triángulo :( </b><br><br>';
	

