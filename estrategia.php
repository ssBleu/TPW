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
		<h1 class="categoria">Estrategia</h1>
		<p  class="desc-categoria">En esta categoria se encuentran diversos juegos de coordinación e inteligencia, donde sobresale los batallas en equipo contra otro equipo. Estan los MOBA's, BattleChest y shooters.</p>
	</section>

	<hr color="#43EE47">







		<section class="tarjeta-juego" id="juego1_estra">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/LOL.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>League Of Legends</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>



								     </div>

								     <div>

								    <span id="precioes_1">Gratis</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>League of Legends es un juego de estrategia por equipos en el que dos equipos conformados por cinco poderosos campeones se enfrentan para destruir la base del otro. </p>
							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Riot Games</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>27/10/2009</span>	
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>Teen ESRB</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego1_estra')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego1_estra')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>




		<section class="tarjeta-juego" id="juego2_estra">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/DOTA2.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>Dota 2</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>



								     </div>

								     <div>

								    <span id="precioes_2">Gratis</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>Estrategas de la magia, feroces bestias, astutos pícaros... El conjunto de héroes de Dota 2 es enorme y de una diversidad ilimitada. Lanza increíbles hechizos y devastadoras habilidades definitivas en tu camino hacia la victoria.</p>

							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Valve Corporation</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>09/06/2013</span>	
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>Mature ESRB</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego2_estra')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego2_estra')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>









		<section class="tarjeta-juego" id="juego3_estra">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/VALORANTLOGO.png">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>Valorant</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

								<input type="button" onclick="CambiaraSoles(24.99,'precioes_3')" name="" value="PEN">
							    <input type="button" onclick="CambiaraDolares(24.99,'precioes_3')" name="" value="USD">
							    <input  type="button" onclick="CambiaraEuros(24.99, 'precioes_3')" name="" value="EUR">

								     </div>

								     <div>

								    <span id="precioes_3">24.99 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>Combina tu estilo y experiencia en un escenario global y competitivo. Tienes 13 rondas para atacar y defender tu lado con armas precisas y habilidades tácticas. Además, al contar con una sola vida por ronda, tendrás que pensar más rápido que tu oponente si quieres sobrevivir. </p>

							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Riot Games</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>02/06/2020</span>	
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>Teen ESRB</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego3_estra')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego3_estra')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>





				<section class="tarjeta-juego" id="juego4_estra">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/CS.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>Counter Strike Global Offensive</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>



								     </div>

								     <div>

								    <span id="precioes_4">Gratis</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>Counter-Strike: Global Offensive (CS:GO) amplía el juego de acción por equipos del que fue pionero cuando salió hace más de 20 años. CS:GO incluye nuevos mapas, personajes, armas y modos de juego, y ofrece versiones actualizadas del contenido clásico de Counter-Strike.</p>

							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Valve, Hidden Path Entertainment</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>21/08/2012</span>	
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>Mature ESRB</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego4_estra')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego4_estra')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>











				<section class="tarjeta-juego" id="juego5_estra">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/TFT1.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>Team Fight Tactics</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

								<input type="button" onclick="CambiaraSoles(24.99,'precioes_5')" name="" value="PEN">
							    <input type="button" onclick="CambiaraDolares(24.99,'precioes_5')" name="" value="USD">
							    <input  type="button" onclick="CambiaraEuros(24.99, 'precioes_5')" name="" value="EUR">
								     </div>

								     <div>

								    <span id="precioes_5">24.99 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>Recluta, despliega y domina con una alineación rotativa de campeones de League of Legends en una batalla por rondas donde el objetivo es la supremacía. Supera a tus oponentes y adáptate conforme avanzas. La estrategia depende de ti.</p>

							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Riot Games</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>26/06/2019</span>	
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>Teen ESRB</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego5_estra')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego5_estra')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>







				<section class="tarjeta-juego" id="juego6_estra">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/DST.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>Team Fight Tactics</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

								<input type="button" onclick="CambiaraSoles(31.00,'precioes_6')" name="" value="PEN">
							    <input type="button" onclick="CambiaraDolares(31.00,'precioes_6')" name="" value="USD">
							    <input  type="button" onclick="CambiaraEuros(31.00, 'precioes_6')" name="" value="EUR">
								     </div>

								     <div>

								    <span id="precioes_6">31.00 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>Don't Starve Together es la expansión independiente para jugadores múltiples del juego intransigente de supervivencia en la jungla: Don't Starve. Ingresa a un mundo extraño jamás explorado, lleno de criaturas extrañas, peligros y sorpresas.</p>

							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Klei Entertainment</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>21/04/2016</span>	
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>Teen ESRB</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego6_estra')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego6_estra')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>






				<section class="tarjeta-juego" id="juego7_estra">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/S2.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>StarCraft II</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

								<input type="button" onclick="CambiaraSoles(115.00,'precioes_7')" name="" value="PEN">
							    <input type="button" onclick="CambiaraDolares(115.00,'precioes_7')" name="" value="USD">
							    <input  type="button" onclick="CambiaraEuros(115.00, 'precioes_7')" name="" value="EUR">
								     </div>

								     <div>

								    <span id="precioes_7">115.00 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>Vive el juego que redefinió el género de la estrategia en tiempo real. terran, zerg o protoss: la conquista de la galaxia está a tu alcance. Experimenta la guerra intergaláctica mediante una épica campaña de historia, la mejor competición multijugador de su clase y misiones cooperativas.</p>


							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Blizzard Entertainment</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>27/07/2010</span>	
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>Teen ESRB</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego7_estra')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego7_estra')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

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