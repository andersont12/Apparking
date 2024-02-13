<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

$Resi_NumCed=$_POST['Cedularesi'];
$Resi_Correo=$_POST['Correoresi'];




include("..\conexion.php");

$query = "INSERT INTO tbl_residente (Resi_NumCed, Resi_Correo)
VALUES ('$Resi_NumCed','$Resi_Correo',)";

$cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../index.html';

</script>";

?>

