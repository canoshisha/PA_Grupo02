<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function form($con,$id){
            $sql = "SELECT * FROM terminos WHERE id='$id'";
                    $result = mysqli_query($con, $sql);
                        
                        while ($row = mysqli_fetch_array($result)) {
                            echo('<form method="POST">');
                            echo ( '<table border=1>
                                <tr>
                                     <th colspan=2 >
                                         <input type="text" name="nombre" value='.$row["nombreTermino"].'>
                                    </th>
                                </tr> ');
                            echo ( "<tr>");
                            echo ("<td>");
                                echo ('Fecha de creación');
                            echo("</td>");
                            echo ("<td>");
                            $solofecha=explode(' ',$row['fecha'] );
                            $fecha= explode('-',$solofecha[0]);                  
                            echo ('<input type="date" name="fecha" value='.$solofecha[0].'>');    
                            echo("</td>");
                            echo("</tr>");
                            
                            if($row['numero_secciones']==1){
                                 
                            echo ( "<tr>");
                            echo ("<td>");
                                 echo ('<input type="text" name="Nombre_de_la_seccion1" value='.$row["nombreSeccion1"].'>');
                            echo ("</td>");
                            echo("<td>");
                                 echo ('<textarea name="contenido1" >'.$row["Contenido1"].'</textarea>');
                            echo("</td>");
                            echo ("</tr>");
                            
                                
                            }elseif($row['numero_secciones']==2){
                             echo ( "<tr>");
                            echo ("<td>");
                                 echo ('<input type="text" name="Nombre_de_la_seccion1" value='.$row["nombreSeccion1"].'>');
                            echo ("</td>");
                            echo("<td>");
                                 echo ('<textarea name="contenido1" >'.$row["Contenido1"].'</textarea>');
                            echo("</td>");
                            echo ("</tr>");
                            echo ( "<tr>");
                            echo ("<td>");
                                 echo ('<input type="text" name="Nombre_de_la_seccion2" value='.$row["nombreSeccion2"].'>');
                            echo ("</td>");
                            echo("<td>");
                                 echo ('<textarea name="contenido2" >'.$row["Contenido2"].'</textarea>');
                            echo("</td>");
                            echo ("</tr>");
                                
                            }elseif($row['numero_secciones']==3){
                                
                                echo ( "<tr>");
                            echo ("<td>");
                                 echo ('<input type="text" name="Nombre_de_la_seccion1" value='.$row["nombreSeccion1"].'>');
                            echo ("</td>");
                            echo("<td>");
                                 echo ('<textarea name="contenido1" >'.$row["Contenido1"].'</textarea>');
                            echo("</td>");
                            echo ("</tr>");
                            echo ( "<tr>");
                            echo ("<td>");
                                 echo ('<input type="text" name="Nombre_de_la_seccion2" value='.$row["nombreSeccion2"].'>');
                            echo ("</td>");
                            echo("<td>");
                                 echo ('<textarea name="contenido2" >'.$row["Contenido2"].'</textarea>');
                            echo("</td>");
                            echo ("</tr>");
                            echo ( "<tr>");
                            echo ("<td>");
                                 echo ('<input type="text" name="Nombre_de_la_seccion3" value='.$row["nombreSeccion3"].'>');
                            echo ("</td>");
                            echo("<td>");
                                 echo ('<textarea name="contenido3" >'.$row["Contenido3"].'</textarea>');
                            echo("</td>");
                            echo ("</tr>");
              
                                
                            }elseif($row['numero_secciones']==4){
                                echo ( "<tr>");
                            echo ("<td>");
                                 echo ('<input type="text" name="Nombre_de_la_seccion1" value='.$row["nombreSeccion1"].'>');
                            echo ("</td>");
                            echo("<td>");
                                 echo ('<textarea name="contenido1" >'.$row["Contenido1"].'</textarea>');
                            echo("</td>");
                            echo ("</tr>");
                            echo ( "<tr>");
                            echo ("<td>");
                                 echo ('<input type="text" name="Nombre_de_la_seccion2" value='.$row["nombreSeccion2"].'>');
                            echo ("</td>");
                            echo("<td>");
                                 echo ('<textarea name="contenido2" >'.$row["Contenido2"].'</textarea>');
                            echo("</td>");
                            echo ("</tr>");
                            echo ( "<tr>");
                            echo ("<td>");
                                 echo ('<input type="text" name="Nombre_de_la_seccion3" value='.$row["nombreSeccion3"].'>');
                            echo ("</td>");
                            echo("<td>");
                                 echo ('<textarea name="contenido3" >'.$row["Contenido3"].'</textarea>');
                            echo("</td>");
                            echo ("</tr>");
                            echo ( "<tr>");
                            echo ("<td>");
                                 echo ('<input type="text" name="Nombre_de_la_seccion4" value='.$row["nombreSeccion4"].'>');
                            echo ("</td>");
                            echo("<td>");
                                 echo ('<textarea name="contenido4" >'.$row["Contenido4"].'</textarea>');
                            echo("</td>");
                            echo ("</tr>");
                            }elseif($row['numero_secciones']==5){
                                   echo ( "<tr>");
                            echo ("<td>");
                                 echo ('<input type="text" name="Nombre_de_la_seccion1" value='.$row["nombreSeccion1"].'>');
                            echo ("</td>");
                            echo("<td>");
                                 echo ('<textarea name="contenido1" >'.$row["Contenido1"].'</textarea>');
                            echo("</td>");
                            echo ("</tr>");
                            echo ( "<tr>");
                            echo ("<td>");
                                 echo ('<input type="text" name="Nombre_de_la_seccion2" value='.$row["nombreSeccion2"].'>');
                            echo ("</td>");
                            echo("<td>");
                                 echo ('<textarea name="contenido2" >'.$row["Contenido2"].'</textarea>');
                            echo("</td>");
                            echo ("</tr>");
                            echo ( "<tr>");
                            echo ("<td>");
                                 echo ('<input type="text" name="Nombre_de_la_seccion3" value='.$row["nombreSeccion3"].'>');
                            echo ("</td>");
                            echo("<td>");
                                 echo ('<textarea name="contenido3" >'.$row["Contenido3"].'</textarea>');
                            echo("</td>");
                            echo ("</tr>");
                            echo ( "<tr>");
                            echo ("<td>");
                                 echo ('<input type="text" name="Nombre_de_la_seccion4" value='.$row["nombreSeccion4"].'>');
                            echo ("</td>");
                            echo("<td>");
                                 echo ('<textarea name="contenido4" >'.$row["Contenido4"].'</textarea>');
                            echo("</td>");
                            echo ("</tr>");
                            echo ( "<tr>");
                            echo ("<td>");
                                 echo ('<input type="text" name="Nombre_de_la_seccion5" value='.$row["nombreSeccion5"].'>');
                            echo ("</td>");
                            echo("<td>");
                                 echo ('<textarea name="contenido5" >'.$row["Contenido5"].'</textarea>');
                            echo("</td>");
                            echo ("</tr>");
                            }
                            echo("</table>");
                            echo('<input type="hidden" name="numero" value="' . $row['numero_secciones'] . '">');
                            }
                            echo('<input type="hidden" name="id" value="' . $id . '">');
                            
                            echo( '<input type="submit" name="GUARDAR" value="GUARDAR">');
                             echo('</form>');              
                }   
        
        if (isset($_POST['id'])) {
            $id=$_POST['id'];
            $con = mysqli_connect("localhost", "root", "", "p2");
                if (!$con) {
                    die('No puedo conectar');
                    mysqli_close($con);
                } else {
                    form($con,$id); 
                }   
            ?>   
            
                
            <?php
        }
        
        if(isset($_POST['GUARDAR'])){
            $i = 1;
            $error = FALSE;
            if(!($nombre=filter_input(INPUT_POST, "nombre", FILTER_SANITIZE_STRING))){
                    echo(' <p style="color:red;"> Nombre sin rellenar</p>');    
                $error=TRUE;
                    
            }
            $numero = filter_input(INPUT_POST, "numero", FILTER_SANITIZE_NUMBER_INT);
            $id= $_POST['id'];
            $fecha=$_POST['fecha'];
            
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
                form($con,$id);
                
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
                    if ($numero == 1) {
                        $sql = "UPDATE terminos
                                SET nombreTermino='$nombre',nombreSeccion1='$nombreseccion1',contenido1='$contenido1', fecha='$fecha'
                                WHERE id = $id";
                    } elseif ($numero == 2) {
                        $sql = "UPDATE terminos
                                SET nombreTermino='$nombre',nombreSeccion1='$nombreseccion1',contenido1='$contenido1',nombreSeccion2='$nombreseccion2',contenido2='$contenido2', fecha='$fecha'
                                WHERE id = $id";
               
                    } elseif ($numero == 3) {
                       $sql = "UPDATE terminos
                                SET nombreTermino='$nombre',nombreSeccion1='$nombreseccion1',contenido1='$contenido1',nombreSeccion2='$nombreseccion2',contenido2='$contenido2',nombreSeccion3='$nombreseccion3',contenido3='$contenido3', fecha='$fecha'
                                WHERE id = $id";
                    } elseif ($numero == 4) {
                       $sql = "UPDATE terminos
                                SET nombreTermino='$nombre',nombreSeccion1='$nombreseccion1',contenido1='$contenido1',nombreSeccion2='$nombreseccion2',contenido2='$contenido2',nombreSeccion3='$nombreseccion3',contenido3='$contenido3',nombreSeccion4='$nombreseccion4',contenido4='$contenido4', fecha='$fecha'
                                WHERE id = $id";
                    } elseif ($numero == 5) {
                        $sql = "UPDATE terminos
                                SET nombreTermino='$nombre',nombreSeccion1='$nombreseccion1',contenido1='$contenido1',nombreSeccion2='$nombreseccion2',contenido2='$contenido2',nombreSeccion3='$nombreseccion3',contenido3='$contenido3',nombreSeccion4='$nombreseccion4',contenido4='$contenido4',nombreSeccion5='$nombreseccion5',contenido5='$contenido5', fecha='$fecha'
                                WHERE id = $id";
                    }
                    if (!mysqli_query($con,$sql)) {
                        form($con,$id);
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

