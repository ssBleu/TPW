<?php 
	
	$paq = $_REQUEST['paquete'];
	$tipo = $_REQUEST['tipo'];
	$cantm = $_REQUEST['cantidadmeses'];
	
	if ($paq == "Panamá") {
		$total = 2807;
	} elseif ($paq == "México") {
		$total = 2309;
	}else{
		$total = 3078;
	}

	if ($tipo == "Visa") {
		$inte = 0.03;
	}elseif ($tipo == "Mastercard") {
		$inte = 0.035;
	}else{
		$inte = 0.04;
	}

	echo "<center><h2>Paquete Turistico a $paq </h2>";
	echo "5 DIAS / 4 NOCHES <br>";
	echo "Vuelo + Alojamiento + Tours <br><br>";
	echo "Total a pagar: S/. $total <br>";
	echo "Tipo de tarjeta: $tipo <br>";
	echo "Cantidad de meses a fraccionar: $cantm <br><br>";

	


	$cuota = round((($total*$inte)/(1- pow((1+$inte), -$cantm))), 2);


	echo "<table style='text-align: center;' border=1";
			echo "<tr>";
				echo "<th>Mes</th>";
				echo "<th>Cuota mensual</th>";
				echo "<th>Pago del interés</th>";
				echo "<th>Pago del capital</th>";
				echo "<th>Deuda</th>";
			echo "</tr>";
			
			for ($i=1; $i <= $cantm; $i++) {
				$pint = round(($total * $inte), 2);
				$pcap = round(($cuota - $pint), 2);
				$deuda = round(($total - $pcap), 2);

				if ($deuda < 1) {
					$deuda = "0.00";
				}

				echo "<tr>";
					echo "<td> $i </td>";	
					echo "<td> $cuota </td>";	
					echo "<td> $pint </td>";	
					echo "<td> $pcap </td>";	
					echo "<td> $deuda </td>";
				echo "</tr>";
				$total = $deuda;		
			}

	echo "</table> </center>";
	
?>

<style type="text/css">
	
	table, tr, th, td {
		border-collapse: collapse;
		padding: 5px 10px;
	}

</style>
