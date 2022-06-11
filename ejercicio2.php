<!DOCTYPE html>
<html>
<head>
		<title> </title>        


	<link rel="stylesheet" type="text/css" href="css/miestilo2.css">

        <link rel="stylesheet" type="text/css" href="css/fuentes.css">


</head>

<body>

    	<!------- CABECERA-----------> 

    <header class="header">

        <nav class="nav">
            <a href="index.php" class="logo-nav-link">
                <img src="imagenes/dolphin.png" width="75px">
            </a>

            <button class="nav-toggle" ></button>

        <ul class="nav-menu">
          
            <li class="nav-menu-item">

                <a href="" class="nav-menu-link nav-link">Categorías</a>

                <ul>
                        <li><a href="deportes.php">Deportivos</a></li>
                        <li><a href="aventura.php">Aventuras</a></li>
                        <li><a href="estrategia.php">Estrategia</a></li>
                        <li><a href="accion.php">Acción</a></li>
                        <li><a href="plataformas.php">Plataformas</a></li>
                </ul>
            </li>

            <li class="nav-menu-item">
                <a href="nosotros.php" class="nav-menu-link nav-link">Nosotros</a>
            </li>

            <li class="nav-menu-item">
                <a href="reclamaciones.php" class="nav-menu-link nav-link nav-menu-link_active"
                  >Reclamaciones</a>
            </li>

            <li class="nav-menu-item">
                <a href="" class="nav-menu-link nav-link nav-menu-link_active">Entregables</a>
                <ul>
                    <li><a href="ejercicio1.php">Ejercicio 1</a></li>
                    <li><a href="ejercicio2.php">Ejercicio 2</a></li>
                    <li><a href="ejercicio3.php">Ejercicio 3</a></li>
                </ul>
              </li>

          <li class="nav-menu-item">
            <a href="" class="nav-menu-link nav-link nav-menu-link_active">Entregables 2</a>
                <ul>
                    <li><a href="2_ejercicio1.php">Ejercicio 1</a></li>
                    <li><a href="2_ejercicio2.php">Ejercicio 2</a></li>
                    <li><a href="2_ejercicio3.php">Ejercicio 3</a></li>
                    <li><a href="2_ejercicio4.php">Ejercicio 4</a></li>
                </ul>
          </li>

        </ul>

        </nav>
    </header>
	 <!------------------------------>




<main class="div-main-ejercicios">

<center>
	<form name ="formulario2"> <h3>EJERCICiO 2</h3><br><br>
		<label>Ingrese un caracter</label><br><br>
		<input type="text" name="caracter"><br><br>
		<label>Ingrese la altura</label><br><br>
		<input type="text" name="altura"><br><br>
		<input type="button" onclick="validarDatos()" value="Aceptar"><br><br>

		<br><span id="espacios"></span>
		<span id="caracter+espacios"></span>
		<span id="saltolinea"></span>
	</form>
</center>

</main>
    <!-------------FOOTER (FIJO)----------------------> 

			<footer>
        <div class="contenedor-footer">
            <div class="subcontenedores-footer">
                <h3 class="titulo-web-logo">DOLPHINTEC</h3>
                <span class="footer-info">970-022-722</span>
                <span class="footer-info">dolphintec@gmail.com</span>
            </div>
            <div class="footer-menus">
                <div class="subcontenedores-footer">
                    <span class="titulos-footer">menu</span>
                    <a href="" class="item-footer">Inicio</a>
                    <a href="" class="item-footer">Nosotros</a>
                    <a href="" class="item-footer">Libro de reclamaciones</a>
                </div>
                <div class="subcontenedores-footer">
                    <span class="titulos-footer">legal</span>
                    <a href="" class="item-footer">Política de cookies</a>
                    <a href="" class="item-footer">Borrar cookies</a>
                    <a href="" class="item-footer">Aviso Legal</a>
                </div>
            </div>
            
            <div class="subcontenedores-footer">
                <span class="titulos-footer">Síguenos en:</span>
                <div class="social-contenedor">
                    <a href="" class="redes-sociales"></a>
                    <a href="" class="redes-sociales"></a>
                    <a href="" class="redes-sociales"></a>
                </div>
            </div>
        </div>
        <div class="copyright-contenedor">
            <span class="copyright">Copyright 2022, Dolphintec.com.</span>
        </div>
    </footer>

	<!------------------------------------------> 


		  <script type="text/javascript" src="js/ejercicio2.js"></script>


</body>
</html>