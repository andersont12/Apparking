<?php
// seguridad de inicio sesion
session_start();
error_reporting(0);

if(empty($_SESSION['txtusuario']))
{
    header('location: login.html');

}

?>



<!DOCTYPE html>
<html lang="es>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Residentes</title>
    <link rel="stylesheet" href="../../Css/Residentes.css">
</head>
<body>
    <center>
        <header id="encabezado">
            <h1>RESIDENTES</h1>
            <img id="Imgtitulo" src="../../Imagenes/propiedades.png">
        </header>

        <div class="VistasResidente">
            <div class="IslasResi">
                <h3>
                    <a href="a1"><img id="iconoUsiario" src="../../Imagenes/imgVivienda.png"><br>
                        <em>ISLAS RESIDENTE</em>
                    </a>
                </h3>
    
            </div>
    
            <div class="IslasResi">
                <h3>
                    <a href="a1"><img id="iconoUsiario" src="../../Imagenes/vigilancia.png"><br><br>
                        <em></em>
                    </a>
                </h3>
    
            </div>

            <div class="IslasResi">
                <h3>
                    <a href="a1"><img id="iconoUsiario" src="../../Imagenes/vehiculoResidente.png"><br><br>
                        <em>VEHICULO RESIDENTE</em>
                    </a>
                </h3>
    
            </div>

            
        </div>
    </center>
    
    <br>
    <br><br><br>

    <div class="menu">
        <div class="h2">
            
            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle" id="menu-label">☰ Menú</label>
          
            <nav id="menu">
                <ul>
                    <li ><a href="#">Inicio</a></li>
                    <br>
                    <li class="listas"><a href="#">InIcio</a>
                        <ul>
                            <li class="listas"><a href="agregarReservas.html">Reservas</a></li>
                            <li class="listas"><a href="#">Islas</a></li>
                            <li class="listas"><a href="#">Vehiculos</a></li>
                            
                        </ul>
                    </li>
                    <li class="listas"><a href="#">??????</a></li>
                    <li class="listas"><a href="#">??????</a></li>
                </ul>
                <br><br><br>
                <div id="icono">
                    <h2>Menu Residente<br></h2>
                    <br>
                    <center><a class="a1" href="#"><img id="iconoUsiario" src="../../Imagenes/usuario.png" alt=""></a></center>
                    <br>
                    <center>
                        <div>
                            <p class="Perfil">
                                <h2>Perfil Residente</h2><br>
                                <br>
                                Nombre: <div> <?php echo $usuario?></div><br><br>
                                Apellido: Romero Cortez<br><br>
                                <a href="#">Email: lokota@gmail.com<br><br></a>
                                Telefono: 3245523985<br><br>
                            </p>

                            <button> <a href="../../Cerrar sesion.php"> CERRAR SESION</a></button>
                                 
                           
                                
                        </div>
                    </center>
    
                </div>  
            </nav>
        </div>
    </div>


    

</body>
</html>