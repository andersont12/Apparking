<?php
// seguridad de inicio sesion
session_start();
error_reporting(0);

if(empty($_SESSION['txtusuario']))
{
    header('location:../../login.html');

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Css/EstilosLogin.css">
    <title>MENU DE VIGILANTES</title>
</head>

<body>
    <div class="encabezado">
        <div>
            <div class="MenDesplegable">
                <a href="#" ><img src="../../Imagenes/menuu.png" height="40" width="40px" alt=""></a>
                <div class="menu">
                    <div class="InfoUsu">

                    </div>
                    <ul>
                        </li>
                        <li><a href="listavigMod.php" style="padding-right: 100px;">Cambiar contraseña </a><img src="../../Imagenes/download 1.png"
                                width="30px" height="30px"></li>
                        <li><a href="#" style="padding-right: 127.5px;">Cambiar correo</a><img src="../../Imagenes/correo (2).png"
                                width="30px" height="30px"></li>
                        <li><a href="#" style="padding-right: 181px;">Alertas</a><img src="../../Imagenes/alertas.png" width="30px"
                                height="30px"></li>
                        <li><a href="#" style="padding-right: 102px;">Cambiar de usuario</a><img src="../../Imagenes/usuario.png"
                                width="30px" height="30px"></li>
                        <li><a href="#" style="padding-right: 118px; margin-bottom: 100px; outline: none; ">Reportar un
                                fallo</a><img src="../../Imagenes/fallo.png" width="30px" height="30px"></li>
                                <br><br>
                                <button> <a href="../../Cerrar sesion.php"> CERRAR SESION</a></button>
                    </ul>
                </div>
            </div>
        </div>

        <div class="MenSeg">
            MENU DE VIGILANTES
        </div>
        <div>
            <a  href="index.html"><img src="../../Imagenes/salir.png" width="40px" height="40px" alt=""> </a>
        </div>
    </div>
    <div>
        <div class="search-container">
            <a href="InicioPP.php"><img src="../../Imagenes/casa.png" width="40px" height="40px" alt=""> </a>
            <form action="index.php" method="POST">
            <input type="text" id="keywords" name="keywords" size="30" maxlength="30" class="search-box">
            <input type="submit" name="search" id="search" value="Buscar" class="search-button">
            </form>

            <?php
            
//Si se ha pulsado el botón de buscar
if (isset($_POST['search'])) {
    //Recogemos las claves enviadas
    $keywords = $_POST['keywords'];

    //Conectamos con la base de datos en la que vamos a buscar
    $conexion = mysql_connect("localhost", "USUARIO", "PASSWORD");
    mysql_select_db("NOMBRE_BASE_DE_DATOS", $conexion);

    $query = "SELECT fecha, titulo, DATE_FORMAT(post_date, '%d-%m-%Y') as fecha
                FROM TABLA
                WHERE status = '1'
                AND (contenido LIKE '%" . $keywords . "%'
                OR titulo LIKE '%" . $keywords . "%')
                ORDER BY fecha desc";

    $query_searched = mysql_query($query, $conexion);

    $count_results = mysql_num_rows($query_searched);

    //Si ha resultados
    if ($count_results > 0) {

        echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

        echo '<ul>';
        while ($row_searched = mysql_fetch_array($query_searched)) {
            //En este caso solo mostramos el titulo y fecha de la entrada
            echo '<li><a href="#">'.$row_searched['titulo'].' ('.$row_searched['fecha'].')</a></li>';
        }
        echo '</ul>';
    }
    else {
        //Si no hay registros encontrados
        echo '<h2>No se encuentran resultados con los criterios de búsqueda.</h2>';
    }
}
?>
        </div>
    </div>
    <div>
        <div>
            <a href="MVigilancia.html">
                <div class="caja1">
                    <div class="BorInter">
                        Registro de Visitantes
                        <img class="ImgMenu" src="../../Imagenes/parqueaderos.png" alt="">
                    </div>
                </div>
            </a>
            <a href="Registro_Vehiculo_Residente.html">
                <div class="caja2">
                    <div class="BorInter">
                        Ingreso Vehiculos Residentes
                        <img class="ImgMenu" src="../../Imagenes/role.png" alt="">
                    </div>
                </div>
            </a>
            <a href="controlr.html">
                <div class="caja3">
                    <div class="BorInter">
                        Observaciones
                        <img class="ImgMenu" src="../../Imagenes/registro.png" alt="">
                    </div>
                </div>
            </a>
        </div>
    </div>
</body>

</html>