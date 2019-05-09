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
		$fecha=$_POST['fecha'];
		$correo=$_POST['correo'];
		$pass=$_POST['pass'];
		$tipo=$_POST['tipo'];
    $query = mysqli_query($conexion, "UPDATE usuarios SET nombre_usuario = '$nombre', paterno_usuario = '$paterno', materno_usuario = '$materno', fecha_usuario = '$fecha', correo_usuario = '$correo', password_usuario = '$pass', tipo_usuario = '$tipo' WHERE usuarios.id_usuario = '$id'");
    if (!$query)
    {

    }
    else
    {
      header("refresh:0;url=search_event.php");
    }
  }
  ?>
