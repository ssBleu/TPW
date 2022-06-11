<!DOCTYPE html>
<html>
<head>
	<title></title>

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


	<main class="div-main-categorias"> 

	<section>
		<h1 class="categoria">Aventura</h1>
		<p  class="desc-categoria">En esta tienda te ofrecemos algunos juegos interesantes de aventura. Descargalos y comienza a divertirte.</p>
	</section>

	<hr color="#43EE47">


		<section class="tarjeta-juego" id="juego1_aven">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/Thehobbit.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>LEGO The Hobbit</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

								<input type="button" onclick="CambiaraSoles(49.95,'precioav_1')" name="" value="PEN">
							    <input type="button" onclick="CambiaraDolares(49.95,'precioav_1')" name="" value="USD">
							    <input  type="button" onclick="CambiaraEuros(49.95, 'precioav_1')" name="" value="EUR">

								     </div>

								     <div>

								    <span id="precioav_1">49.95 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>¡Recupera el Reino Perdido ladrillo a ladrillo! Únete a Bilbo Bolsón, Gandalf, Thorin y su compañía de Enanos en una aventura épica por la Tierra Media para recuperar la Montaña Solitaria en el juego de LEGO más extenso hasta la fecha.
								</p>
							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>TT Games</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>10/04/2014</span>	
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>PEGI 7</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego1_aven')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego1_aven')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>







				<section class="tarjeta-juego" id="juego2_aven">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/Tombraider.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>Shadow of the Tomb Raider: Definitive Edition</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

								<input type="button" onclick="CambiaraSoles(119.00,'precioav_2')" name="" value="PEN">
							    <input type="button" onclick="CambiaraDolares(119.00,'precioav_2')" name="" value="USD">
							    <input  type="button" onclick="CambiaraEuros(119.00, 'precioav_2')" name="" value="EUR">

								     </div>

								     <div>

								    <span id="precioav_2">119.00 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>Vive el capítulo final del origen de Lara mientras se convierte en la saqueadora de tumbas que está destinada a ser. Esta edición incluye el juego base, armas descargables, atuendos y habilidades.
								</p>
							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Eidos Montréal, Nixxes Software</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>14/09/2018</span>	
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>PEGI 18</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego2_aven')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego2_aven')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>








				<section class="tarjeta-juego" id="juego3_aven">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/Sherlock.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>Sherlock Holmes: The Devil's Daughter</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

								<input type="button" onclick="CambiaraSoles(99.00,'precioav_3')" name="" value="PEN">
							    <input type="button" onclick="CambiaraDolares(99.00,'precioav_3')" name="" value="USD">
							    <input  type="button" onclick="CambiaraEuros(99.00, 'precioav_3')" name="" value="EUR">

								     </div>

								     <div>

								    <span id="precioav_3">99.00 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>Experimenta una aventura fantástica con una jugabilidad única que mezcla investigación, acción y exploración para disfrutar de una experiencia extraordinaria que pondrá a prueba los límites de tus nervios y tu inteligencia.
								</p>
							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Frogwares</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>10/06/2016</span>
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>PEGI 16</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego3_aven')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego3_aven')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>








				<section class="tarjeta-juego" id="juego4_aven">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/Redead.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>Red Dead Redemption 2</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

								<input type="button" onclick="CambiaraSoles(213.99,'precioav_4')" name="" value="PEN">
							    <input type="button" onclick="CambiaraDolares(213.99,'precioav_4')" name="" value="USD">
							    <input  type="button" onclick="CambiaraEuros(213.99, 'precioav_4')" name="" value="EUR">

								     </div>

								     <div>

								    <span id="precioav_4">213.99 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>Arthur Morgan y la banda de Van der Linde son forajidos buscados por agentes federales y los mejores cazarrecompensas, la banda deberá abrirse camino por el salvaje territorio del corazón de Estados Unidos a base de robos y peleas para sobrevivir.
								</p>
							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Rockstar Games</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>05/12/2019</span>	
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>PEGI 18</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego4_aven')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego4_aven')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>



		<section class="tarjeta-juego" id="juego5_aven">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/Rust.jpeg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>RUST</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

								<input type="button" onclick="CambiaraSoles(69.00,'precioav_5')" name="" value="PEN">
							    <input type="button" onclick="CambiaraDolares(69.00,'precioav_5')" name="" value="USD">
							    <input  type="button" onclick="CambiaraEuros(69.00, 'precioav_5')" name="" value="EUR">

								     </div>

								     <div>

								    <span id="precioav_5">69.00 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>El único objetivo en Rust es sobrevivir. Todo quiere que mueras: la vida silvestre de la isla y otros habitantes, el medio ambiente, otros sobrevivientes. Haz lo que sea necesario para durar otra noche.</p>

							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Estudios Facepunch</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>08/02/2018</span>	
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>PEGI 16</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego5_aven')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego5_aven')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>







		<section class="tarjeta-juego" id="juego6_aven">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/ACO.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>Assassin's Creed Origins</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

								<input type="button" onclick="CambiaraSoles(179.99,'precioav_6')" name="" value="PEN">
							    <input type="button" onclick="CambiaraDolares(179.99,'precioav_6')" name="" value="USD">
							    <input  type="button" onclick="CambiaraEuros(179.99, 'precioav_6')" name="" value="EUR">

								     </div>

								     <div>

								    <span id="precioav_6">179.99 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>El antiguo Egipto, una tierra majestuosa e intrigante, está desapareciendo a raíz de una lucha despiadada por el poder. Revela secretos oscuros y mitos olvidados a medida que vuelves al momento en que empezó todo: Los orígenes de la Hermandad de los Asesinos.</p>

							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Ubisoft Montreal</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>26/10/2017</span>
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>PEGI 18</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego6_aven')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego6_aven')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>




				<section class="tarjeta-juego" id="juego7_aven">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/GOW.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>God of War</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

								<input type="button" onclick="CambiaraSoles(169.00,'precioav_7')" name="" value="PEN">
							    <input type="button" onclick="CambiaraDolares(169.00,'precioav_7')" name="" value="USD">
							    <input  type="button" onclick="CambiaraEuros(169.00, 'precioav_7')" name="" value="EUR">

								     </div>

								     <div>

								    <span id="precioav_7">169.00 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>Habiendo consumado su venganza contra los dioses del Olimpo años atrás, Kratos ahora vive como un hombre en el reino de los dioses y los monstruos nórdicos. En este hostil e inhóspito mundo, debe pelear por sobrevivir... y enseñarle a su hijo a hacer lo mismo.</p>

							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Santa Monica Studio</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>14/01/2022</span>	
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>PEGI 18</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego7_aven')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego7_aven')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>


			<!----------------------------------------------------> 
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
	<script type="text/javascript" src="js/miscript.js"></script>

</body>
</html>