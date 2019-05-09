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
    $telefono=$_POST['telefono'];
    $giro=$_POST['giro'];
    $correo=$_POST['correo'];
    $estado=$_POST['estado'];
    $ciudad=$_POST['ciudad'];
    $colonia=$_POST['colonia'];
    $calle=$_POST['calle'];
    $numero=$_POST['numero'];
    $query = mysqli_query($conexion, "UPDATE proveedor SET nombre_proveedor = '$nombre', telefono_proveedor = '$telefono', giro_proveedor = '$giro', correo_proveedor = '$correo', estado_proveedor = '$estado', ciudad_proveedor = '$ciudad', colonia_proveedor = '$colonia', calle_proveedor = '$calle', numero_proveedor = '$numero' WHERE proveedor.id_proveedor = '$id'");
    if (!$query)
    {

    }
    else
    {
      header("refresh:0;url=search_partner.php");
    }
  }
  ?>
