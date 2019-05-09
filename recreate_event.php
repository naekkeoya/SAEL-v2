<?php
	$estado;
	$conexion = mysqli_connect('localhost','root','','sael');
	if (!$conexion)
	{

	}
	else
	{
		$id=$_POST['id'];
    $id_cliente=$_POST['id_cliente'];
		$id_agente=$_POST['id_agente'];
		$id_paquete=$_POST['id_paquete'];
		$fecha=$_POST['fecha'];
		$hora=$_POST['hora'];
		$duracion=$_POST['duracion'];
    $query = mysqli_query($conexion, "UPDATE evento SET id_cliente = '$id_cliente', id_agente = '$id_agente', id_paquete = '$id_paquete', fecha_evento = '$fecha', hora_evento = '$hora', duracion_evento = '$duracion' WHERE evento.id_evento = '$id'");
    if (!$query)
    {

    }
    else
    {
      header("refresh:0;url=search_event.php");
    }
  }
  ?>
