<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Css/EstilosMenu.css">
    <link rel="stylesheet" href="../../Css/EstilosLogin.css">
    <title>GestionP</title>
</head>

<body>
    <div class="encabezado">
        <div>
            <div class="MenDesplegable">
                <a href="#"><img src="../../Imagenes/menuu.png" height="40" width="40px" alt=""></a>
                <div class="menu">
                    <div class="InfoUsu">

                    </div>
                    <ul>
                        <li><a href="Programas/Vigilante/listavigMod.php" style="padding-right: 100px;">Cambiar contraseña</a><img src="../../Imagenes/autorizar.png"
                                width="30px" height="30px"> </li>
                        <li><a href="#" style="padding-right: 127.5px;">Cambiar correo</a><img src="../../Imagenes/correo (2).png"
                                width="30px" height="30px"></li>
                        <li><a href="#" style="padding-right: 181px;">Alertas</a><img src="../../Imagenes/alertas.png" width="30px"
                                height="30px"></li>
                        <li><a href="#" style="padding-right: 102px;">Cambiar de usuario</a><img src="../../Imagenes/usuario.png"
                                width="30px" height="30px"></li>
                        <li><a href="#" style="padding-right: 118px; margin-bottom: 100px; outline: none; ">Reportar un
                                fallo</a><img src="../../Imagenes/fallo.png" width="30px" height="30px"></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="MenSeg">
       REGISTRAR
        </div>
       
        <div class="bolusuario">
            <a href="Login.html"><img src="../../Imagenes/salir.png" width="40px" height="40px" alt=""> </a>
        </div>
    </div>
    <div>
        <div class="search-container">
            <a href="InicioPP.php"><img src="../../Imagenes/casa.png" width="40px" height="40px" alt=""> </a>
            <input type="text" class="search-box" placeholder="">
            <button class="search-button">Buscar</button>
        </div>
    </div>
    <div class="sidebar">
        <ul>
            <li>
                <a target="registros" href="registro_Visitante.php"><img src="../../Imagenes/download 1.png" width="30px"
                        height="30px">Registrar visitante <img src="../../Imagenes/flecha.png" height="20" width="20px" alt=""></a>
            </li>
            <li><a target="registros" href="Registro_Vehiculo.php"><img src="../../Imagenes/correo (2).png" width="30px"
                        height="30px">Registrar vehiculo
                    <img src="../../Imagenes/flecha.png" height="20" width="20px" alt=""></a></li>


    </div>
    <iframe name="registros" class="iframe" src="" frameborder="0"></iframe>

    <?php
    session_start();
    echo $Usser = $_SESSION["txtusuario"];
    
    ?>
</body>

</html>