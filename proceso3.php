<?php 

	$max;
	$i;

	$n1 = $_REQUEST['nro1'];
	$n2 = $_REQUEST['nro2'];
	$n3 = $_REQUEST['nro3'];

	$max = $n1;

	if ($n2 > $max) {
		$max = $n2; 
	}

	if ($n3 > $max) {
		$max = $n3; 
	}

	$i=$max;

	while (($i%$n1!=0)||($i%$n2!=0)||($i%$n3!=0)){
		      $i++;
		}

	$MCM = $i;

	echo "<center><i><b> 
	----- El MCM es: -----> </b></i> $MCM  </center>";
?>
