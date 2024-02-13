<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Vehículo</title>
</head>
<body>
  
    <title>Registro de Vehículo Residentes</title>


    <h1>Registro de Vehículo</h1>
  
    <form id="form1" name="form1" method=post onsubmit="return validar(this)" action="registro_visit.php">

      <label for="cedula">Número de Cédula del Propietario:</label>
      <input type="text" id="cedula" name="cedula" required="">
  
  
      <br><br>
  
      <label for="nombre">Nombre del Propietario:</label>
      <input type="text" id="nombre" name="nombre" required="">
  
      <br><br>
  
  
      <label for="apellido">Apellido del Propietario:</label>
      <input type="text" id="apellido" name="apellido" required="">
  
      <br><br>
  
  
      <label for="telefono">Teléfono del Propietario:</label>
      <input type="tel" id="telefono" name="telefono" required="">
  
  
      <br><br>
  
      <label for="correo">Correo del Propietario:</label>
      <input type="email" id="correo" name="correo" required="">
  
  
      <br><br>
  
      <label for="placa">Placa del Vehículo:</label>
      <input type="text" id="placa" name="placa" required="">
  
  
      <br><br>
  
      <label for="marca">Marca del Vehículo:</label>
      <input type="text" id="marca" name="marca" required="">
  
      <br><br>
  
  
      <label for="tipo">Tipo de Vehículo:</label>

      <br><br>

      <input type="radio" id="carro" name="tipo" value="carro" checked="">
      <label for="carro"><img src="../../Imagenes/ruta_a_imagen_carro.png" alt="Carro"></label>

      <br><br>

      <input type="radio" id="moto" name="tipo" value="moto">
      <label for="moto"><img src="../../Imagenes/ruta_a_imagen_moto.png" alt="Moto"></label>
  
      <br><br>
  
  
      <input type="submit" value="Registrar">
    </form>
</body>
</html>