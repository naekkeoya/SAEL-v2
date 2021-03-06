	<?php
		$estado;
		$conexion = mysqli_connect('localhost','root','','sael');
		if (!mysqli_connect_error())
		{
	    $sesion = mysqli_query($conexion, "SELECT *FROM sesion ORDER BY id_sesion DESC LIMIT 1");
	    $sesion = mysqli_fetch_array($sesion);
	    if ($sesion)
			{
				$username = $sesion[1];
				$estado = $sesion[4];
		    echo "<!DOCTYPE html>
		    <html lang='es'> <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/> <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		    <head>
		      <title>Terraza D' León</title>
		      <link rel='shortcut icon' href='images/favicon.ico'>

		        <script>
		            addEventListener('load', function () {
		                setTimeout(hideURLbar, 0);
		            }, false);

		            function hideURLbar() {
		                window.scrollTo(0, 1);
		            }
		        </script>

		    	<!-- css files -->
		        <link href='css/bootstrap.css' rel='stylesheet' type='text/css' /><!-- bootstrap css -->
		        <link href='css/style.css' rel='stylesheet' type='text/css' /><!-- custom css -->
		        <link href='css/font-awesome.min.css' rel='stylesheet'><!-- fontawesome css -->
		    	<!-- //css files -->

		    	<!-- google fonts -->
		    	<link href='//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i' rel='stylesheet'>
		    	<link href='//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i' rel='stylesheet'>
		    	<!-- //google fonts -->

		    </head>
		    <body>

		    <!-- header -->
		    <header>
		    	<div class='container'>
		    		<!-- nav -->
		    		<nav class='py-md-4 py-3 d-lg-flex'>
		    			<div id='logo'>
		    				<h1 class='mt-md-0 mt-2'> <a href='index.php'><img src='images/logo.png'></span> D' León </a></h1>
		    			</div>
		    			<label for='drop' class='toggle'><span class='fa fa-bars'></span></label>
		    			<input type='checkbox' id='drop' />
		    			<ul class='menu ml-auto mt-1'>
		    				<li class=''><a href='index.php'>Inicio</a></li>
		    				<li class='active'><a href='about.php'>Sobre nosotros</a></li>
		    				<li class=''><a href='packages.php'>Paquetes</a></li>
		    				<li class=''><a href='contact.php'>Contactanos</a></li>";
		            if ($estado == 'On')
								{

									echo "<li class=''><a href='menu.php'>$username</a></li>";
					        echo "<li class=''><a href='logout.php'>Cerrar Sesión</a></li>";
								}
								else
								{
									echo "<li class=''><a href='login.php'>Iniciar Sesión</a></li>";
								}
								echo "
		    			</ul>
		    		</nav>
		    		<!-- //nav -->
		    	</div>
		    </header>
		    <!-- //header -->

		    <!-- banner -->
		    <section class='banner_inner' id='home'>
		    	<div class='banner_inner_overlay'>
		    	</div>
		    </section>
		    <!-- //banner -->

		    <!-- about -->
		    <section class='about py-5'>
		    	<div class='container py-lg-5 py-sm-4'>
		    		<div class='row'>
		    			<div class='col-lg-6 about-left'>
		    				<h3 class='mt-lg-3'><strong>Nosotros</strong></h3>
		    				<p class='mt-4'>La terraza <strong>D' León</strong> cuenta con 2,000 metros cuadrados de jardín, estamos bien ubicados para tus invitados,
		                            damos la bienvenida a todo aquel que nos visita, mostrando un estilo tipo campestre mexicano
		                            y contemporáneo.</p>
		    				<p class='mt-3'>Tenemos una gran fuente a la entrada tipo cascada, para el deleite de tus invitados.
		                            Los eventos se realizan en el jardín y también contamos con terraza cerrada, el cual
		                            es enmarcado por su gran diseño arquitectonico, la decoración propicia un ambiente
		                            de armonía y deleite para sus sentidos.</p>
		          <h3 class='mt-lg-3'><strong>Misión</strong></h3>
		          <p class='mt-4'>Satisfacer al anfitrión, y realizar su sueño como lo planeó.</p>
		          <h3 class='mt-lg-3'><strong>Visión</strong></h3>
		          <p class='mt-4'>Ser el lugar ideal para realizar tu evento de una manera profesional, elegante e inolvidable.</p>
		    			</div>
		    			<div class='col-lg-6 about-right text-lg-right mt-lg-0 mt-6'>
		    				<img src='images/about.jpg' alt='' class='img-fluid abt-image' />
		    			</div>
		    		</div>
		    		<div class='row mt-5 text-center'>
		    			<div class='col-lg-3 col-6'>
		    				<div class='counter'>
		    					<span class='fa fa-smile-o'></span>
		    					<div class='timer count-title count-number'><span>Más de </span>1000</div>
		    					<p class='count-text text-uppercase'>Clientes felices</p>
		    				</div>
		    			</div>
		    			<div class='col-lg-3 col-6'>
		    				<div class='counter'>
		    					<span class='fa fa-tree'></span>
		    					<div class='timer count-title count-number'>2000</div>
		    					<p class='count-text text-uppercase'>Metros de jardín</p>
		    				</div>
		    			</div>
		    			<div class='col-lg-3 col-6 mt-lg-0 mt-5'>
		    				<div class='counter'>
		    					<span class='fa fa-users'></span>
		    					<div class='timer count-title count-number'><span>Hasta </span>300</div>
		    					<p class='count-text text-uppercase'>Personas</p>
		    				</div>
		    			</div>
		    			<div class='col-lg-3 col-6 mt-lg-0 mt-5'>
		    				<div class='counter'>
		    					<span class='fa fa-gift'></span>
		    					<div class='timer count-title count-number'><span>Más de </span>20<span> años</span></div>
		    					<p class='count-text text-uppercase'>De experiencia</p>
		    				</div>
		    			</div>
		    		</div>
		    	</div>
		    </section>
		    <!-- //about -->


		    <!-- tabs -->
		    <section class='choose' id='choose'>
		    	<div class='overlay-all py-5'>
		    		<div class='container py-lg-5 py-sm-4'>
		    			<h2 class='heading text-capitalize text-center mb-lg-5 mb-4'>Por qué elegirnos</h2>
		    			<div class='edu-exp-grids'>
		    				<div class='tab-main'>
		    					<input id='tab1' type='radio' name='tabs' class='w3pvt-sm' checked>
		    					<label for='tab1'>Ofrecemos</label>
		    					<input id='tab2' type='radio' class='w3pvt-sm' name='tabs'>
		    					<label for='tab2'>Contamos</label>
		    					<section id='content1'>
		    						<div class='row text-center'>
		    							<div class='col-lg-4 col-md-6 inner-w3pvt-wrap'>
		    								<div class='inner-sec-grid'>
		    									<span class='fa fa-shield'></span>
		    									<h4 class='mt-md-4 mt-2'>Seguridad</h4>
		    									<p class='mt-3'>Disfrute de sus eventos en un ambiente completamente seguro y familiar.</p>
		    								</div>
		    							</div>
		    							<div class='col-lg-4 col-md-6 inner-w3pvt-wrap'>
		    								<div class='inner-sec-grid'>
		    									<span class='fa fa-bed'></span>
		    									<h4 class='mt-md-4 mt-2'>Comodidad</h4>
		    									<p class='mt-3'>En nuestras comodas instalaciones usted podra disfrutar y celebrar como siempre a querido.</p>
		    								</div>
		    							</div>
		    							<div class='col-lg-4 col-md-6 inner-w3pvt-wrap'>
		    								<div class='inner-sec-grid'>
		    									<span class='fa fa-money'></span>
		    									<h4 class='mt-md-4 mt-2'>Precios bajos</h4>
		    									<p class='mt-3'>Contamos con precios accesibles a todos los bolsillos y con facilidades de pago.</p>
		    								</div>
		    							</div>
		    						</div>
		    					</section>
		    					<section id='content2'>
		    						<div class='row text-center'>
		    							<div class='col-lg-4 col-md-6 inner-w3pvt-wrap'>
		    								<div class='inner-sec-grid'>
		    									<span class='fa fa-tree'></span>
		    									<h4 class='mt-md-4 mt-2'>Instalaciones amplias</h4>
		    									<p class='mt-3'>Con nuestras amplias instalaciones de mas de 2000 metros cuadrados usted y sus invitados podran disfrutar sin que el espacio sea un problema.</p>
		    								</div>
		    							</div>
		    							<div class='col-lg-4 col-md-6 inner-w3pvt-wrap'>
		    								<div class='inner-sec-grid'>
		    									<span class='fa fa-calendar'></span>
		    									<h4 class='mt-md-4 mt-2'>Experiencia</h4>
		    									<p class='mt-3'>Con nuestros mas de 20 años de experiencia en el ambito de los eventos podemos garantizar el mejor servicio del mercado con una gran atencion a los detalles.</p>
		    								</div>
		    							</div>
		    							<div class='col-lg-4 inner-w3pvt-wrap'>
		    								<div class='inner-sec-grid'>
		    									<span class='fa fa-users'></span>
		    									<h4 class='mt-md-4 mt-2'>Personal calificado</h4>
		    									<p class='mt-3'>Con nuestro personal altamente calificado usted podra relajarse y disfrutar mientras nosotros nos ponemos a su servicio para asegurar el exito de su evento.</p>
		    								</div>
		    							</div>
		    						</div>
		    					</section>
		    				</div>
		    			</div>
		    		</div>
		    	</div>
		    </section>
		    <!-- tabs -->

		    <!-- testimonials -->
		    <section class='testimonials py-5' id='testi'>
		    	<div class='container py-lg-5 py-md-3'>
		    			<h3 class='heading text-capitalize text-center mb-lg-5 mb-4'>Lo que dicen nuestros clientes</h3>
		    		<div class='row pt-xl-4'>
		    			<div class='col-md-4 test-grid px-lg-4'>
		    				<div class='testi-info text-center'>
		    					<p class='text-li'>'Acabo de tener un evento ahí, este 28 de abril
		                y la verdad todos mis invitados quedaron fascinados con el lugar
		                les gusto mucho. Y que decir del personal,siempre al pendiente de
		                nuestras necesidades la verdad lo super recomiendo.
		                Así que si estas buscando un lugar para tu evento ya lo encontrastes D' León.!.</p>
		    					<div class='test-img text-center mt-4'>
		    						<img src='images/te1.jpg' class='img-fluid' alt='user-image'>
		    					</div>
		    					<h3 class='mt-md-4 mt-3'>Marcela Serrano Mendoza</h3>
		    				</div>
		    			</div>
		    			<div class='col-md-4 test-grid px-lg-4 my-md-0 my-5'>
		    				<div class='testi-info text-center'>
		    					<p class='text-li'>'Es un bonito lugar, muy grande y jardines muy bien cuidados el lugar tiene un toque lindo con las carretas.</p>
		    					<div class='test-img text-center mt-4'>
		    						<img src='images/te2.jpg' class='img-fluid' alt='user-image'>
		    					</div>
		    					<h3 class='mt-md-4 mt-3'>Mirasol Herrera</h3>
		    				</div>
		    			</div>
		    			<div class='col-md-4 test-grid px-lg-4'>
		    				<div class='testi-info text-center'>
		    					<p class='text-li'>'Excelente Servicio y el Lugar es muy agradable losmprecios son módicos y cuando pides el servicio con comida es deliciosa !!!.</p>
		    					<div class='test-img text-center mt-4'>
		    						<img src='images/te3.jpg' class='img-fluid' alt='user-image'>
		    					</div>
		    					<h3 class='mt-md-4 mt-3'>Iván HD</h3>
		    				</div>
		    			</div>
		    		</div>
		    	</div>
		    </section>
		    <!-- //testimonials -->


		    <!--footer -->
		    <footer>
		    <section class='footer footer_w3layouts_section_1its py-5'>
		    	<div class='container py-lg-4 py-3'>
		    		<div class='row footer-top'>
		    			<div class='col-lg-3 col-sm-6 footer-grid_section_1its_w3'>
		    				<div class='footer-title'>
		    					<h3>Dirección</h3>
		    				</div>
		    				<div class='footer-text'>
		    					<p>Dirección: Blvd. Gral. Marcelino García Barragán 1421, Olímpica, 44430 Guadalajara, Jal.</p>
		    					<p>Telefono: 01 33 1378 5900</p>
		    					<p>Correo: <a href='mailto:eventosdleon@gmail.com'>eventosdleon@gmail.com</a></p>
		    				</div>
		    			</div>
		    			<div class='col-lg-3 col-sm-6 footer-grid_section mt-sm-0 mt-4'>
		    				<div class='footer-title'>
		    					<h3>Sobre nosotros</h3>
		    				</div>
		    				<div class='footer-text'>
		    					<p>En la terraza <strong>D' León</strong> Damos la bienvenida a todo aquel que nos visita,
		                mostrando un estilo tipo campestre mexicano y contemporáneo.</p>
		    				</div>
		    				<ul class='social_section_1info'>
		    					<li class='mb-2 facebook'><a href='https://www.facebook.com/udgcucei/'><span class='fa fa-facebook'></span></a></li>
		    					<li class='mb-2 twitter'><a href='https://twitter.com/udgcucei'><span class='fa fa-twitter'></span></a></li>
		    					<li class='google-chrome'><a href='http://www.cucei.udg.mx/'><img src='images/chrome.png'></a></li>
		    					<li class='mapsdirections'><a href='https://goo.gl/maps/FnGeJq2cijwb9G1X8'><img src='images/maps.png'></a></li>
		    				</ul>
		    			</div>
		    			<div class='col-lg-3 col-sm-6 mt-lg-0 mt-4 footer-grid_section_1its_w3'>
		    				<div class='footer-title'>
		    					<h3>Ultimas noticias</h3>
		    				</div>
		    				<div class='footer-text'>
		    					<p>Suscribete con tu correo para hacerte llegar las ultimas noticias y promociones.</p>
		    					<form action='#' method='post'>
		    						<input type='email' name='Email' placeholder='Ingresa tu correo' required=''>
		    						<button class='btn1'><i class='fa fa-paper-plane' aria-hidden='true'></i></button>
		    						<div class='clearfix'> </div>
		    					</form>
		    				</div>
		    			</div>
		    		</div>
		    	</div>
		    </section>
		    </footer>
		    <!-- //footer -->

		    <!-- copyright -->
		    <div class='copyright py-3 text-center'>
		    	<p>© 2019 SAEL. Todos los derechos reservados.
		    </div>
		    <!-- //copyright -->

		    <!-- move top -->
		    <div class='move-top text-right'>
		    	<a href='#home' class='move-top'>
		    		<span class='fa fa-angle-up  mb-3' aria-hidden='true'></span>
		    	</a>
		    </div>
		    <!-- move top -->


		    </body>
		    </html>";
			}
			else
			{
				echo "
				<style>
					.alert {
					  padding: 20px;
					  background-color: #f44336;
					  color: white;
					  opacity: 1;
					  transition: opacity 0.6s;
					  margin-bottom: 15px;
					}

					.alert.success {background-color: #4CAF50;}
					.alert.info {background-color: #2196F3;}
					.alert.warning {background-color: #ff9800;}

					.closebtn {
					  margin-left: 15px;
					  color: white;
					  font-weight: bold;
					  float: right;
					  font-size: 22px;
					  line-height: 20px;
					  cursor: pointer;
					  transition: 0.3s;
					}

					.closebtn:hover {
					  color: black;
					}
				</style>
				<div class='alert'>
				<span class='closebtn'>&times;</span>
				Error al conectar con la base de datos
				</div>
				<script>
				var close = document.getElementsByClassName('closebtn');
				var i;

				for (i = 0; i < close.length; i++) {
					close[i].onclick = function(){
						var div = this.parentElement;
						div.style.opacity = '0';
						setTimeout(function(){ div.style.display = 'none'; }, 600);
					}
				}
				</script>";
			}
		}
		else
		{
			echo "
			<style>
				.alert {
					padding: 20px;
					background-color: #f44336;
					color: white;
					opacity: 1;
					transition: opacity 0.6s;
					margin-bottom: 15px;
				}

				.alert.success {background-color: #4CAF50;}
				.alert.info {background-color: #2196F3;}
				.alert.warning {background-color: #ff9800;}

				.closebtn {
					margin-left: 15px;
					color: white;
					font-weight: bold;
					float: right;
					font-size: 22px;
					line-height: 20px;
					cursor: pointer;
					transition: 0.3s;
				}

				.closebtn:hover {
					color: black;
				}
			</style>
			<div class='alert'>
			<span class='closebtn'>&times;</span>
			Error al conectar con la base de datos
			</div>
			<script>
			var close = document.getElementsByClassName('closebtn');
			var i;

			for (i = 0; i < close.length; i++) {
				close[i].onclick = function(){
					var div = this.parentElement;
					div.style.opacity = '0';
					setTimeout(function(){ div.style.display = 'none'; }, 600);
				}
			}
			</script>";
		}
	?>
