<!DOCTYPE html>

<html>

<head>
	<title></title>

	<script type="text/javascript" src="js/validar1.js"></script>

    <link rel="stylesheet" type="text/css" href="css/miestilo2.css">

    <link rel="stylesheet" type="text/css" href="css/fuentes.css">

</head>

<body style="text-align: center;">

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
	            <a href="#" class="nav-menu-link nav-link nav-menu-link_active">Entregables</a>
	            <ul>
					<li><a href="ejercicio1.php">Ejercicio 1</a></li>
					<li><a href="ejercicio2.php">Ejercicio 2</a></li>
					<li><a href="ejercicio3.php">Ejercicio 3</a></li>
			    </ul>
	          </li>

          <li class="nav-menu-item">
            <a href="#" class="nav-menu-link nav-link nav-menu-link_active">Entregables 2</a>
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

    <main class="div-main-categorias">


	<form name="ejer1" method="post" action="proceso1.php" target="salida">
		<fieldset>
			<legend><h1>PAQUETES TURISTICOS</h1></legend>

			<label>Paquete Turistico a Panamá ====>  S/. 2807</label><br>
			<label>Paquete Turistico a México ====>  S/. 2309</label><br>
			<label>Paquete Turistico a Argentina ====>  S/. 3078</label><br><br>
			<label>Indique el paquete turistico: </label>
			<select style="text-align: center;" name="paquete">
				<option>Panamá</option>
				<option>México</option>
				<option>Argentina</option>
			</select><br><br>

			<label>Indique el tipo de tarjeta: </label>
			<select style="text-align: center;" name="tipo">
				<option>Visa</option>
				<option>Mastercard</option>
				<option>America Express</option>
			</select><br><br>
			<label>Ingrese cantidad de meses a fraccionar: </label>
			<input type="text" name="cantidadmeses"><br><br>

			<input type="button" onclick="validarEnviar()" value="Generar tabla de amortizacion"><br><br>
			<iframe name="salida" width="800px" height="700px"></iframe>
			</fieldset>
	</form>

	</main>


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
	<script type="text/javascript" src="js/miscript.js"></script>

	
</body>
</html>