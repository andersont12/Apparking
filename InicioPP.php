<?php
// seguridad de inicio sesion
session_start();
$usuar = $_SESSION["txtusuario"];
error_reporting(0);

if(!isset($_SESSION["id_cargo"]))
{
    header('location: login.html');

}else{
    if($_SESSION["id_cargo"] !=1){
    header('location: login.html');}
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/EstilosLogin.css">
    <title>Inicio</title>
</head>

<body>
    <div class="encabezado">
        <div>
            <div class="MenDesplegable">
                <a href="#" ><img src="Imagenes/menuu.png" height="40" width="40px" alt=""></a>
                <div class="menu">
                    <div class="InfoUsu">

                    </div>
                    <ul>
                        </li>
                        <li><a href="Programas/Vigilante/listavigMod.php" style="padding-right: 100px;">Cambiar contraseña </a><img src="Imagenes/download 1.png"
                                width="30px" height="30px"></li>
                        <li><a href="#" style="padding-right: 127.5px;">Cambiar correo</a><img src="Imagenes/correo (2).png"
                                width="30px" height="30px"></li>
                        <li><a href="#" style="padding-right: 181px;">Alertas</a><img src="Imagenes/alertas.png" width="30px"
                                height="30px"></li>
                        <li><a href="#" style="padding-right: 102px;">Cambiar de usuario</a><img src="Imagenes/usuario.png"
                                width="30px" height="30px"></li>
                        <li><a href="#" style="padding-right: 118px; margin-bottom: 100px; outline: none; ">Reportar un
                                fallo</a><img src="Imagenes/fallo.png" width="30px" height="30px"></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="MenSeg">
            MENU SEGURIDAD
        </div>
        <div>
            <a  href="index.html"><img src="Imagenes/salir.png" width="40px" height="40px" alt=""> </a>
        </div>
    </div>
    <div>
        <div class="search-container">
            <a href="InicioPP.php"><img src="Imagenes/casa.png" width="40px" height="40px" alt=""> </a>
            <input type="text" class="search-box" placeholder="">
            <button class="search-button">Buscar</button>
        </div>
    </div>
    <div>
        <div>
            <a href="MVigilancia.html">
                <div class="caja1">
                    <div class="BorInter">
                        Registros
                        <img class="ImgMenu" src="Imagenes/parqueaderos.png" alt="">
                    </div>
                </div>
            </a>
            <a href="IslasReservas.php">
                <div class="caja2">
                    <div class="BorInter">
                        Islas y Reservas
                        <img class="ImgMenu" src="Imagenes/role.png" alt="">
                    </div>
                </div>
            </a>
            <a href="controlr.html">
                <div class="caja3">
                    <div class="BorInter">
                        Observaciones
                        <img class="ImgMenu" src="Imagenes/registro.png" alt="">
                    </div>
                </div>
            </a>
        </div>
    </div>
</body>

</html>