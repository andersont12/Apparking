<?php
include("conexion.php");
	$accion=$_POST["Accion"];

if(isset($accion))
	{
		if($accion=="Update")
		{
			//echo"Enviado desde actualizaci�n";
			$query="UPDATE tbl_visitante
					SET Vis_Correo = '".$_POST['txtcontra']."'
						WHERE tbl_visitante.Vis_Correo = '".$_POST['txtid']."'";
			$result=mysqli_query($link,$query) or die ("Error en la actualizacion de los datos. Error: ".mysqli_error());
			echo "<script>
					alert('Los datos fueron actualizados correctamente');
					location.href='../../login.html';
					</script>";
		}
		else
		{
			
			//echo "El codigo es $Numerop ";
			//echo "El codigo es $Codigop ";
			//echo"Enviado desde eliminacion";
		}
	}
?>