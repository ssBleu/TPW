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
	<!---------------------------> 



	 <!------------------------------>


	<main class="div-main-categorias">

	<section>
		<h1 class="categoria">Plataformas</h1>
		<p  class="desc-categoria">En esta tienda te ofrecemos algunos juegos interesantes de plataformas. Descargalos y comienza a divertirte.</p>
	</section>

	<hr color="#43EE47">



		<section class="tarjeta-juego" id="juego1_plat">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/JumpKing.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>Jump King</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

								<input type="button" onclick="CambiaraSoles(29.95 ,'preciopl_1')" name="" value="PEN">
							    <input type="button" onclick="CambiaraDolares(29.95 ,'preciopl_1')" name="" value="USD">
							    <input  type="button" onclick="CambiaraEuros(29.95 , 'preciopl_1')" name="" value="EUR">

								     </div>

								     <div>

								    <span id="preciopl_1">29.95 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>¡Acepta el desafío y enfréntate a unas plataformas de alto riesgo en Jump King! Lucha durante el ascenso en busca de la legendaria buenorra, pero ten cuidado; errar un salto puede convertirse en una larga caída de vuelta...</p>

							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Nexile</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>03/05/2019</span>	
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>PEGI 7</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego1_plat')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego1_plat')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>













		<section class="tarjeta-juego" id="juego2_plat">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/Cuphead.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>CUPHEAD</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

								<input type="button" onclick="CambiaraSoles(49.95 ,'preciopl_2')" name="" value="PEN">
							    <input type="button" onclick="CambiaraDolares(49.95 ,'preciopl_2')" name="" value="USD">
							    <input  type="button" onclick="CambiaraEuros(49.95 , 'preciopl_2')" name="" value="EUR">

								     </div>

								     <div>

								    <span id="preciopl_2">49.95 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>Cuphead es un juego de acción clásico estilo "dispara y corre" que se centra en combates contra el jefe. Inspirado en los dibujos animados de los años 30, los aspectos visual y sonoro están diseñados con esmero empleando las mismas técnicas de la época, es decir, animación tradicional a mano, fondos de acuarela y grabaciones originales de jazz.</p>

							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Studio MDHR Entertainment Inc.</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>29/09/2017</span>	
						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>PEGI 3</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego2_plat')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego2_plat')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>




		<section class="tarjeta-juego" id="juego3_plat">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/Dungreed.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>Dungreed</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

								<input type="button" onclick="CambiaraSoles(22.00 ,'preciopl_3')" name="" value="PEN">
							    <input type="button" onclick="CambiaraDolares(22.00 ,'preciopl_3')" name="" value="USD">
							    <input  type="button" onclick="CambiaraEuros(22.00 , 'preciopl_3')" name="" value="EUR">

								     </div>

								     <div>

								    <span id="preciopl_3">22.00 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>Una aldea tranquila y pacífica ha sido destruida por una misteriosa mazmorra y todos los aldeanos han quedado atrapados en ella. Debes convertirte en el aventurero enviado por el reino para resolver este desastre. ¡Entra en la mazmorra para enfrentarte a las amenazas sin fin, rescatar a los aldeanos y reconstruir la ciudad!</p>

							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Frogwares</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>14/02/2018</span>	

						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>PEGI 7</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego3_plat')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego3_plat')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>









		<section class="tarjeta-juego" id="juego4_plat">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/GunsGoreCannoli2.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>Guns, Gore and Cannoli 2</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

								<input type="button" onclick="CambiaraSoles(28.00 ,'preciopl_4')" name="" value="PEN">
							    <input type="button" onclick="CambiaraDolares(28.00 ,'preciopl_4')" name="" value="USD">
							    <input  type="button" onclick="CambiaraEuros(28.00 , 'preciopl_4')" name="" value="EUR">

								     </div>

								     <div>

								    <span id="preciopl_4">28.00 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>Bienvenido a los años 40. Europa está siendo devastada por la guerra, los EE UU se preparan para la batalla y la mafia prosigue con sus negocios. Pero esta vez han ido demasiado lejos, incluso para los estándares de Vinnie.Prepárate para ir a la guerra después del chocante descubrimiento sobre lo que de verdad pasó durante la fase final de la masacre de Thugtown de Guns, Gore & Cannoli 1.</p>

							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Rogueside, Claesybrothers </span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>02/03/2018</span>	

						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>PEGI 13</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego4_plat')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego4_plat')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>




		<section class="tarjeta-juego" id="juego5_plat">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/Brawlhalla.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>Brawlhalla</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

								<input type="button" onclick="CambiaraSoles(49.99 ,'preciopl_5')" name="" value="PEN">
							    <input type="button" onclick="CambiaraDolares(49.99 ,'preciopl_5')" name="" value="USD">
							    <input  type="button" onclick="CambiaraEuros(49.99 , 'preciopl_5')" name="" value="EUR">

								     </div>

								     <div>

								    <span id="preciopl_5">49.99 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>¡Brawlhalla es un juego de lucha de plataforma 2D gratuito que admite hasta 8 jugadores locales o en línea con juego cruzado completo para PC, PS5, PS4, Xbox Series X|S, Xbox One, Nintendo Switch, iOS y Android!</p>

							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Blue Mammoth Games</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>17/10/2017</span>	

						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>PEGI 13</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego5_plat')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego5_plat')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>










		<section class="tarjeta-juego" id="juego6_plat">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/CrashBandicoot.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>Crash Bandicoot™ N. Sane Trilogy</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

                                <input type="button" onclick="CambiaraSoles(149.99 ,'preciopl_6')" name="" value="PEN">
							    <input type="button" onclick="CambiaraDolares(149.99 ,'preciopl_6')" name="" value="USD">
							    <input  type="button" onclick="CambiaraEuros(149.99 , 'preciopl_6')" name="" value="EUR">

								     </div>

								     <div>

								    <span id="preciopl_6">149.99 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>¡Vuelve Crash Bandicoot, mejorado, embelesado y listo para bailar con la colección de juegos La trilogía.¡Vuelve a vivir tus momentos favoritos de Crash con gráficos remasterizados y prepárate para disfrutar a tope!</p>

							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Vicarious Visions, Iron Galaxy</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>29/06/2018</span>

						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>PEGI 7</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego6_plat')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego6_plat')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

							    </div>

						    </div>

					</div>

			</div>

	     
		</section>





		<section class="tarjeta-juego" id="juego7_plat">

			<div class="item-tarjeta1">

							<img class="item-juego" src="imagenes/GRIME.jpg">

			</div>


			<div class="item-tarjeta2">

						<div>
							<div class="subitem-titulo">
							<h2>GRIME</h2>
							</div>

							<div class="contenedor-precio-boton">


								<div>


									<div class= sub-cambio-precio>

								<input type="button" onclick="CambiaraSoles(45.00 ,'preciopl_7')" name="" value="PEN">
							    <input type="button" onclick="CambiaraDolares(45.00 ,'preciopl_7')" name="" value="USD">
							    <input  type="button" onclick="CambiaraEuros(45.00 , 'preciopl_7')" name="" value="EUR">


								     </div>

								     <div>

								    <span id="preciopl_7">45.00 S/.</span>
								    </div>
							    
						        </div>

								<div class="boton-tarjeta">
									<button><img src="imagenes/compra3.png" width="65px" height="48px">Añadir al carrito</button>
								</div>
								
							</div>

							<div class="subitem-descripcion">

								<p>¡Vuelve Crash Bandicoot, mejorado, embelesado y listo para bailar con la colección de juegos La trilogía.¡Vuelve a vivir tus momentos favoritos de Crash con gráficos remasterizados y prepárate para disfrutar a tope!</p>

							</div>

						<div class="subitem-info">
								<span class="info">Desarrollador:</span>
						<span>Clover Bite</span>
						</div>

						<div class="subitem-info">
								<span class="info">Fecha de lanzamiento:</span>
						<span>02/07/2021</span>	

						</div>

						<div class="subitem-info">
								<span class="info">Clasificacion:</span>
						<span>PEGI 16</span>
						</div>

						<div class="subitem-like-dislike">

								<div  class="boton-dislike">

									<button id="dislike" onclick="Dislike('juego7_plat')"><img src="imagenes/dislike.png" width="40px" height="40px"> No me gusta</button>
									
								</div>

								<div class="boton-like">

							    <button id="like" onclick="Like('juego7_plat')"><img src="imagenes/like.png" width="40px" height="40px"> Me gusta</button>

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