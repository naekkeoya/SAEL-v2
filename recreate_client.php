<?php
	$estado;
	$conexion = mysqli_connect('localhost','root','','sael');
	if (!$conexion)
	{

	}
	else
	{
		$id=$_POST['id'];
    $nombre=$_POST['nombre'];
		$paterno=$_POST['paterno'];
		$materno=$_POST['materno'];
		$correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $query = mysqli_query($conexion, "UPDATE cliente SET nombre_cliente = '$nombre', paterno_cliente = '$paterno', materno_cliente = '$materno', correo_cliente = '$correo', telefono_cliente = '$telefono' WHERE cliente.id_cliente = '$id'");
    if (!$query)
    {

    }
    else
    {
      header("refresh:0;url=search_client.php");
    }
  }
  ?>
