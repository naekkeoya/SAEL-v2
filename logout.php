<?php
	$conexion = mysqli_connect('localhost','root','','sael');
	if (!$conexion)
	{

	}
	else
	{
			$sesion = mysqli_query($conexion, "SELECT *FROM sesion ORDER BY id_sesion DESC LIMIT 1");
			$sesion = mysqli_fetch_array($sesion);
			$id = $sesion[0];
			$query = mysqli_query($conexion, "UPDATE sesion SET estado_sesion = 'Off' WHERE sesion.id_sesion = '$id'");
			if (!$query)
			{

			}
			else
			{
				header("refresh:0;url=index.php");
			}
	}
?>
