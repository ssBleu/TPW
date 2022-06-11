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
			<h1 class="categoria" >Deportes</h1>
			<p  class="desc-categoria">En esta parte de la tienda te ofrecemos una lista de los mejores
			juegos de deportes para todo tipo de aficionado.</p>
		</section>

     <br>

	<hr color="#43EE47">

	<br>


		<section class="tarjeta-juego" id="juego1_dep">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/RL.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>Rocket League</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

									<input type="button" onclick="CambiaraSoles(19.00,'preciodep_1')" name="" value="PEN">
								    <input type="button" onclick="CambiaraDolares(19.00,'preciodep_1')" name="" value="USD">
								    <input  type="button" onclick="CambiaraEuros(19.00, 'preciodep_1')" name="" value="EUR">

								     </div>

								     <div>

								    <span id="preciodep_1">19.00 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>El juego combina fútbol estilo arcade con caos vehicular. ¡Personaliza tu coche, salta al campo y compite en uno de los juegos de deportes más aclamados de la historia! ¡Comienza a anotar goles!.
								</p>
							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
								<span>Psyonix LLC</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
								<span>16/03/2022</span>	
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
								<span>ESRB:EVERYONE</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego1_dep')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego1_dep')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>









		<section class="tarjeta-juego" id="juego2_dep">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/FIFA22.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>FIFA 22</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

							<input type="button" onclick="CambiaraSoles(199.00,'preciodep_2')" name="" value="PEN">
						    <input type="button" onclick="CambiaraDolares(199.00,'preciodep_2')" name="" value="USD">
						    <input  type="button" onclick="CambiaraEuros(199.00, 'preciodep_2')" name="" value="EUR">

								     </div>

								     <div>

								    <span id="preciodep_2">199.00 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>El fútbol vuelve con EA SPORTS™ FIFA 22, que incluye más formas de jugar en equipo, tanto en la calle como en el estadio, para que disfrutes de mayores victorias con tus amigos. Acerca aún más el juego a la realidad gracias a mejoras significativas en la jugabilidad.
								</p>
							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
					     	<span>EA Canada & EA Romania</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>30/09/2021</span>	
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>ESRB:+16</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego2_dep')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego2_dep')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>










<section class="tarjeta-juego" id="juego3_dep">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/FH5.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>Forza Horizon 5</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

							<input type="button" onclick="CambiaraSoles(199.00,'preciodep_3')" name="" value="PEN">
						    <input type="button" onclick="CambiaraDolares(199.00,'preciodep_3')" name="" value="USD">
						    <input  type="button" onclick="CambiaraEuros(199.00, 'preciodep_3')" name="" value="EUR">

								     </div>

								     <div>

								    <span id="preciodep_3">199.00 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>¡La aventura Horizon definitiva te espera! Explora los vibrantes 
						   paisajes de mundo abierto en constante evolución situado en México, 
					       y disfruta de una acción de conducción ilimitada y divertida con cientos 
				           de los mejores coches del mundo.
								</p>
							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Playground Games</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>08/11/2021</span>	
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>ESRB:+18</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego3_dep')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego3_dep')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>





<section class="tarjeta-juego" id="juego4_dep">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/BEATSABER.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>Beat Saber</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

							<input type="button" onclick="CambiaraSoles(53.00,'preciodep_4')" name="" value="PEN">
						    <input type="button" onclick="CambiaraDolares(53.00,'preciodep_4')" name="" value="USD">
						    <input  type="button" onclick="CambiaraEuros(53.00, 'preciodep_4')" name="" value="EUR">

								     </div>

								     <div>

								    <span id="preciodep_4">53.00 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>Beat Saber es un juego rítmico de RV donde rebanas los ritmos de la
						 palpitante música mientras vuelan hacia ti, rodeado de un mundo futurista.
								</p>
							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Beat Games</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>21/05/2019</span>		
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>RV:EVERYONE</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego4_dep')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego4_dep')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>





<section class="tarjeta-juego" id="juego5_dep">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/NFE.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>Need for Speed Heat</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

							<input type="button" onclick="CambiaraSoles(239.00,'preciodep_5')" name="" value="PEN">
						    <input type="button" onclick="CambiaraDolares(239.00,'preciodep_5')" name="" value="USD">
						    <input  type="button" onclick="CambiaraEuros(239.00, 'preciodep_5')" name="" value="EUR">

								     </div>

								     <div>

								    <span id="preciodep_5">239.00 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>No pares por el día y arriésgalo todo por la noche en Need for Speed Heat, 
						es un juego de carreras callejeras dinámico donde los límites de la ley se
						desvanecen cuando empieza a anochecer.
								</p>
							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Ghost Games</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>08/11/2019</span>	
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>ESRB:+18</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego5_dep')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego5_dep')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>










<section class="tarjeta-juego" id="juego6_dep">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/WWE.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>WWE 2K22</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

								<input type="button" onclick="CambiaraSoles(239.00,'preciodep_6')" name="" value="PEN">
							    <input type="button" onclick="CambiaraDolares(239.00,'preciodep_6')" name="" value="USD">
							    <input  type="button" onclick="CambiaraEuros(239.00, 'preciodep_6')" name="" value="EUR">

								     </div>

								     <div>

								    <span id="preciodep_6">239.00 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>La WWE 2K22: a realizado una nueva entrega del juego, con mejores graficos,
							movilidad en el ambito de la lucha profesional. Levántate de la grada y 
							toma el control de toda la fuerza del Universo WWE.
						    Pegar con tanta fuerza nunca ha sido tan fácil. WWE 2K22: IT HITS DIFFERENT
								</p>
							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Visual Concepts</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>10/03/2022</span>	
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>ESRB:+18</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego6_dep')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego6_dep')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>

	






	<section class="tarjeta-juego" id="juego7_dep">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/TEKKEN.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>TEKKEN 7</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

								<input type="button" onclick="CambiaraSoles(300.00,'preciodep_7')" name="" value="PEN">
							    <input type="button" onclick="CambiaraDolares(300.00,'preciodep_7')" name="" value="USD">
							    <input  type="button" onclick="CambiaraEuros(300.00, 'preciodep_7')" name="" value="EUR">

								     </div>

								     <div>

								    <span id="preciodep_7">300.00 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>Descubre el épico final de la prolongada contienda entre miembros del clan Mishima. 
						   La legendaria saga de juegos de lucha vuelve a la carga con este título creado con 
					       Unreal Engine 4 que ofrece espectaculares batallas con cinemáticas narrativas e 
					       intensos duelos para disfrutar con amigos y rivales.
								</p>
							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>BANDAI NAMCO Studios Inc.</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>01/06/2017</span>		
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>ESRB:+18</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego7_dep')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego7_dep')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

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