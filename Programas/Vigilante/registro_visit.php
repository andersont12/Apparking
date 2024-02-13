<?php

    session_start();
    
    $Usser = $_SESSION["txtusuario"];
    

   $Ing_Apto=$_POST['ingapto'];
   $Ing_Torre=$_POST['ingtorre'];
   
   $Vis_NumCed=$_POST['cedvisit'];
	$Vis_Nombre=$_POST['nomvisit'];
	$Vis_Apellido=$_POST['apellvisit'];
	$Vis_Tel=$_POST['telvisit'];
	$Vis_Correo=$_POST['corrvisit'];

    include("../../conexion.php");

/* query para realizar la consulta del numero de cedula del vigilante*/ 

   

    $query = "INSERT INTO tbl_visitante (Vis_NumCed,Vis_Nombre,Vis_Apellido,Vis_Tel,Vis_Correo)
    VALUES ('$Vis_NumCed','$Vis_Nombre','$Vis_Apellido','$Vis_Tel','$Vis_Correo')";

   

    $querya = "INSERT INTO tbl_ingreso (Ing_Apto, Ing_Torre )
    VALUES ('$Ing_Apto','$Ing_Torre')";




$cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

$cadena=mysqli_query($link,$querya) or die ("Error en la insercion de datos");


echo "<script>

alert('Los datos se grabaron correctamente');

location.href='registro_visitante.php';

</script>";

?>

