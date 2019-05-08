<?php
	$estado;
	$conexion = mysqli_connect('localhost','root','','sael');
	if (!$conexion)
	{

	}
	else
	{
    $sesion = mysqli_query($conexion, "SELECT *FROM sesion ORDER BY id_sesion DESC LIMIT 1");
    $sesion = mysqli_fetch_array($sesion);
    $username = $sesion[1];
		$estado = $sesion[4];
		echo "<!DOCTYPE html>
		<html lang='es'>
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

			<!-- css file -->
		    <link href='css/bootstrap.css' rel='stylesheet' type='text/css' /><!-- bootstrap css -->
		    <link href='css/style.css' rel='stylesheet' type='text/css' /><!-- custom css -->
		    <link href='css/font-awesome.min.css' rel='stylesheet'><!-- fontawesome css -->
			<!-- //css files -->

			<link href='css/css_slider.css' type='text/css' rel='stylesheet' media='all'>

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
						<li class='active'><a href='index.php'>Inicio</a></li>
						<li class=''><a href='about.php'>Sobre nosotros</a></li>
						<li class=''><a href='packages.php'>Paquetes</a></li>
						<li class=''><a href='contact.php'>Contactanos</a></li>";
						if ($estado == 'On')
						{
							echo "<li class=''><a href='booking.php'>Reserva ahora</a></li>";
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
		<section class='banner_w3lspvt' id='home'>
			<div class='csslider infinity' id='slider1'>
				<input type='radio' name='slides' checked='checked' id='slides_1' />
				<input type='radio' name='slides' id='slides_2' />
				<input type='radio' name='slides' id='slides_3' />
				<input type='radio' name='slides' id='slides_4' />
				<ul>
					<li>
						<div class='banner-top'>
							<div class='overlay'>
								<div class='container'>
									<div class='w3layouts-banner-info'>
										<h3 class='text-wh'>Espacio creado para ofrecer comodidad y frescura.</h3>
										<div class='buttons mt-4'>
											<a href='about.php' class='btn mr-2'>Sobre nosotros</a>
											<a href='booking.php' class='btn'>Reservar</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class='banner-top1'>
							<div class='overlay'>
								<div class='container'>
									<div class='w3layouts-banner-info'>
										<h3 class='text-wh'>En sus modernas instalaciones, en un ambiente relajado y original.</h3>
										<div class='buttons mt-4'>
											<a href='about.php' class='btn mr-2'>Sobre nosotros</a>
											<a href='booking.php' class='btn'>Reservar</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class='banner-top2'>
							<div class='overlay'>
								<div class='container'>
									<div class='w3layouts-banner-info'>
										<h3 class='text-wh'>Te ofrecemos un trato cordial y personalizado.</h3>
										<div class='buttons mt-4'>
											<a href='about.php' class='btn mr-2'>Sobre nosotros</a>
											<a href='booking.php' class='btn'>Reservar</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class='banner-top3'>
							<div class='overlay1'>
								<div class='container'>
									<div class='w3layouts-banner-info'>
										<h3 class='text-wh'>Te invitamos a conocernos.</h3>
										<div class='buttons mt-4'>
											<a href='about.php' class='btn mr-2'>Sobre nosotros</a>
											<a href='booking.php' class='btn'>Reservar</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
				<div class='arrows'>
					<label for='slides_1'></label>
					<label for='slides_2'></label>
					<label for='slides_3'></label>
					<label for='slides_4'></label>
				</div>
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
					</div>
					<div class='col-lg-6 about-right text-lg-right mt-lg-0 mt-5'>
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

		<!-- how to book -->
		<section class='book py-5'>
			<div class='container py-lg-5 py-sm-3'>
				<h2 class='heading text-capitalize text-center'>Como hacer tu reservación</h2>
				<div class='row mt-5 text-center'>
					<div class='col-lg-4 col-sm-6'>
						<div class='grid-info'>
							<div class='icon'>
								<span class='fa fa-gift'></span>
							</div>
							<h4>Selecciona tu paquete</h4>
							<p class='mt-3'>Escoge el paquete que mas se adapte a tus necesidades
		                          o a tu bolsillo.</p>
						</div>
					</div>
					<div class='col-lg-4 col-sm-6 mt-sm-0 mt-5'>
						<div class='grid-info'>
							<div class='icon'>
								<span class='fa fa-calendar'></span>
							</div>
							<h4>Selecciona la fecha</h4>
							<p class='mt-3'>Escoge la fecha que mas te guste para un evento perfecto.</p>
						</div>
					</div>
					<div class='col-lg-4 col-sm-6 mt-lg-0 mt-5'>
						<div class='grid-info'>
							<div class='icon'>
								<span class='fa fa-gift'></span>
							</div>
							<h4>Reserva</h4>
							<p class='mt-3'>Todo listo para llevar acabo ese evento que tanto deseas.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- //how to book -->

		<!-- tour packages -->
		<section class='packages py-5'>
			<div class='container py-lg-4 py-sm-3'>
				<h3 class='heading text-capitalize text-center'>Descubre nuestros paquetes</h3>
				<p class='text mt-2 mb-5 text-center'>Contamos con un gran numero de Paquetes
		    que se adaptan a todo tipo de necesidades.</p>
				<div class='row'>
					<div class='col-lg-3 col-sm-6'>
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
		          </p>
							<ul class='listing mt-3'>
								<li><span class='fa fa-clock-o mr-2'></span>Duración: <span>5 horas</span></li>
							</ul>
						</div>
					</div>
					<div class='col-lg-3 col-sm-6'>
						<div class='image-tour position-relative'>
							<img src='images/p2.jpg' alt='' class='img-fluid' />
		          <p><span class='fa fa-tags'></span> <span>15000 MXN</span></p>
						</div>
						<div class='package-info'>
							<h6 class='mt-1'><span class='fa fa-gift mr-2'></span><strong>D' León.</strong></h6>
							<p>* Incluye el paquete 'Básico'<br>
		            <strong>Montaje</strong><br>
		            * Mesa redonda o cuadrada con mantel básico (color a elección del cliente)<br>
		            * Cubre mantel y servilleta<br>
		          </p>
							<ul class='listing mt-3'>
								<li><span class='fa fa-clock-o mr-2'></span>Duración: <span>5 horas</span></li>
							</ul>
						</div>
					</div>
					<div class='col-lg-3 col-sm-6 mt-lg-0 mt-5'>
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
		          </p>
							<ul class='listing mt-3'>
								<li><span class='fa fa-clock-o mr-2'></span>Duración: <span>5 horas</span></li>
							</ul>
						</div>
					</div>
					<div class='col-lg-3 col-sm-6 mt-lg-0 mt-5'>
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
		            * Plato base (a elección)
		          </p>
							<ul class='listing mt-3'>
								<li><span class='fa fa-clock-o mr-2'></span>Duración: <span>5 hora</span></li>
							</ul>
						</div>
					</div>
				</div>
				<div class='view-package text-center mt-4'>
					<a href='packages.php'>Ver todos los paquetes</a>
				</div>
			</div>
		</section>
		<!-- tour packages -->

		<!-- text -->
		<section class='text-content'>
			<div class='overlay-inner py-5'>
				<div class='container py-md-3'>
					<div class='test-info'>
						<h4 class='tittle'>Disfruta tu evento</h4>
						<p class='mt-3'>El equipo de <strong>D' León</strong> esperamos que tengas ese evento especial
		        que tanto esperas y agradecemos tu preferencia y esperamos verte de nuevo con nosotros.</p>
						<div class='text-left mt-4'>
								<a href='booking.php'>Reservar ahora</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- //text -->

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
								<a href='booking.php'>Reservar</a>
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
								<a href='booking.php'>Reservar</a>
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
								<a href='booking.php'>Reservar</a>
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
								<a href='booking.php'>Reservar</a>
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
?>
