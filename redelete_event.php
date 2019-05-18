<?php
	$conexion = mysqli_connect('localhost','root','','sael');
	if (!mysqli_connect_error())
	{
		$id=$_POST['id'];
		$query = mysqli_query($conexion, "DELETE FROM evento WHERE evento.id_cliente = '$id'");
    if ($query)
    {
			$query = mysqli_query($conexion, "DELETE FROM cliente WHERE cliente.id_cliente = '$id'");
      if ($query)
			{
					header("refresh:0;url=search_event_success_delete.php");
			}
			else
			{
				echo "
				<style>
					.alert {
						padding: 20px;
						background-color: #f44336;
						color: white;
						opacity: 1;
						transition: opacity 0.6s;
						margin-bottom: 15px;
					}

					.alert.success {background-color: #4CAF50;}
					.alert.info {background-color: #2196F3;}
					.alert.warning {background-color: #ff9800;}

					.closebtn {
						margin-left: 15px;
						color: white;
						font-weight: bold;
						float: right;
						font-size: 22px;
						line-height: 20px;
						cursor: pointer;
						transition: 0.3s;
					}

					.closebtn:hover {
						color: black;
					}
				</style>
				<div class='alert'>
				<span class='closebtn'>&times;</span>
				Error al eliminar los datos
				</div>
				<script>
				var close = document.getElementsByClassName('closebtn');
				var i;

				for (i = 0; i < close.length; i++) {
					close[i].onclick = function(){
						var div = this.parentElement;
						div.style.opacity = '0';
						setTimeout(function(){ div.style.display = 'none'; }, 600);
					}
				}
				</script>";
			}
    }
    else
    {
			echo "
			<style>
				.alert {
					padding: 20px;
					background-color: #f44336;
					color: white;
					opacity: 1;
					transition: opacity 0.6s;
					margin-bottom: 15px;
				}

				.alert.success {background-color: #4CAF50;}
				.alert.info {background-color: #2196F3;}
				.alert.warning {background-color: #ff9800;}

				.closebtn {
					margin-left: 15px;
					color: white;
					font-weight: bold;
					float: right;
					font-size: 22px;
					line-height: 20px;
					cursor: pointer;
					transition: 0.3s;
				}

				.closebtn:hover {
					color: black;
				}
			</style>
			<div class='alert'>
			<span class='closebtn'>&times;</span>
			Error al eliminar los datos
			</div>
			<script>
			var close = document.getElementsByClassName('closebtn');
			var i;

			for (i = 0; i < close.length; i++) {
				close[i].onclick = function(){
					var div = this.parentElement;
					div.style.opacity = '0';
					setTimeout(function(){ div.style.display = 'none'; }, 600);
				}
			}
			</script>";
    }
  }
	else
	{
		echo "
		<style>
			.alert {
				padding: 20px;
				background-color: #f44336;
				color: white;
				opacity: 1;
				transition: opacity 0.6s;
				margin-bottom: 15px;
			}

			.alert.success {background-color: #4CAF50;}
			.alert.info {background-color: #2196F3;}
			.alert.warning {background-color: #ff9800;}

			.closebtn {
				margin-left: 15px;
				color: white;
				font-weight: bold;
				float: right;
				font-size: 22px;
				line-height: 20px;
				cursor: pointer;
				transition: 0.3s;
			}

			.closebtn:hover {
				color: black;
			}
		</style>
		<div class='alert'>
		<span class='closebtn'>&times;</span>
		Error al conectar con la base de datos
		</div>
		<script>
		var close = document.getElementsByClassName('closebtn');
		var i;

		for (i = 0; i < close.length; i++) {
			close[i].onclick = function(){
				var div = this.parentElement;
				div.style.opacity = '0';
				setTimeout(function(){ div.style.display = 'none'; }, 600);
			}
		}
		</script>";
	}
  ?>
