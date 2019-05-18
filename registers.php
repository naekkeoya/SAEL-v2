<?php
	$conexion = mysqli_connect('localhost','root','','sael');
	if (!mysqli_connect_error())
	{
		$nombre=$_POST['nombre'];
		$paterno=$_POST['paterno'];
		$materno=$_POST['materno'];
		$fecha=$_POST['fecha'];
		$correo=$_POST['correo'];
		$pass=$_POST['password'];
		$repass=$_POST['confirmar'];
		$tipo=$_POST['tipo'];
		if ($pass != $repass)
		{
				header("refresh:0;url=register_fail_pass.php");
		}
		else
		{
			$sesion = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo_usuario = '$correo'");
			$sesion = mysqli_fetch_array($sesion);
			if ($sesion[5] == $correo)
			{
				header("refresh:0;url=register_fail_mail.php");
			}
			else
			{
					$query = mysqli_query($conexion, "INSERT INTO usuarios (id_usuario, nombre_usuario, paterno_usuario, materno_usuario, fecha_usuario, correo_usuario, password_usuario, tipo_usuario) VALUES (NULL, '$nombre', '$paterno', '$materno', '$fecha', '$correo', '$pass', '$tipo')");
					if ($query)
					{
						header("refresh:0;url=register_success.php");
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
						Error al insertar
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
