<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <form method="POST" action="altaNuevoTermino.php">
                        <input type="submit" name="Alta nuevo término" value="Alta nuevo término">
                    </form>
                </td>
                <td>
                    <form method="POST" action="buscar.php">
                        <input type="submit" name="modificarTermino" value="Modificar Termino">
                    </form>
                </td>
                <td>
                    <form method="POST" action="buscar.php">
                        <input type="submit" name="Eliminar termino" value="Eliminar termino">
                    </form>
                </td>
                <td>
                    <form method="POST" action="buscar.php">
                        <input type="submit" name="Buscar término" value="Buscar término">
                    </form>
                </td>
            </tr>
        </table>
        <?php
        $con = mysqli_connect("localhost", "root", "");
        if (!$con) {
            die('No puedo conectar');
            mysqli_close($con);
        } else {
            if (!(mysqli_select_db($con, "p2"))) {
                $sql = 'CREATE DATABASE p2';
                mysqli_select_db($con, "p2");
                if (mysqli_query($con, $sql)) {
                    mysqli_select_db($con, "p2");
                    $sql = "CREATE TABLE terminos(
                            id int(11) AUTO_INCREMENT,
                            nombreTermino VARCHAR(50) NOT NULL,
                            fecha DATETIME,
                            numero_secciones int(1) NOT NULL,
                            nombreSeccion1 VARCHAR(50) NOT NULL,
                            Contenido1 VARCHAR(300) NOT NULL,
                            nombreSeccion2 VARCHAR(50) NOT NULL,
                            Contenido2 VARCHAR(300) NOT NULL,
                            nombreSeccion3 VARCHAR(50) NOT NULL,
                            Contenido3 VARCHAR(300) NOT NULL,
                            nombreSeccion4 VARCHAR(50) NOT NULL,
                            Contenido4 VARCHAR(300) NOT NULL,
                            nombreSeccion5 VARCHAR(50) NOT NULL,
                            Contenido5 VARCHAR(300) NOT NULL,
                            PRIMARY KEY(id)
                            )";

                    mysqli_query($con, $sql);
                } else {
                    echo ( "error al crear");
                }
            } else {
                $sql="SELECT * FROM terminos ORDER BY fecha DESC LIMIT 5";
                $result1 = mysqli_query($con,$sql);
               if (!empty(mysqli_fetch_array(mysqli_query($con, $sql)))) {
                
                
                    echo ( "<table border=1>
                                <tr>
                                    <th>
                                         Últimos términos guardados
                                    </th>
                                     <th>
                                         Fecha de creación
                                    </th>
                                </tr> ");
                    while ($row1 = mysqli_fetch_array($result1)) {
                        echo("<tr>");
                        echo("<td>");
                        echo ('<a href="visualizarTermino.php?id=' . $row1["id"] . '">' . $row1['nombreTermino'] . "</a>");
                        echo("</td>");
                        echo("<td>");
                        $solofecha=explode(' ',$row1['fecha'] );
                        $fecha= explode('-',$solofecha[0]);                  
                        echo($fecha[2]."/".$fecha[1]."/".$fecha[0]);
                        echo("</td>");
                        echo("</tr>");
                        
                    }
                    echo("</table>");
                }
            }
            mysqli_close($con);
        }
        ?>

    </body>
</html>
