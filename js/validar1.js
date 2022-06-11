function validarEnviar() {

	let cantm;

	cantm = document.ejer1.cantidadmeses.value;


	if (cantm == "") {
		alert("La cantidad de meses es obligatorio");
		return 0;
	}else if (isNaN(cantm)) {
		alert("La cantidad de meses debe ser numerica");
		return 0;
	}else if (cantm <= 0) {
		alert("La cantidad de meses debe ser mayor a 0");
		return 0;
	}
	
	document.ejer1.submit();
	
}