<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Vehículo</title>
</head>
<body>
  
    <title>Registro de Vehículo</title>


    <h1>Registro de Vehículo</h1>
  
    <form id="form1" name="form1" method=post onsubmit="return validar(this)" action="registro_Vehi.php">

      <label for="placa">Placa del Vehículo:</label>
      <input type="text" id="placa" name="placa" required="">
  
  
      <br><br>
  
      <label for="marca">Marca del Vehículo:</label>
      <input type="text" id="vehimarca" name="vehimarca" required="">
  
      <br><br>
  
  
      <label for="tipo">Tipo de Vehículo:</label>

      <br><br>

      <input type="radio" id="vehitipo" name="vehitipo" value="carro" checked="">
      <label for="carro"><img src="../../Imagenes/ruta_a_imagen_carro.png" alt="Carro"></label>

      <br><br>

      <input type="radio" id="vehitipo" name="vehitipo" value="moto">
      <label for="moto"><img src="../../Imagenes/ruta_a_imagen_moto.png" alt="Moto"></label>
  
      <br><br>
  
  
      <input type="submit" value="Registrar">
    </form>
</body>
</html>