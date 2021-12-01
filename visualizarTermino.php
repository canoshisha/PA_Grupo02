<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (isset($_GET['id'])) {
            $id=$_GET['id'];
            $con = mysqli_connect("localhost", "root", "", "p2");
                if (!$con) {
                    die('No puedo conectar');
                    mysqli_close($con);
                } else {
                    $sql = "SELECT * FROM terminos WHERE id='$id'";
                    $result = mysqli_query($con, $sql);
                        
                        while ($row = mysqli_fetch_array($result)) {
                            echo ( '<table border=1>
                                <tr>
                                     <th colspan=2 >
                                         '.$row["nombreTermino"].'
                                    </th>
                                </tr> ');
                            echo ( "<tr>");
                            echo ("<td>");
                                echo ('Fecha de creación');
                            echo("</td>");
                            echo ("<td>");
                            $solofecha=explode(' ',$row['fecha'] );
                            $fecha= explode('-',$solofecha[0]);                  
                                echo($fecha[2]."/".$fecha[1]."/".$fecha[0]);
                            echo("</td>");
                            echo("</tr>");
                            
                            if($row['numero_secciones']==1){
                                 
                            echo ( "<tr>");
                            echo ("<td>");
                                echo ($row["nombreSeccion1"]);
                            echo ("</td>");
                            echo("<td>");
                            echo("</td>");
                            echo ("</tr>");
                            
                            echo ( "<tr>");
                            echo ("<td>");
                            echo ("</td>");
                            echo("<td>");
                                echo ($row["Contenido1"]);
                            echo("</td>");
                            echo ("</tr>");
                            
                                
                            }elseif($row['numero_secciones']==2){
                                echo ( "<tr>");
                            echo ("<td>");
                                echo ($row["nombreSeccion1"]);
                            echo ("</td>");
                            echo("<td>");
                            echo("</td>");
                            echo ("</tr>");
                            
                            echo ( "<tr>");
                            echo ("<td>");
                            echo ("</td>");
                            echo("<td>");
                                echo ($row["Contenido1"]);
                            echo("</td>");
                            echo ("</tr>");
                            
                            echo ( "<tr>");
                            echo ("<td>");
                                echo ($row["nombreSeccion2"]);
                            echo ("</td>");
                            echo("<td>");
                            echo("</td>");
                            echo ("</tr>");
                            
                            echo ( "<tr>");
                            echo ("<td>");
                            echo ("</td>");
                            echo("<td>");
                                echo ($row["Contenido2"]);
                            echo("</td>");
                            echo ("</tr>");
                                
                            }elseif($row['numero_secciones']==3){
                                
                                echo ( "<tr>");
                            echo ("<td>");
                                echo ($row["nombreSeccion1"]);
                            echo ("</td>");
                            echo("<td>");
                            echo("</td>");
                            echo ("</tr>");
                            
                            echo ( "<tr>");
                            echo ("<td>");
                            echo ("</td>");
                            echo("<td>");
                                echo ($row["Contenido1"]);
                            echo("</td>");
                            echo ("</tr>");
                            
                            echo ( "<tr>");
                            echo ("<td>");
                                echo ($row["nombreSeccion2"]);
                            echo ("</td>");
                            echo("<td>");
                            echo("</td>");
                            echo ("</tr>");
                            
                            echo ( "<tr>");
                            echo ("<td>");
                            echo ("</td>");
                            echo("<td>");
                                echo ($row["Contenido2"]);
                            echo("</td>");
                            echo ("</tr>");
                            
                            
                            
                            echo ( "<tr>");
                            echo ("<td>");
                                echo ($row["nombreSeccion3"]);
                            echo ("</td>");
                            echo("<td>");
                            echo("</td>");
                            echo ("</tr>");
                            
                            echo ( "<tr>");
                            echo ("<td>");
                            echo ("</td>");
                            echo("<td>");
                                echo ($row["Contenido3"]);
                            echo("</td>");
                            echo ("</tr>");
                            
                                
                            }elseif($row['numero_secciones']==4){
                                 echo ( "<tr>");
                            echo ("<td>");
                                echo ($row["nombreSeccion1"]);
                            echo ("</td>");
                            echo("<td>");
                            echo("</td>");
                            echo ("</tr>");
                            
                            echo ( "<tr>");
                            echo ("<td>");
                            echo ("</td>");
                            echo("<td>");
                                echo ($row["Contenido1"]);
                            echo("</td>");
                            echo ("</tr>");
                            
                            echo ( "<tr>");
                            echo ("<td>");
                                echo ($row["nombreSeccion2"]);
                            echo ("</td>");
                            echo("<td>");
                            echo("</td>");
                            echo ("</tr>");
                            
                            echo ( "<tr>");
                            echo ("<td>");
                            echo ("</td>");
                            echo("<td>");
                                echo ($row["Contenido2"]);
                            echo("</td>");
                            echo ("</tr>");
                            
                            
                            
                            echo ( "<tr>");
                            echo ("<td>");
                                echo ($row["nombreSeccion3"]);
                            echo ("</td>");
                            echo("<td>");
                            echo("</td>");
                            echo ("</tr>");
                            
                            echo ( "<tr>");
                            echo ("<td>");
                            echo ("</td>");
                            echo("<td>");
                                echo ($row["Contenido3"]);
                            echo("</td>");
                            echo ("</tr>");
                            
                            
                            echo ( "<tr>");
                            echo ("<td>");
                                echo ($row["nombreSeccion4"]);
                            echo ("</td>");
                            echo("<td>");
                            echo("</td>");
                            echo ("</tr>");
                            
                            echo ( "<tr>");
                            echo ("<td>");
                            echo ("</td>");
                            echo("<td>");
                                echo ($row["Contenido4"]);
                            echo("</td>");
                            echo ("</tr>");
                            }elseif($row['numero_secciones']==5){
                                echo ( "<tr>");
                            echo ("<td>");
                                echo ($row["nombreSeccion1"]);
                            echo ("</td>");
                            echo("<td>");
                            echo("</td>");
                            echo ("</tr>");
                            
                            echo ( "<tr>");
                            echo ("<td>");
                            echo ("</td>");
                            echo("<td>");
                                echo ($row["Contenido1"]);
                            echo("</td>");
                            echo ("</tr>");
                            
                            echo ( "<tr>");
                            echo ("<td>");
                                echo ($row["nombreSeccion2"]);
                            echo ("</td>");
                            echo("<td>");
                            echo("</td>");
                            echo ("</tr>");
                            
                            echo ( "<tr>");
                            echo ("<td>");
                            echo ("</td>");
                            echo("<td>");
                                echo ($row["Contenido2"]);
                            echo("</td>");
                            echo ("</tr>");
                            
                            
                            
                            echo ( "<tr>");
                            echo ("<td>");
                                echo ($row["nombreSeccion3"]);
                            echo ("</td>");
                            echo("<td>");
                            echo("</td>");
                            echo ("</tr>");
                            
                            echo ( "<tr>");
                            echo ("<td>");
                            echo ("</td>");
                            echo("<td>");
                                echo ($row["Contenido3"]);
                            echo("</td>");
                            echo ("</tr>");
                            
                            
                            echo ( "<tr>");
                            echo ("<td>");
                                echo ($row["nombreSeccion4"]);
                            echo ("</td>");
                            echo("<td>");
                            echo("</td>");
                            echo ("</tr>");
                            
                            echo ( "<tr>");
                            echo ("<td>");
                            echo ("</td>");
                            echo("<td>");
                                echo ($row["Contenido4"]);
                            echo("</td>");
                            echo ("</tr>");
                            
                            
                            
                            echo ( "<tr>");
                            echo ("<td>");
                                echo ($row["nombreSeccion5"]);
                            echo ("</td>");
                            echo("<td>");
                            echo("</td>");
                            echo ("</tr>");
                            
                            echo ( "<tr>");
                            echo ("<td>");
                            echo ("</td>");
                            echo("<td>");
                                echo ($row["Contenido5"]);
                            echo("</td>");
                            echo ("</tr>");
                            }
                            echo("</table>");
                            }               
                }   
            ?>   
            <form action="visualizarTermino.php" method="POST">
                <input type="submit" name="BUSCAR" value="BUSCAR">
                <input type="submit" name="Volver_al_inicio" value="Volver al inicio">
            </form>
            <?php
        }
        if (isset($_POST['Volver_al_inicio'])) {
            header('location:index.php');
        }
        if (isset($_POST['BUSCAR'])) {
            header('location:buscar.php');
        }
        ?>
    </body>
</html>
