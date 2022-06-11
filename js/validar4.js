document.addEventListener("DOMContentLoaded", function () {
	document.getElementById('formu4').addEventListener('submit', validarDatos)
});

function validarDatos(evento) {
	evento.preventDefault();

	let n1;
	let n2;
	let n3;

	n1= document.getElementById('num1').value; 
	n2= document.getElementById('num2').value; 
	n3= document.getElementById('num3').value; 

	if (n1==0) {
		alert("El lado 1 es obligatorio");
		return 0;
	} 

	else if (isNaN(n1)){
		alert("Debe ser númerico");
		return 0;
	}

	if (n2==0) {
		alert("El lado 2 es obligatorio");
		return 0;
	} 

	else if (isNaN(n2)){
		alert("Debe ser númerico");
		return 0;
	}

	if (n3==0) {
		alert("El lado 3 es obligatorio");
		return 0;
	} 

	else if (isNaN(n3)){
		alert("Debe ser númerico");
		return 0;
	}

	this.submit(); 

}
