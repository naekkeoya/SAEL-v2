<?php
	$estado;
	$conexion = mysqli_connect('localhost','root','','sael');
	if (!$conexion)
	{

	}
	else
	{
		$id=$_POST['id'];
    $query = mysqli_query($conexion, "DELETE FROM proveedor WHERE proveedor.id_proveedor = '$id'");
    if (!$query)
    {

    }
    else
    {
      header("refresh:0;url=search_partner.php");
    }
  }
  ?>
