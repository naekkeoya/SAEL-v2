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
		$correo=$_POST['correo'];
		$telefono=$_POST['telefono'];
		$fecha=$_POST['fecha'];
		$hora=$_POST['hora'];
		$paquete=$_POST['paquete'];
		$horas_extra=$_POST['horas_extras'];
		$duracion = 5 + $horas_extra;
		$query = mysqli_query($conexion, "INSERT INTO cliente (id_cliente, nombre_cliente, paterno_cliente, materno_cliente, correo_cliente, telefono_cliente) VALUES (NULL, '$nombre', '$paterno', '$materno', '$correo', '$telefono')");
		if (!$query)
		{

		}
		else
		{
			$query = mysqli_query($conexion, "SELECT *FROM cliente ORDER BY id_cliente DESC LIMIT 1");
			$query = mysqli_fetch_array($query);
			$id = $query[0];
			$query = mysqli_query($conexion, "SELECT *FROM sesion ORDER BY id_sesion DESC LIMIT 1");
			$query = mysqli_fetch_array($query);
			$id_agente = $query[1];
			$query = mysqli_query($conexion, "SELECT *FROM usuarios WHERE nombre_usuario = '$id_agente'");
			$query = mysqli_fetch_array($query);
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
			if (!$query)
			{

			}
			else
			{
				header("refresh:0;url=booking.php");
			}
		}
	}
?>
