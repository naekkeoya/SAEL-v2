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
	    				<li class=''><a href='about.php'>Sobre nosotros</a></li>
	    				<li class='active'><a href='packages.php'>Paquetes</a></li>
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


	    <!-- tour packages -->
	    <section class='packages pt-5'>
	    	<div class='container py-lg-4 py-sm-3'>
	    		<h2 class='heading text-capitalize text-center'>Descubre nuestros Paquetes</h2>
	    		<p class='text mt-2 mb-5 text-center'>Contamos con un gran numero de Paquetes que se adaptan a todo tipo de necesidades.</p>
	    		<div class='row'>

	    			<div class='col-lg-3 col-sm-6 mb-5'>
	    				<div class='image-tour position-relative'>
	    					<img src='images/p1.jpg' alt='' class='img-fluid' />
	    					<p><span class='fa fa-tags'></span> <span>10000 MXN</span></p>
	    				</div>
	    				<div class='package-info'>
	    					<h6 class='mt-1'><span class='fa fa-gift mr-2'></span><strong>Básico.</strong></h6>
	    					<p>* Instalaciones 'D' León'<br>
	                * Auxiliares en estacionamiento<br>
	                * Personal en puerta<br>
	                * Personal de limpieza en baños e insumos<br>
	                * Personal staff 'D' León'<br>
	                * Organización previa del evento contratado<br>
	                * Estacionamiento propio<br>
	                * Area de cocina equipada<br>
	                * Area de barra equipada<br>
	                * Iluminación en jardines</p>
	    					<ul class='listing mt-3'>
	    					<li><span class='fa fa-clock-o mr-2'></span>Duración: <span>5 horas</span><li>
	    					</ul>
	    				</div>
	    			</div>

	          <div class='col-lg-3 col-sm-6 mb-5'>
	    				<div class='image-tour position-relative'>
	    					<img src='images/p2.jpg' alt='' class='img-fluid' />
	    					<p><span class='fa fa-tags'></span> <span>15000 MXN</span></p>
	    				</div>
	    				<div class='package-info'>
	    					<h6 class='mt-1'><span class='fa fa-gift mr-2'></span><strong>D' León.</strong></h6>
	    					<p>* Incluye el paquete 'Básico'<br>
	                <strong>Montaje</strong><br>
	                * Mesa redonda o cuadrada con mantel básico (color a elección del cliente)<br>
	                * Cubre mantel y servilleta básicos (color a elección del cliente)<br>
	                * Silla Tiffany blanca o chocolate o Avant Garde<br>
	                * Vajilla y plaque para un tiempo<br>
	                * Vasos<br>
	                * Hielera<br>
	                * Ceniceros<br>
	                * Toldo árabe con iluminación interna y bases perimetrales vestidas<br>
	                <strong>Sonido y Pista</strong><br>
	                * Pista de acrílico iluminada<br>
	                * Dj básico (cabina iluminada, dos bocinas concert, dos bajos y servicio por 5 horas)<br>
	                <strong>Banquete</strong><br>
	                * Banquete a 1 tiempo en base a Pollo o Cerdo.<br>
	                * Refresco y hielo durante el evento<br>
	                <strong>Personal de servicio</strong><br>
	                * Capitán de meseros <br>
	                * Barman profesional <br>
	                * Auxiliar de barra <br>
	                * Meseros (1 por cada 2 mesas) <br>
	                * Todos debidamente uniformados <br>
	              </p>
	    					<ul class='listing mt-3'>
	    					<li><span class='fa fa-clock-o mr-2'></span>Duración: <span>5 horas</span><li>
	    					</ul>
	    				</div>
	    			</div>

	          <div class='col-lg-3 col-sm-6 mb-5'>
	    				<div class='image-tour position-relative'>
	    					<img src='images/p3.jpg' alt='' class='img-fluid' />
	    					<p><span class='fa fa-tags'></span> <span>20000 MXN</span></p>
	    				</div>
	    				<div class='package-info'>
	    					<h6 class='mt-1'><span class='fa fa-gift mr-2'></span><strong>D' León plus.</strong></h6>
	    					<p>* Incluye el paquete 'Básico'<br>
	                <strong>Montaje</strong><br>
	                * Mesa cuadrada o redonda<br>
	                * Mantel especial (diseño a elegir)<br>
	                * Servilleta de tela<br>
	                * Silla Tiffany blanca o chocolate o Avant Garde<br>
	                * Plato base (a elección)
	                * Vajilla y plaque para un tiempo<br>
	                * Vaso de cristal<br>
	                * Copa de agua<br>
	                * Hielera<br>
	                * Ceniceros<br>
	                * Centro de mesa con flor natural (diseños a elección)<br>
	                * Toldo árabe con iluminación interna y bases perimetrales vestidas<br>
	                <strong>Sonido y Pista</strong><br>
	                * Pista de acrílico iluminada<br>
	                * Dj completo (cabina iluminada, dos torres, dos pantallas de 40″, cuatro bocinas concert, dos bajos, luces derby, led wash y led par, servicio por 5 horas)<br>
	                <strong>Banquete</strong><br>
	                * Banquete a 1 tiempo en base a Pollo o Cerdo.<br>
	                * Refresco y hielo durante el evento<br>
	                <strong>Personal de servicio</strong><br>
	                * Capitán de meseros <br>
	                * Barman profesional <br>
	                * Auxiliar de barra <br>
	                * Meseros (1 por cada 2 mesas) <br>
	                * Todos debidamente uniformados <br>
	              </p>
	    					<ul class='listing mt-3'>
	    					<li><span class='fa fa-clock-o mr-2'></span>Duración: <span>5 horas</span><li>
	    					</ul>
	    				</div>
	    			</div>

	          <div class='col-lg-3 col-sm-6 mb-5'>
	    				<div class='image-tour position-relative'>
	    					<img src='images/p4.jpg' alt='' class='img-fluid' />
	    					<p><span class='fa fa-tags'></span> <span>25000 MXN</span></p>
	    				</div>
	    				<div class='package-info'>
	    					<h6 class='mt-1'><span class='fa fa-gift mr-2'></span><strong>D' León especial.</strong></h6>
	    					<p>* Incluye el paquete 'Básico'<br>
	                <strong>Montaje</strong><br>
	                * Mesa cuadrada o redonda<br>
	                * Mantel especial (diseño a elegir)<br>
	                * Servilleta de tela<br>
	                * Silla Tiffany blanca o chocolate o Avant Garde<br>
	                * Plato base (a elección)
	                * Vajilla y plaque para un tiempo<br>
	                * Vaso de cristal<br>
	                * Copa de agua<br>
	                * Hielera<br>
	                * Ceniceros<br>
	                * Centro de mesa con flor natural (diseños a elección)<br>
	                * Toldo árabe con iluminación interna y bases perimetrales vestidas<br>
	                <strong>Decoración de ingreso</strong><br>
	                * Montaje de mesa de madera color nogal blanca o chocolate<br>
	                * Mapara con velas<br>
	                * Letras medianas LOVE<br>
	                * entro de mesa de flor natural (diseño a elegir)<br>
	                <strong>Sonido y Pista</strong><br>
	                * Pista de madera y cristal<br>
	                * Dj completo (cabina iluminada, dos torres, dos pantallas de 40″, cuatro bocinas concert, dos bajos, luces derby, led wash y led par, servicio por 5 horas)<br>
	                <strong>Recibimiento de bienvenida</strong><br>
	                * Cerveza de 1/4 y vitroleros de agua fresca<br>
	                <strong>Banquete</strong><br>
	                * Menú a 3 tiempos<br>
	                * Crema o ensalada <br>
	                * Plato fuerte a base de pollo o cerdo <br>
	                * Postre <br>
	                * Refresco y hielo durante el evento<br>
	                <strong>Personal de servicio</strong><br>
	                * Capitán de meseros <br>
	                * Barman profesional <br>
	                * Auxiliar de barra <br>
	                * Meseros (1 por cada 2 mesas) <br>
	                * Todos debidamente uniformados <br>
	              </p>
	    					<ul class='listing mt-3'>
	    					<li><span class='fa fa-clock-o mr-2'></span>Duración: <span>5 horas</span><li>
	    					</ul>
	    				</div>
	    			</div>

	    			<div class='col-lg-3 col-sm-6 mb-5'>
	    				<div class='image-tour position-relative'>
	    					<img src='images/p2.jpg' alt='' class='img-fluid' />
	    					<p><span class='fa fa-tags'></span> <span>1000 MXN</span></p>
	    				</div>
	    				<div class='package-info'>
	    					<h6 class='mt-1'><span class='fa fa-clock-o mr-2'></span><strong>Hora Extra.</strong></h6>
	    					<p>Incluye todo lo contemplado en el paquete contratado por 1 hora mas<br>
	    					<ul class='listing mt-3'>
	    						<li><span class='fa fa-clock-o mr-2'></span>Duración: <span>1 hora</span></li>
	    					</ul>
	    				</div>
	    			</div>
	    </section>
	    <!-- tour packages -->

	    <!-- destinations -->
	    <section class='destinations py-5' id='destinations'>
	    	<div class='container py-xl-5 py-lg-3'>
	    		<h3 class='heading text-capitalize text-center'>Paquetes populares</h3>
	    		<p class='text mt-2 mb-5 text-center'>Estos son nuestros paquetes mas populares.</p>
	    		<div class='row inner-sec-w3layouts-w3pvt-lauinfo'>
	    			<div class='col-md-3 col-sm-6 col-6 destinations-grids text-center'>
	    				<h4 class='destination mb-3'>Básico</h4>
	    				<div class='image-position position-relative'>
	    					<img src='images/p1.jpg' class='img-fluid' alt=''>
	    					<div class='rating'>
	    						<ul>
	    							<li><span class='fa fa-star'></span></li>
	    							<li><span class='fa fa-star'></span></li>
	    							<li><span class='fa fa-star'></span></li>
	    							<li><span class='fa fa-star'></span></li>
	    							<li><span class='fa fa-star'></span></li>
	    						</ul>
	    					</div>
	    				</div>
	    				<div class='destinations-info'>
	    					<div class='caption mb-lg-3'>
	    						<h4>Básico</h4>
	    						<a href='packages.php'>Ver</a>
	    					</div>
	    				</div>
	    			</div>
	    			<div class='col-md-3 col-sm-6 col-6 destinations-grids text-center'>
	    				<h4 class='destination mb-3'>D' León</h4>
	    				<div class='image-position position-relative'>
	    					<img src='images/p2.jpg' class='img-fluid' alt=''>
	    					<div class='rating'>
	    						<ul>
	    							<li><span class='fa fa-star'></span></li>
	    							<li><span class='fa fa-star'></span></li>
	    							<li><span class='fa fa-star'></span></li>
	    							<li><span class='fa fa-star'></span></li>
	    							<li><span class='fa fa-star'></span></li>
	    						</ul>
	    					</div>
	    				</div>
	    				<div class='destinations-info'>
	    					<div class='caption mb-lg-3'>
	    						<h4>D' León</h4>
	    						<a href='packages.php'>Ver</a>
	    					</div>
	    				</div>
	    			</div>
	          <div class='col-md-3 col-sm-6 col-6 destinations-grids text-center mt-md-0 mt-4'>
	    				<h4 class='destination mb-3'>D' León Plus</h4>
	    				<div class='image-position position-relative'>
	    					<img src='images/p3.jpg' class='img-fluid' alt=''>
	    					<div class='rating'>
	    						<ul>
	    							<li><span class='fa fa-star'></span></li>
	    							<li><span class='fa fa-star'></span></li>
	    							<li><span class='fa fa-star'></span></li>
	    							<li><span class='fa fa-star'></span></li>
	    							<li><span class='fa fa-star'></span></li>
	    						</ul>
	    					</div>
	    				</div>
	    				<div class='destinations-info'>
	    					<div class='caption mb-lg-3'>
	    						<h4>D' León Plus</h4>
	    						<a href='packages.php'>Ver</a>
	    					</div>
	    				</div>
	    			</div>
	    			<div class='col-md-3 col-sm-6 col-6 destinations-grids text-center mt-md-0 mt-4'>
	    				<h4 class='destination mb-3'>Hora Extra</h4>
	    				<div class='image-position position-relative'>
	    					<img src='images/p1.jpg' class='img-fluid' alt=''>
	    					<div class='rating'>
	    						<ul>
	    							<li><span class='fa fa-star'></span></li>
	    							<li><span class='fa fa-star'></span></li>
	    							<li><span class='fa fa-star'></span></li>
	    							<li><span class='fa fa-star'></span></li>
	    							<li><span class='fa fa-star'></span></li>
	    						</ul>
	    					</div>
	    				</div>
	    				<div class='destinations-info'>
	    					<div class='caption mb-lg-3'>
	    						<h4>Hora Extra</h4>
	    						<a href='packages.php'>Ver</a>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    </section>
	    <!-- destinations -->

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
