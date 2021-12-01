<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function formbuscar() {
            if (!isset($_POST['nombre_del_termino'])) {
                $nombre_del_termino = "";
            } else {
                $nombre_del_termino = $_POST['nombre_del_termino'];
            }
            ?>

            <form method="post" action="buscar.php">
                <table border=1>
                    <tr>
                        <td>
                            Búsqueda de terminos
                        </td>
                        <td>
                            <?php
                            echo ('<input type="text" name="nombre_del_termino" value=' . $nombre_del_termino . '>');
                            ?>

                        </td>
                    </tr>
                </table>
                <input type="submit" name="BUSCAR" value="BUSCAR">
                <input type="submit" name="Volver_al_inicio" value="Volver al inicio">
            </form>
            <?php
        }

        if (!isset($_POST['BUSCAR'])) {
            formbuscar();
        }

        if (isset($_POST['Volver_al_inicio'])) {
            header('location:index.php');
        } 
        if (isset($_POST['BUSCAR'])) {
            $encontrado = FALSE;
            $nombre = $_POST['nombre_del_termino'];
            if (strlen($nombre) >= 3) {
                $contador = 0;
                $con = mysqli_connect("localhost", "root", "", "p2");
                if (!$con) {
                    die('No puedo conectar');
                    mysqli_close($con);
                } else {
                    $sql = "SELECT * FROM terminos WHERE nombreTermino='$nombre'";
                    $result = mysqli_query($con, $sql);
                    if (!empty(mysqli_fetch_array(mysqli_query($con, $sql)))) {
                        echo ( "<table border=1>
                                <tr>
                                    <th>
                                         Términos encontrados
                                    </th>
                                     <th colspan=2 >
                                         Acciones
                                    </th>
                                </tr> ");
                        while ($row = mysqli_fetch_array($result)) {
                            echo ( "<tr>");
                            echo ("<td>");
                            echo ('<a href="visualizarTermino.php?id=' . $row["id"] . '">' . $row['nombreTermino'] . "</a>");
                            echo("</td>");
                            echo ("<td>");
                            echo ('<form method="post" action="modificarTermino.php">');
                            echo('<input type="submit" name="EDITAR" value="EDITAR">');
                            echo('<input type="hidden" name="id" value="' . $row["id"] . '">');
                            echo ('</form>');
                            echo("</td>");
                            echo ("<td>");
                            echo ('<form method="post" action="eliminarTermino.php">');
                            echo('<input type="submit" name="BORRAR" value="BORRAR">');
                            echo('<input type="hidden" name="id" value="' . $row["id"] . '">');
                            echo ('</form>');
                            echo("</td>");
                            echo ( "</tr>");
                        }
                        echo("</table>");
                    } else {
                        echo(' <p style="color:red;"> No se ha encontrado ningún término</p>');
                        formbuscar();
                    }
                }
            }else {
            echo(' <p style="color:red;"> Al menos introduzca 3 caracteres para buscar</p>');
            formbuscar();
        } 
        }
        ?>
    </body>
</html>