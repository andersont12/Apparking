<script>
function validar(formulario)
{

if(formulario.txtcodigo.value=='')
{
alert('Sr Usuario debe ingresar el codigo');
formulario.txtcodigo.focus();
return false;
}
else if (isNaN(formulario.txtcodigo.value))
{
alert("El codigo ingresado no es un n�mero");
formulario.txtcodigo.focus();
return false;
}

if(formulario.txtnombre.value=='')
{
alert('Sr Usuario debe ingresar el(los) nombre(s)');
formulario.txtnombre.focus();
return false;
}

return true;
}
</script>

<?php
	include("conexion.php");

	$Codigop=$_GET['Vis_NumCed'];
		
	
	$query="SELECT * FROM tbl_visitantes WHERE tbl_visitantes.Vis_NumCed =  ' " .$Codigop."  '  " ;
	$result=mysqli_query($link,$query) or die ("Error en la consulta de productos. Error: ".mysqli_error());
	if(mysqli_num_rows($result) > 0)
	{
         $Rs=mysqli_fetch_array($result)
			
					?>
			<center>
			<form method=POST name=frm onsubmit="return validar(this)" action="CambioCorrVig.php">
				
	  <table width="400" border="1">
	    <tr>
      <td width=50%>ID USUARIO</td>
      <td>
        <input name="txtid" type="text" id="txtid" size="5" value= "<?php echo $Rs['Vis_NumCed'];?>"
      </td>
    </tr>
    <tr>
      <td>USUARIO</td>
      <td>
        <input name="txtusuario" type="text" id="txtusuario" size="30" value= "<?php echo $Rs['usuario'];?>"
      </td>
    </tr>
	<tr>
      <td>CONTRASEÑA</td>
      <td>
        <input name="txtcontra" type="text" id="txtcontra" size="5" value= "<?php echo $Rs['contrasena'];?>"
      </td>
    </tr>

 
    <tr>
      <td>
     
	<center>
        <input type="submit" name="Submit" value="Enviar" />
		</center>
      </td>
      <td>
	<center>
        <input type="reset" name="Submit2" value="Restablecer" />
		</center>
      </td>
    </tr>
  </table>

<input type="hidden" name="Accion" value="Update" />
				
			</form>
			</center>
<?php
	
	}
	// mysqli_close();
	mysqli_close($link);
?>