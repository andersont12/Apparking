<html>
<center>


<?php
	Include("conexion.php");
	$query="Select *
	        From usuarios
	Order by id";
	$result=mysqli_query($link,$query) or die("Error en la consulta de productos. Error: ".mysql_error());
	if(mysqli_num_rows($result)>0)
	{
		?>
		<table border=1>
			<tbody>
			<tr>
                <td>ID USUARIO</td>
                <td>USUARIO</td>
				<td>CONTRASEÑA</td>
				<td>ACCION A REALIZAR</td>
			</tr>
			<?php	
			while($Rs=mysqli_fetch_array($result))
			{
				echo "<tr>".
                     "<td>".$Rs['id']."</td>".
                     "<td>".$Rs['usuario']."</td>".
					 "<td>".$Rs['contrasena']."</td>".
					 "<td><a href=modifvig.php?id=".$Rs['id'].">Actualizar</a>
					 </td>".
					 "</tr>";
			}
	}
	    else
	    {
	    	echo"No hay productos registrados para listar";
	    }
	    mysqli_close($link);
	    ?>
	</table>
</center>	
</html>