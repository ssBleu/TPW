
function Zodiacal() {

	var img
	var txt

	let	dia,mes;

	dia = document.formulario3.dia.value;
	mes = document.formulario3.mes.value;

	if(dia==0){
		alert("El dia es obligatorio");
		return 0;
	}
	if(mes==0){
		alert("El mes es obligatorio");
		return 0;
	}
	else if(isNaN(dia)){
		alert("El dia debe ser un numero")
		return 0;
	} 
	else if(isNaN(mes)){
		alert("El mes debe ser un numero")
		return 0;
	}

	if (dia>31){
		alert("El dia no puede ser mayor que 31")
		return 0;
	}

	if (dia<1){
		alert("El dia no puede ser menor que 1")
		return 0;
	}

	if (mes>12){
		alert("El mes no puede ser mayor que 12")
		return 0;
	}

	if (mes<1){
		alert("El mes no puede ser menor que 1")
		return 0;
	}



	if ((dia>=21 && mes==1) || (dia<=19 && mes==2)) {
	   img = "imagenes/Acuario.jpg"
	   txt = "Los Acuario son personas amorosas, cariñosas y muy sensibles. Les gusta el dar sin esperar algo a cambio y las causas nobles. Son honestos y, si se equivocan, cambiarán de opinión sin dudarlo."
    }

    if ((dia>=20 && mes==2) || (dia<=20 && mes==3)) {
	   img = "imagenes/Picis.jpg"
	   txt = "Los nacidos bajo el signo de Piscis suelen ser personas tranquilas, amables y pacientes. Se preocupan más por los problemas de otras personas que por sus propios problemas. La honestidad puede llegar a ser una de sus mejores cualidades."
	}

	if ((dia>21 && mes==3) || (dia<=20 && mes==4)) {
	   img =  "imagenes/Aries.jpg"
	   txt = "A los Aries le encanta ser el número uno, por lo que no sorprende que los nacidos en estas fechas sean el primer signo del zodíaco. Audaz, aventurero y ambicioso, los Aries nunca tienen miedo a los comienzos o nuevas etapas desafiantes. Suelen ser personas muy adaptables, detallistas y observadores."
	}
	if ((dia>=21 && mes==4) || (dia<=21 && mes==5)) {
	   img =  "imagenes/Tauro.jpg"
	   txt = "Tauro es un signo amoroso. También es práctico y decidido en la toma de decisiones. Al igual que su animal espiritual celestial, los tauro son amantes de la fuerza y de la resistencia, con una gran voluntad para hacer las cosas y encaminarlas hacia el camino correcto. Suelen ser personas estables, conservadoras y gente de paz."
	}
	if ((dia>=22 && mes==5) || (dia<=21 && mes==6)) {
	   img = "imagenes/Geminis.jpg"
	   txt = "¿Alguna vez has estado tan ocupado que deseaste poder clonarte solo para hacer todo? Esa es la caracteristica de Géminis en pocas palabras. Apropiadamente simbolizado por los gemelos celestiales, los nacidos bajo el signo de Geminis suelen ser personas muy equilibradas, adaptables y entregadas al amor. La inteligencia es una de sus cualidades más conocidas y reconocidas."
	}
	if ((dia>=21 && mes==6) || (dia<=23 && mes==7)) {
		img = "imagenes/Cancer.jpg";
		txt = "Los Cáncer son personas hogareñas, dedicadas y románticas. Suelen ser personas simpáticas y extrovertidos, por lo que le suelen caer bien a todo el mundo. Son muy intuitivos y de carácter.";
	}
	if ((dia>=24 && mes==7) || (dia<=23 && mes==8)) {
	     img = "imagenes/Leo.jpg"
	     txt = "A los Leo les gusta ser líderes, apoyándose en sus ideas y convicciones. Suelen ser personas que les encanta ser el centro de atención y celebrarse a sí mismos, aunque hay veces que les gana la soberbia. Leo está representado por el león y es el signo más dominante del Zodiaco. Es creativo y extrovertido."
	}
	if ((dia>=24 && mes==8) || (dia<=23 && mes==9)) {
	     img = "imagenes/Virgo.jpg"
	     txt = "Los virgos son lógicos, observadores, prácticos y organizados en su enfoque de la vida. Son personas que les gusta aprender siempre, así como de carácter fuerte, con ideas firmes y claras. Son intuitivos y capaces de tener un análisis de la situación para ver todos los lados de un argumento."
	}
	if ((dia>=24 && mes==9) || (dia<=23 && mes==10)) {
	     img ="imagenes/Libra.jpg"
	     txt ="Libra es un signo del Zodiaco amante del equilibrio y la igualdad en todos los sentidos. Son personas que valoran el esfuerzo de los demás y les gusta trabajar en equipo. Los Libra tienen encanto, elegancia, buen gusto y son amables y pacíficos, por lo que es el signo más civilizado."
	}
	if ((dia>=24 && mes==10) || (dia<=22 && mes==11)) {
	     img ="imagenes/Escorpio.jpg"
	     txt = "Son personas de mente calculadora, con carácter fuerte, pero generoso en el fondo. Un Escorpio es hábil para negociar o alcanzar sus objetivos. También tienen mucha fuerza de voluntad y muestran tenacidad. Suelen ser apasionados."
	}
	if ((dia>=23 && mes==11) || (dia<=21 && mes==12)) {
	     img = "imagenes/Sagitario.jpg"
	     txt = "Los Sagitario suelen ser desordenados o hasta berrinchudos si las cosas no salen como las planearon. Por el contrario, pueden efoncar toda su energia para para solucionar dificultades. Son buenos organizadores, aprenden cosas nuevas y abarcan nuevos proyectos."
	
	}
	if ((dia>=22 && mes==12) || (dia<=20 && mes==1)) {
	     img = "imagenes/Capricornio.jpg"
	     txt = " Tienen la capacidad natural de encontrar soluciones a los problemas, incluso si parecen casos perdidos. A menudo son amantes del orden, la estabilidad y de que todo camine conforme lo han planeado. Estabilidad, seguridad y tranquilidad son las mejores definiciones de Capricornio."

	}

	document.getElementById("imgzodiac").src =img;
	document.getElementById("txtzodiac").innerHTML =txt;

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
