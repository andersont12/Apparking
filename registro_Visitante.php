<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/EstilosMenu.css">
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
      
        <form id="form1" name="form1" method=post onsubmit="return validar(this)" action="registro.php">
          <label for="identificacion">Número de Identificación del Visitante:</label>
      
          <input type="text" id="identificacion" name="identificacion" required="">
      
      
      
          <label for="apartamento">Apartamento a Visitar:</label>
      
          <input type="text" id="apartamento" name="apartamento" required="">
      
      
      
          <label for="torre">Torre a Visitar:</label>
      
          <input type="text" id="torre" name="torre" required="">
      
      
          <label for="hora_reserva">Hora de Ingreso</label>
          <input type="time" id="hora_reserva" name="hora_reserva" required="">

          <label for="hora_reserva">Hora de salida</label>
          <input type="time" id="hora_reserva" name="hora_reserva" required="">


      
          <label for="cedula">Número de Cédula del Responsable:</label>
      
          <input type="text" id="cedula" name="cedula" required="">
      
      
      
          <input type="submit" value="Registrar">
        </form>

</body>
</html>