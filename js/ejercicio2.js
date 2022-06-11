function validarDatos(){
	let ctr, alt, aux=1;

	ctr = document.formulario2.caracter.value;
	alt = document.formulario2.altura.value;

	if (ctr == "") {
		alert("El caracter es obligatorio");
		return 0;
	}

	if (alt == "") {
		alert("La altura es obligatoria");
		return 0;

	} else if (isNaN(alt)) {
		alert("La altura debe ser numerica")
		return 0;
	}

	document.formulario2.submit();

	for (var i = alt; i > 0; i--) {
		for (var j = 0; j < aux; j++) {
			document.write("&nbsp&nbsp&nbsp&nbsp");
		}
		for (var j = 0; j < i*2-1; j++) {
			document.write(ctr+"&nbsp&nbsp");
		}
		aux++;
		document.write("<br>");
	}
}




//PARA EL MENÚ HEADER


const navToggle = document.querySelector(".nav-toggle");
const navMenu = document.querySelector(".nav-menu");

navToggle.addEventListener("click", () => {
  navMenu.classList.toggle("nav-menu_visible"); //para que aparezca el menu (con blur)

})

/*
 
"PARA IMPLEMENTAR COSAS EN LOS QUE NAV-VISIBLE"
 /* if (navMenu.classList.contains("nav-menu_visible")) {
    navToggle.setAttribute("Cerrar menú");
  } else {
    navToggle.setAttribute("Abrir menú");
  }
});*/


