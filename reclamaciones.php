<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/miestilo2.css">

    <link rel="stylesheet" type="text/css" href="css/fuentes.css">
 

  </head>
  <body>

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


    <main>

     <div class="div-main-reclamaciones">

    	<div class="contenedor-formulario">
    		<div class="cajas-formulario">

    			<form id="formulariouwu" name="formulariouwu">

            <div class="titulo-formu">
    				<h2>Libro de Reclamaciones</h2>
            </div>

    				<div class="inputs-form">
    					<input type="text" id="nombres" name="">
    					<span>Nombre</span>
    				</div>
            <div class="inputs-form">
              <input type="text" id="apellidos" name="">
              <span>Apellidos</span>
            </div>
    				<div class="inputs-form">
    					<input type="email" id="email" name="">
    					<span>Email</span>
    				</div>

            <div class="inputs-form">
              <input type="text" name="" id="producto">
              <span>Producto Reclamado</span>
            </div>

            <div class="inputs-form">
              <input type="text" name="" id="monto">
              <span>Monto Reclamado</span>
            </div>

            <div class="inputs-form">
              <input type="date" name="" id="fecha" value="2021-05-05">
              <span>Fecha de adquisión</span>

            </div>

            <div class="inputs-form-radio">

              <input type="radio" name="option1" id=tiporeclamo><span>Devolución</span> <br>
              <input type="radio" name="option1" id=tiporeclamo><span>Queja/sugerencia</span>

            </div>


    				<div class="inputs-form">
    					<textarea id="detalle"></textarea>
    					<span>Escriba su reclamo...</span>

    				</div>

    				<div class="inputs-botones">

    					<input type="button" onclick="validarDatos()" value="Enviar" name="" id="botonenviar"> 

              <input type="reset" name="Limpiar" value="Limpiar todo">

                   

    				</div>




                         
    			</form>
    		</div>
    		<div class="imagen-formu">
    			<img src="imagenes/pajaro_envio.png">
    		</div>
    	</div>

      </div>

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
    <script type="text/javascript" src="js/miscript2.js"></script>
  </body>
</html>
