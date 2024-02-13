<?php
   	$usuario=$_POST["txtusuario"];
	$password=$_POST["txtcontra"];
 	session_start();
	 error_reporting(0);
	$_SESSION["txtusuario"]=$usuario;
	// include("conexion.php");
	$conexion= mysqli_connect("localhost","root","","db_parqueadero");
	$consulta = "SELECT*FROM usuarios where  usuario = '$usuario' and contrasena = '$password'";
	//$result=mysqli_query($link,$query) ;
	 $resultado=mysqli_query($conexion,$consulta);
	 $filas=mysqli_fetch_array($resultado);
		
	if($filas["id_cargo"]==1){ // supervisor
		$_SESSION["txtusuario"]=$usuario;
		header("location:Programas/Vigilante/InicioPP.php");

	} 
	elseif ($filas["id_cargo"]==2){ //residente
			
			header("location:Programas/Residente/Residente.php");
		}
		elseif ($filas["id_cargo"]==3){ //vigilante
			
			header("location:Programas/Vigilante/InicioPP.php");
		}
	 else {
		echo "el usuario o contraseña son incorrectos, intente de nuevo.";
		}	

	
			mysqli_free_result($resultado);
			mysqli_close($conexion); 