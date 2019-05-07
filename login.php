<?php
	$conexion = mysqli_connect('localhost','root','','sael');
	if (!$conexion)
	{

	}
	else
	{
		$user = $_POST['email'];
		$pass= $_POST['password'];
		$sesion = mysqli_query($conexion, "SELECT *FROM usuarios WHERE correo_usuario = '$user' AND password_usuario = '$pass'");
		if (!$sesion)
		{

		}
		else
		{
			$sesion = mysqli_fetch_array($sesion);
			$nombre = $sesion[1];
			$tipo = $sesion[6];
			$sesion = mysqli_query($conexion, "INSERT INTO sesion (id_sesion, nombre_sesion, fecha_sesion, tipo_sesion) VALUES (NULL, '$nombre', CURRENT_TIMESTAMP $sesion[6])");
			header("refresh:0;url=index_users.php");
		}
	}
?>
