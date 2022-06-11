//LIBRO DE RECLAMACIONES (VALIDAR)

function validarDatos() {

	var nom, apel, mail, detal, prod, mont, fech;


	nom = document.getElementById('nombres').value;
	apel = document.getElementById('apellidos').value;
	mail = document.getElementById('email').value;
	detal = document.getElementById('detalle').value;
	prod = document.getElementById('producto').value;
	mont = document.getElementById('monto').value;
	fech = document.getElementById('fecha').value;


	if (nom==0) {
		alert("El nombre es obligatorio");
		return 0; //el formulario no se envia
	}

	if (apel==0) {
		alert("El apellido es obligatorio");
		return 0;
	}

	if (mail==0) {
		alert("El email es obligatorio");
		return 0;
	}

	if (detal==0) {
		alert("El detalle es obligatorio");
		return 0;
	}

	if (prod==0) {
		alert("El producto es obligatorio");
		return 0;
	}

	if (mont==0) {
		alert("El monto es obligatorio");
		return 0;
	}

	else if (isNaN(mont)){ //NAN : Not a Number true 
		alert("El monto debe ser númerico");
		return 0;
	}

	//para el type=radio


	if(!document.querySelector('input[name="option1"]:checked')) {
      alert("Escoja el tipo de reclamo");
      return 0;
      }

      //


        document.formulariouwu.submit();

}


//PARA EL MENÚ HEADER


const navToggle = document.querySelector(".nav-toggle");
const navMenu = document.querySelector(".nav-menu");

navToggle.addEventListener("click", () => {
  navMenu.classList.toggle("nav-menu_visible"); //para que aparezca el menu (con blur)

})
