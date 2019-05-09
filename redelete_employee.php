<?php
	$conexion = mysqli_connect('localhost','root','','sael');
	if (!$conexion)
	{

	}
	else
	{
		$id=$_POST['id'];
		$query = mysqli_query($conexion, "DELETE FROM usuarios WHERE usuarios.id_usuario = '$id'");
    if (!$query)
    {

    }
    else
    {
      header("refresh:0;url=search_employee.php");
    }
  }
  ?>
