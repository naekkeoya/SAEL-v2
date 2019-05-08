<?php
	$conexion = mysqli_connect('localhost','root','','sael');
	if (!$conexion)
	{

	}
	else
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

			}
			else
			{
				$sesion = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo_usuario = '$correo'");
				$sesion = mysqli_fetch_array($sesion);
				if ($sesion[5] == $correo)
				{

				}
				else
				{
						$query = mysqli_query($conexion, "INSERT INTO usuarios (id_usuario, nombre_usuario, paterno_usuario, materno_usuario, fecha_usuario, correo_usuario, password_usuario, tipo_usuario) VALUES (NULL, '$nombre', '$paterno', '$materno', '$fecha', '$correo', '$pass', '$tipo')");
						if (!$query)
						{

						}
						else
						{
							header("refresh:0;url=register.php"); 
						}
				}
			}
	}
?>
