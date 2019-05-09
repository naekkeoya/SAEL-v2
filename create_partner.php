<?php
	$estado;
	$conexion = mysqli_connect('localhost','root','','sael');
	if (!$conexion)
	{

	}
	else
	{
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $giro=$_POST['giro'];
    $correo=$_POST['correo'];
    $estado=$_POST['estado'];
    $ciudad=$_POST['ciudad'];
    $colonia=$_POST['colonia'];
    $calle=$_POST['calle'];
    $numero=$_POST['numero'];
    $query=mysqli_query($conexion, "INSERT INTO proveedor (id_proveedor, nombre_proveedor, telefono_proveedor, giro_proveedor, correo_proveedor, estado_proveedor, ciudad_proveedor, colonia_proveedor, calle_proveedor, numero_proveedor) VALUES (NULL, '$nombre', '$telefono', '$giro', '$correo', '$estado', '$ciudad', '$colonia', '$calle', '$numero')");
    if (!$query)
    {

    }
    else
    {
      header("refresh:0;url=add_partner.php");
    }
  }
  ?>
