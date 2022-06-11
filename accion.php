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
			<h1 class="categoria">Acción</h1>
			<p  class="desc-categoria">En esta parte de la tienda te ofrecemos una lista de los mejores
			juegos de acción, desenfreno y destresa que puedes obtener y disfrutarlos</p>
		</section>

		<hr color="#43EE47">



		<section class="tarjeta-juego" id="juego1_accion">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/imagen5.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>TITANFALL 2</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

								<input type="button" onclick="CambiaraSoles(75.50,'precioac_1')" name="" value="PEN">
							    <input type="button" onclick="CambiaraDolares(75.50,'precioac_1')" name="" value="USD">
							    <input  type="button" onclick="CambiaraEuros(75.50, 'precioac_1')" name="" value="EUR">

								     </div>

								     <div>

								    <span id="precioac_1">75.50 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>La mejor forma de empezar en uno de los shooters mas sorprendentes del 
					2016 es con Titanfall 2 Ultimate Edition. No solo tendrás acceso a todos los con
					contenidos de la edición Digital Deluxe, sino que esta colección también incluye
					un pack Arranque.
								</p>
							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Respawn Entertainment</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>28/10/2016</span>	
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>PEGI 16</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego1_accion')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego1_accion')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>





		<section class="tarjeta-juego" id="juego2_accion">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/imagen1.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>Dying Light Golden Edition</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

								<input type="button" onclick="CambiaraSoles(195.52,'precioac_2')" name="" value="PEN">
							    <input type="button" onclick="CambiaraDolares(195.52,'precioac_2')" name="" value="USD">
							    <input  type="button" onclick="CambiaraEuros(195.52, 'precioac_2')" name="" value="EUR">

								     </div>

								     <div>

								    <span id="precioac_2">195.52 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>El virus ha ganado y la civilización ha vuelto a la Edad Oscura. 
					La Ciudad, uno de los últimos asentamientos de la humanidad, está al borde del abismo.
					Con tu agilidad y tu maestría del combate, deberás sobrevivir y dar forma al mundo. 
					Tus decisiones importan.
								</p>
							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Techland</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>03/02/2022</span>	
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>PEGI 18</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego2_accion')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego2_accion')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>









		<section class="tarjeta-juego" id="juego3_accion">

			<div class="item-tarjeta1" >

							<img class="item-juego" src="imagenes/imagen2.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>Call of Duty Black OPS</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

								<input type="button" onclick="CambiaraSoles(259.90 ,'precioac_3')" name="" value="PEN">
							    <input type="button" onclick="CambiaraDolares(259.90 ,'precioac_3')" name="" value="USD">
							    <input  type="button" onclick="CambiaraEuros(259.90 , 'precioac_3')" name="" value="EUR">

								     </div>

								     <div>

								    <span id="precioac_3">259.90 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>Call of Duty® Black Ops III: Zombies Chronicles Edition incluye el juego original 
					completo y la expansión de contenido Zombies Chronicles.
					Call of Duty: Black Ops III combina tres modos de juego únicos: 
					campaña, multijugador y Zombis para proporcionar a los fans la experiencia Call of Duty más 
					profunda y ambiciosa hasta la fecha.
								</p>
							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Treyarch, Aspyr (Mac)</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>05/11/2015</span>	
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>PEGI 18</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego3_accion')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego3_accion')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>



				<section class="tarjeta-juego" id="juego4_accion">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/imagen4.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>Dead Island</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

								<input type="button" onclick="CambiaraSoles(94.85 ,'precioac_4')" name="" value="PEN">
							    <input type="button" onclick="CambiaraDolares(94.85 ,'precioac_4')" name="" value="USD">
							    <input  type="button" onclick="CambiaraEuros(94.85 , 'precioac_4')" name="" value="EUR">

								     </div>

								     <div>

								    <span id="precioac_4">94.85 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>Te damos la bienvenida al apocalipsis zombi que cambiará tu vida, ahora más bonito que nunca. Sin escapatoria en medio de un brote zombi sin parangón en la isla tropical de Banoi, combate cuerpo a cuerpo y una historia increíble a partir de un modo cooperativo de 4 jugadores en un mundo abierto 
					que no para de crecer a la espera de que lo explores.
								</p>
							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Techland</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>31/05/2016</span>	
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>PEGI 18</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego4_accion')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego4_accion')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>






				<section class="tarjeta-juego" id="juego5_accion">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/imagen3.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>Dead Island</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

								<input type="button" onclick="CambiaraSoles(15.00 ,'precioac_5')" name="" value="PEN">
							    <input type="button" onclick="CambiaraDolares(15.00 ,'precioac_5')" name="" value="USD">
							    <input  type="button" onclick="CambiaraEuros(15.00 , 'precioac_5')" name="" value="EUR">

								     </div>

								     <div>

								    <span id="precioac_5">15.00 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>Domina con estilo en Apex Legends™, un juego de acción en primera persona, 
					donde personajes legendarios con poderosas habilidades forman equipos para 
					luchar y lograr fortuna y gloria en los confines de la Frontera.
								</p>
							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Respawn Entertainment</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>04/02/2019</span>	
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>PEGI 16</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego5_accion')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego5_accion')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>











				<section class="tarjeta-juego" id="juego6_accion">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/imagen7.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>DEATH STRANDING DIRECTOR'S CUT</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

								<input type="button" onclick="CambiaraSoles(135.00 ,'precioac_7')" name="" value="PEN">
							    <input type="button" onclick="CambiaraDolares(135.00 ,'precioac_7')" name="" value="USD">
							    <input  type="button" onclick="CambiaraEuros(135.00 , 'precioac_7')" name="" value="EUR">

								     </div>

								     <div>

								    <span id="precioac_7">135.00 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>En el futuro, un suceso misterioso conocido como Death Stranding abre una 
					puerta entre vivos y muertos que provoca que monstruosas criaturas del más 
					allá deambulen por un mundo arruinado por una sociedad desamparada.
					¿Podrás volver a unir el fragmentado mundo?
								</p>
							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>KOJIMA PRODUCTIONS</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>30/03/2022</span>	
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>PEGI 18</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego6_accion')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego6_accion')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>


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