<?php
    $Placa=$_POST['placa'];
    $Vehi_Tipo=$_POST['vehitipo'];
    $Vehi_Marca=$_POST['vehimarca'];

    include("../../conexion.php");

    $query="INSERT INTO tbl_vehiculos (Placa, Vehi_Tipo, Vehi_Marca)
     VALUES ('$Placa','$Vehi_Tipo','$Vehi_Marca')";


    $cadena=mysqli_query($link,$query) or die ("ERROR EN LA INSERSION DE DATOS");

    echo "<script>

    alert('Los datos se grabaron correctamente');

    location.href='registro_Vehiculo.php';

    </script>";
?>