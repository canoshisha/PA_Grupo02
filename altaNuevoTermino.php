<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function form1() {
            ?>
            <form method="post" action="altaNuevoTermino.php">
                <table border=1>
                    <tr>
                        <td>
                            Nombre del término
                        </td>
                        <td>
                            <input type="text" name="nombre_del_termino">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Número de secciones
                        </td>
                        <td>
                            <select name="numero_secciones" >
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <input type="submit" value="SIGUIENTE" name="SIGUIENTE"> 
            </form>


            <?php
        }

        function form2($nombre, $numero) {

            echo('<b style="text-align: center">Término :' . $nombre . '</b>');

            echo ('<form method="post" >');
            echo ("<table border=1>");
            $i = 1;
            while ($i <= $numero) {
                echo("<tr>");
                echo ("<td>");
                echo ("Nombre de la sección " . $i);
                echo ( "</td>");
                echo ("<td>");
                echo ('<input type="text" name="Nombre_de_la_seccion' . $i . '">');
                echo("</td>");
                echo ( "</tr>");
                echo ( "<tr>");
                echo ("<td>");
                echo ( "Conternido de la sección " . $i);
                echo("</td>");
                echo ("<td>");
                echo('<textarea name="contenido' . $i . '" ></textarea>');
                echo("</td>");
                $i++;
            }
            echo ( "</tr>");
            echo( "</table>");
            echo('<input name="numero" type="hidden" value=' . $numero . '>');
            echo('<input name="nombre" type="hidden" value=' . $nombre . '>');
            echo('<input type="submit" value="GUARDAR" name="GUARDAR">' );
            echo("</form>");
        }

        if (!isset($_POST['SIGUIENTE']) && !isset($_POST['GUARDAR'])) {
            form1();
        }

        if (isset($_POST['SIGUIENTE']) && !isset($_POST['GUARDAR'])) {
            if (!isset($_POST['nombre_del_termino']) || $_POST['nombre_del_termino'] == "")
                $errores[] = 'Indique el nombre del término correctamente';
            else {
                $nombre = filter_input(INPUT_POST, "nombre_del_termino", FILTER_SANITIZE_STRING);
            }
            if (!isset($_POST['numero_secciones']) > 5 || $_POST['numero_secciones'] < 0)
                $errores[] = 'Indique el número de secciones';
            else {
                $numero = filter_input(INPUT_POST, "numero_secciones", FILTER_SANITIZE_NUMBER_INT);
            }
            if (!isset($errores)) {

                form2($nombre, $numero);
            } else {
                foreach ($errores as $value) {
                    echo(' <p style="color:red;">' . $value . '</p>');
                }
                form1();
            }
        }

        if (isset($_POST['GUARDAR'])) {
            $i = 1;
            $error = FALSE;

            $nombre = filter_input(INPUT_POST, "nombre", FILTER_SANITIZE_STRING);

            $numero = filter_input(INPUT_POST, "numero", FILTER_SANITIZE_NUMBER_INT);

            while ($i <= $numero) {
                if (!filter_input(INPUT_POST, 'Nombre_de_la_seccion' . $i, FILTER_SANITIZE_STRING)) {
                    echo(' <p style="color:red;"> Nombre_de_la_seccion' . $i . ' sin rellenar</p>');
                    $error = TRUE;
                }
                if (!filter_input(INPUT_POST, 'contenido' . $i, FILTER_SANITIZE_STRING)) {
                    echo(' <p style="color:red;"> contenido' . $i . ' sin rellenar</p>');
                    $error = TRUE;
                }
                $i++;
            }

            if ($error) {
                form2($nombre, $numero);
            } else {
                switch ($numero) {
                    case 1:
                        $nombreseccion1 = $_POST['Nombre_de_la_seccion1'];
                        $contenido1 = $_POST['contenido1'];
                        break;

                    case 2:
                        $nombreseccion1 = $_POST['Nombre_de_la_seccion1'];
                        $contenido1 = $_POST['contenido1'];
                        $nombreseccion2 = $_POST['Nombre_de_la_seccion2'];
                        $contenido2 = $_POST['contenido2'];
                        break;
                    case 3:
                        $nombreseccion1 = $_POST['Nombre_de_la_seccion1'];
                        $contenido1 = $_POST['contenido1'];
                        $nombreseccion2 = $_POST['Nombre_de_la_seccion2'];
                        $contenido2 = $_POST['contenido2'];
                        $nombreseccion3 = $_POST['Nombre_de_la_seccion3'];
                        $contenido3 = $_POST['contenido3'];
                        break;
                    case 4:
                        $nombreseccion1 = $_POST['Nombre_de_la_seccion1'];
                        $contenido1 = $_POST['contenido1'];
                        $nombreseccion2 = $_POST['Nombre_de_la_seccion2'];
                        $contenido2 = $_POST['contenido2'];
                        $nombreseccion3 = $_POST['Nombre_de_la_seccion3'];
                        $contenido3 = $_POST['contenido3'];
                        $nombreseccion4 = $_POST['Nombre_de_la_seccion4'];
                        $contenido4 = $_POST['contenido4'];
                        break;
                    case 5:
                        $nombreseccion1 = $_POST['Nombre_de_la_seccion1'];
                        $contenido1 = $_POST['contenido1'];
                        $nombreseccion2 = $_POST['Nombre_de_la_seccion2'];
                        $contenido2 = $_POST['contenido2'];
                        $nombreseccion3 = $_POST['Nombre_de_la_seccion3'];
                        $contenido3 = $_POST['contenido3'];
                        $nombreseccion4 = $_POST['Nombre_de_la_seccion4'];
                        $contenido4 = $_POST['contenido4'];
                        $nombreseccion5 = $_POST['Nombre_de_la_seccion5'];
                        $contenido5 = $_POST['contenido5'];
                        break;
                }
                $con = mysqli_connect("localhost", "root", "","p2");
                if (!$con) {
                    die('No puedo conectar');
                    mysqli_close($con);
                } else {
                    $fecha=date("Y-m-d H:i:s");
                    if ($numero == 1) {
                        
                        $sql = "INSERT INTO terminos(nombreTermino,fecha,numero_secciones,nombreSeccion1,contenido1)
                       VALUES
                       ('$nombre','$fecha','$numero','$nombreseccion1','$contenido1')
                       ";
                    } elseif ($numero == 2) {
                        
                        $sql = "INSERT INTO terminos(id,nombreTermino,fecha,numero_secciones,nombreSeccion1,contenido1,nombreSeccion2,contenido2)
                       VALUES
                       ('$id','$nombre','$fecha','$numero','$nombreseccion1','$contenido1','$nombreseccion2','$contenido2')
                       ";
                    } elseif ($numero == 3) {
                        
                        $sql = "INSERT INTO terminos(id,nombreTermino,fecha,numero_secciones,nombreSeccion1,contenido1,nombreSeccion2,contenido2,nombreSeccion3,contenido3)
                       VALUES
                       ('$id','$nombre','$fecha','$numero','$nombreseccion1','$contenido1','$nombreseccion2','$contenido2','$nombreseccion3','$contenido3')
                       ";
                    } elseif ($numero == 4) {
                       
                        $sql = "INSERT INTO terminos(id,nombreTermino,fecha,numero_secciones,nombreSeccion1,contenido1,nombreSeccion2,contenido2,nombreSeccion3,contenido3,nombreSeccion4,contenido4)
                       VALUES
                       ('$id','$nombre','$fecha','$numero','$nombreseccion1','$contenido1','$nombreseccion2','$contenido2','$nombreseccion3','$contenido3','$nombreseccion4','$contenido4')
                       ";
                    } elseif ($numero == 5) {
                       
                        $sql = "INSERT INTO terminos(nombreTermino,fecha,numero_secciones,nombreSeccion1,contenido1,nombreSeccion2,contenido2,nombreSeccion3,contenido3,nombreSeccion4,contenido4,nombreSeccion5,contenido5)
                       VALUES
                       ('$nombre','$fecha','$numero','$nombreseccion1','$contenido1','$nombreseccion2','$contenido2','$nombreseccion3','$contenido3','$nombreseccion4','$contenido4','$nombreseccion5','$contenido5')
                       ";
                    }
                    if (!mysqli_query($con,$sql)) {
                        echo("error");
                        mysqli_close($con);
                    } else {
                        mysqli_close($con);
                        header('location:index.php');
                    }
                }
            }
        }
        ?>
    </body>
</html>
