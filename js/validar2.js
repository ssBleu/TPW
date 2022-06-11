
document.addEventListener("DOMContentLoaded", function () {
	document.getElementById('formu2').addEventListener('submit', validarDatos)
});

function validarDatos(evento) {
	evento.preventDefault();

	let cantn;

	cantn= document.getElementById('cantinum').value; 

	if (cantn==0) {
		alert("La cantidad es obligatoria");
		return 0;
	}

	else if (isNaN(cantn)){
		alert("La cantidad debe ser númerica");
		return 0;
	}

	this.submit(); 

}
 
 