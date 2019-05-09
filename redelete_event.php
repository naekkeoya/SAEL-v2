<?php
	$conexion = mysqli_connect('localhost','root','','sael');
	if (!$conexion)
	{

	}
	else
	{
		$id=$_POST['id'];
		$query = mysqli_query($conexion, "DELETE FROM evento WHERE evento.id_cliente = '$id'");
    if (!$query)
    {

    }
    else
    {
			$query = mysqli_query($conexion, "DELETE FROM cliente WHERE cliente.id_cliente = '$id'");
      if (!$query)
			{

			}
			else
			{
				header("refresh:0;url=search_client.php");
			}
    }
  }
  ?>
