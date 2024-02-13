<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Css/EstilosMenu.css">
    <title>registro</title>
</head>
<body>
  <script>

    function validar(formulario)
  {

    if(formulario.txtcodigo.value=='')
  {
    alert('Sr Usuario debe ingresar el codigo');
    formulario.txtcodigo.focus();
    return false;
  }

    if (isNaN(formulario.txtcodigo.value))
  {
    alert("El codigo ingresado no es un n�mero");
    formulario.txtcodigo.focus();
    formulario.txtcodigo.value='';
    return false;
  }

    if(formulario.txtnombre.value=='')
  {
    alert('Sr Usuario debe ingresar la descripcion');
    formulario.txtnombre.focus();
    return false;
  }

    if(formulario.txtcantidad.value=='')
  {
    alert('Sr Usuario debe ingresar la cantidad');
    formulario.txtcantidad.focus();
    formulario.txtcantidad.value='';
    return false;
  }

    if(formulario.txtvalor.value=='')
  {
    alert('Sr Usuario debe ingresar un valor');
    formulario.txtvalor.focus();
    formulario.txtvalor.value='';
    return false;
  }



    if(formulario.cmbundmedida.value==0)
  {
    alert('Sr Usuario debe seleccionar una unidad de medida');
    formulario.cmbundmedida.focus();
    return false;
  }

    return true;
  }

  </script>
        <title>Registro de Visitantes</title>


          <h1>Registro de Visitantes</h1>
            
            <form id="form2" name="form2" method=post onsubmit="return validar(this)" action="registro_visit.php">

              <label for="apartamento"> Numero de apartamento </label>

                <input type="text" id="ingapto" name="ingapto" require="">

              <br>

              <label for="torre"> Numero de Torre </label>

                <input type="text" id="ingtorre" name="ingtorre" require="">

                <br>  

              <label for="identificacion">Número de Identificación del Visitante:</label>
      
                <input type="text" id="identificacion" name="cedvisit" required="">
      
              <br>

              <label for="nombrevis">Nombre del Visitante:</label>
      
                <input type="text" id="nombrevis" name="nomvisit" required="">
      
              <br>

              <label for="apellidovis">apellido del Visitante:</label>
      
                <input type="text" id="apellidovis" name="apellvisit" required="">
      
              <br>

              <label for="telvis">telefono del Visitante:</label>
      
                <input type="text" id="telvis" name="telvisit" required="">
      
              <br>

              <label for="correovis">correo del Visitante:</label>
      
                <input type="text" id="correovis" name="corrvisit" required="">
      
              <br>
      
              <label for="cedula">Número de Cédula del Responsable:</label>
      
                <input type="text" id="cedula" name="cedula" required="">
      
              <br>
      
              <input type="submit" name="submit" value="Registrar">
            </form>

</body>
</html>