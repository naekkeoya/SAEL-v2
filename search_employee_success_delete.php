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
	    $tipo = $sesion[3];
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

	    				<li class=''><a href='packages.php'>Paquetes</a></li>
	    				<li class=''><a href='contact.php'>Contactanos</a></li>";
							if ($estado == 'On')
							{

								echo "<li class='active'><a href='menu.php'>$username</a></li>";
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
	      		<h2 class='heading text-capitalize text-center'>Buscar Empleado</h2>
	    	<div class='container py-lg-4 py-sm-3 col-sm-6 d-flex flex-row '>

	        <fieldset class='fieldset2 container align-items-center'>
					<form action='delete_employee.php' method='POST' class='contact'>
					<div class='form-group'>
						<input type='text' class='form-control' id='busqueda' name='busqueda' placeholder='Nombre del Cliente' required='' aria-describedby='Nombre'>
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
						Empleado eliminado
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
						<button type='submit' id='searchPartner' class='btn btn-primary btn-lg'> Buscar</button><br>
					</div>
					</form>
	        </fieldset>
	      </div>
	    </section>
	    <!-- tour packages -->

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
