
function Convertir() {

	bas = document.formulario1.base.value;            
	num = document.formulario1.numero.value;  

	//para encontrar el digito mayor y compararlo con la base

	let digitos = String(num).split('').map(c => parseInt(c)); 
	//=el "num" como caracteres. separar los caracteres.crear array transformandolos en numeros enteros
	//456 --> "456" --> "4" "5" "6"  --> {"4","5","6"} --> {4,5,6} 

    let digitoMayor = digitos[0];//se encuentra en la primera posicion
    digitos.forEach(a => digitoMayor = Math.max(digitoMayor, a));

    //se recorre cada "a" digito y se comprueba el mayor con 
    //Math.max(digitoMayor, "a"(digito actual de  iteracion")


    if (digitoMayor>=bas) {
    	alert("El numero no pertenece a la base")
		return 0;
    }

    //


	if(num == 0){
		alert("El número es obligatorio")
		return 0;
	} else if (isNaN(num)) {
		alert("Debe escribir un número")
		return 0;
	}

	if(bas == 0){
		alert("La base es obligatoria")
		return 0;
	} else if (isNaN(bas)) {
		alert("Debe escribir un número")
		return 0;
	}
	
	if (num<0) {
		alert("El numero no puede ser negativo")
		return 0;
	}

	if (bas<2) {
		alert("La base debe ser mayor a o igual a 2")
		return 0;
	} else if (bas>10) {
		alert("La base debe ser menor a o igual a 10")
		return 0;
	}

	document.getElementById("escondido").textContent ="El número en base 10 es: "
    document.getElementById("respuesta").textContent =parseInt(num, bas); 
    // parseInt(numero,base) transformar el numero ingresado en la base que se quiere.


}



// opcion!:
//	let respuesta=0;

//	const digitos = parseInt(numero_digi.length);


//	for (let i = 0; i <digitos; i++) {
//		let position = (digitos - 1 - i);//de atras hacia adelante 
//		let basePower = Math.pow(base, i);// 2ala 0 
//		respuesta += parseInt(numero[position])*basePower;//acumulando 
//	}

//	return respuesta;




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


