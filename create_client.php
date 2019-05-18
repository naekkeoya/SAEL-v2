<?php
	$conexion = mysqli_connect('localhost','root','','sael');
	if (!mysqli_connect_error())
	{
		$nombre=$_POST['nombre'];
		$paterno=$_POST['paterno'];
		$materno=$_POST['materno'];
		$correo=$_POST['correo'];
		$telefono=$_POST['telefono'];
		$fecha=$_POST['fecha'];
		$hora=$_POST['hora'];
		$paquete=$_POST['paquete'];
		$horas_extra=$_POST['horas_extras'];
		$duracion = 5 + $horas_extra;
		$query = mysqli_query($conexion, "INSERT INTO cliente (id_cliente, nombre_cliente, paterno_cliente, materno_cliente, correo_cliente, telefono_cliente) VALUES (NULL, '$nombre', '$paterno', '$materno', '$correo', '$telefono')");
		if ($query)
		{
			$query = mysqli_query($conexion, "SELECT *FROM cliente ORDER BY id_cliente DESC LIMIT 1");
			$query = mysqli_fetch_array($query);
			if ($query)
			{
				$id = $query[0];
				$query = mysqli_query($conexion, "SELECT *FROM sesion ORDER BY id_sesion DESC LIMIT 1");
				$query = mysqli_fetch_array($query);
				if ($query)
				{
					$id_agente = $query[1];
					$query = mysqli_query($conexion, "SELECT *FROM usuarios WHERE nombre_usuario = '$id_agente'");
					$query = mysqli_fetch_array($query);
					if ($query)
					{
						$id_agente = $query[0];
						if ($paquete == "Básico")
						{
							$id_paquete = 1;
						}
						if ($paquete == "D' León")
						{
							$id_paquete = 2;
						}
						if ($paquete == "D' León Plus")
						{
							$id_paquete = 3;
						}
						if ($paquete == "D' León Especial")
						{
							$id_paquete = 4;
						}
						$query= mysqli_query($conexion, "INSERT INTO evento (id_evento, id_cliente, id_agente, id_paquete, fecha_evento, hora_evento, duracion_evento) VALUES (NULL, '$id', '$id_agente', '$id_paquete', '$fecha', '$hora', '$duracion')");
						if ($query)
						{
							header("refresh:0;url=booking_success.php");
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
							Error al insertar el evento
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
			Error al insertar el cliente
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
