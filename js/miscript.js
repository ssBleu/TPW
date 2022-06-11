
//imput button CAMBIO SOLES-DOLARES-EUROS


function CambiaraSoles(sol,ubic) {


	document.getElementById(ubic).innerHTML=sol.toFixed(2)+" S/.";
}

function CambiaraDolares(sol,ubic) {

	let dolar

	dolar=sol*0.269392;

	document.getElementById(ubic).innerHTML=dolar.toFixed(2)+" $";
}

function CambiaraEuros(sol,ubic) {

	let euro

	euro=sol*0.250899;

	document.getElementById(ubic).innerHTML=euro.toFixed(2)+" €"; //.toFixed(numero de decimales) -->
}




//boton LIKE Y DISLIKE JUEGOS


function Like(juego){

  var jueguito = document.getElementById(juego);
  jueguito.style.cssText = 'background: #264F9B ; color: black';
}

function Dislike(juego){
  var jueguito = document.getElementById(juego);
  jueguito.style.cssText = 'background: #272727';
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











//para el boton mostrar mas y menos 



let BotonLeerMas1 = document.getElementById('BotonLeerMas1');
let TextoOculto1= document.getElementById('TextoOculto1');

BotonLeerMas1.addEventListener('click', MostrarMasMenos1);

function MostrarMasMenos1() {
  TextoOculto1.classList.toggle('muestraTexto1'); //// Si tiene "muestraTexto1" bórralo, si no añádelo

  //para cambiar el texto del boton al dar clic
  if(TextoOculto1.classList.contains('muestraTexto1')) {
    BotonLeerMas1.innerHTML = 'Mostrar Menos'
  }
  else {
    BotonLeerMas1.innerHTML = 'Mostrar Mas'
  }
}



let BotonLeerMas2 = document.getElementById('BotonLeerMas2');
let TextoOculto2= document.getElementById('TextoOculto2');

BotonLeerMas2.addEventListener('click', MostrarMasMenos2);

function MostrarMasMenos2() {
  TextoOculto2.classList.toggle('muestraTexto2');

  if(TextoOculto2.classList.contains('muestraTexto2')) {
    BotonLeerMas2.innerHTML = 'Mostrar Menos'
  }
  else {
    BotonLeerMas2.innerHTML = 'Mostrar Mas'
  }
}

let BotonLeerMas3 = document.getElementById('BotonLeerMas3');
let TextoOculto3= document.getElementById('TextoOculto3');

BotonLeerMas3.addEventListener('click', MostrarMasMenos3);

function MostrarMasMenos3() {
  TextoOculto3.classList.toggle('muestraTexto3');

  if(TextoOculto3.classList.contains('muestraTexto3')) {
    BotonLeerMas3.innerHTML = 'Mostrar Menos'
  }
  else {
    BotonLeerMas3.innerHTML = 'Mostrar Mas'
  }
}