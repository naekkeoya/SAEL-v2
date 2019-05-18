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
	    $direcion = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.3077828948462!2d-103.32714258507363!3d20.65705358620089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b23a9bbba80d%3A0xdacdb7fd592feb90!2sCentro+Universitario+de+Ciencias+Exactas+e+Ingenier%C3%ADas!5e0!3m2!1ses!2smx!4v1557288006141!5m2!1ses!2smx' width='600' height='450' frameborder='0' style='border:0'";
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
	    				<li class=''><a href='packages.php'>Paquetes</a></li>
	    				<li class='active'><a href='contact.php'>Contactanos</a></li>";
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


	    <!-- Contact -->
	    <section class='contact py-5'>
	    	<div class='container py-lg-5 py-sm-3'>
	    			<h2 class='heading text-capitalize text-center mb-sm-5 mb-4'>Ponte en contacto con nosotros</h2>
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
						<div class='alert success'>
						<span class='closebtn'>&times;</span>
						Mensaje enviado
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
						</script>
	    			<ul class='list-unstyled row text-center mt-lg-5 mt-4 px-lg-5'>
	                    <li class='col-md-4 col-sm-6 adress-w3pvt-info'>
	                        <div class=' adress-icon'>
	                            <span class='fa fa-map-marker'></span>
	                        </div>

	                        <h6>Ubicación</h6>
	                        <p>D' León
	                            <br>Blvd. Gral. Marcelino García Barragán 1421, Olímpica, 44430 Guadalajara, Jal. </p>
	                    </li>

	                    <li class='col-md-4 col-sm-6 adress-w3pvt-info mt-sm-0 mt-4'>
	                        <div class='adress-icon'>
	                            <span class='fa fa-envelope-open-o'></span>
	                        </div>
	                        <h6>Telefono y Correo</h6>
	                        <p>01 33 1378 5900</p>
	                        <a href='mailto:eventosdleon@example.com' class='mail'>eventosdleon@gmail.com</a>
	                    </li>
	                    <li class='col-md-4 col-sm-6 adress-w3pvt-info mt-md-0 mt-4'>

	                        <div class='adress-icon'>
	                            <span class='fa fa-comments-o'></span>
	                        </div>

	                        <h6>Mantente en contacto</h6>
	    					<ul class='social_section_1info mt-2'>
	    						<li class='mb-2 facebook'><a href='https://www.facebook.com/udgcucei/'><span class='fa fa-facebook'></span></a></li>
	    						<li class='mb-2 twitter'><a href='https://twitter.com/udgcucei'><span class='fa fa-twitter'></span></a></li>
	    						<li class='google-chrome'><a href='http://www.cucei.udg.mx/'><img src='images/chrome.png'></a></li>
	    						<li class='mapsdirections'><a href='https://goo.gl/maps/FnGeJq2cijwb9G1X8'><img src='images/maps.png'></a></li>
	    					</ul>
	                    </li>
	                </ul>

	    			<div class='contact-grids mt-5'>
	    				<div class='row'>
	    					<div class='col-lg-6 col-md-6 contact-left-form'>
	    						<form action='create_message.php' method='post'>
	    							<div class=' form-group contact-forms'>
	    							  <input type='text' class='form-control' name='nombre' placeholder='Nombre' required=''>
	    							</div>
	    							<div class='form-group contact-forms'>
	    							  <input type='email' class='form-control' name='correo' placeholder='Correo' required=''>
	    							</div>
	    							<div class='form-group contact-forms'>
	    							  <input type='text' class='form-control' name='telefono' placeholder='Telefono' required=''>
	    							</div>
	    							<div class='form-group contact-forms'>
	    							  <textarea class='form-control' name='mensaje' placeholder='Mensaje' rows='3' required=''></textarea>
	    							</div>
	    							<button class='btn btn-block sent-butnn'>Enviar</button>
	    						</form>
	    					</div>
	    					<div class='col-lg-6 col-md-6 contact-right pl-lg-5'>
	    						<h4>¿Tiene alguna pregunta sobre nosotros? Escríbenos.</h4>
	    						<p class='mt-md-4 mt-2'>En D' León nos gusta Satisfacer a nuestros
	                   clientes es por eso que nos ponemos a su servicio para resolver
	                   sus dudas o escuchar sus quejas, reclamos y sugerencias, con
	                   el proposito de ofrecer un mejor servicio.</p>
	    						<h5 class='mt-lg-5 mt-3'>Horario</h5>
	    						<p class='mt-3'>Lunes a Viernes: 09:00 a.m. to 06:00 p.m.</p>
	    						<p>Sabados y Domingos: 10:00 a.m. a 04:00 p.m.</p>
	    					</div>
	    				</div>
	    			</div>
	    	</div>
	    </section>
	    <!-- //Contact -->

	    <!-- map -->
	    <div class='map p-2'>
	    	<iframe src='$direcion' allowfullscreen>Dirección</iframe>
	    </div>
	    <!-- //map -->

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
