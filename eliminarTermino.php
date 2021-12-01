<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (isset($_POST['id'])) {
            $id=$_POST['id'];
            $con = mysqli_connect("localhost", "root", "", "p2");
            if (!$con) {
                die('No puedo conectar');
                mysqli_close($con);
            } else {
                $consulta = "DELETE FROM terminos WHERE id='$id'";
                mysqli_query($con, $consulta);
               header('location:index.php');
               mysqli_close($con);
                
            }
        }
        ?>
    </body>
</html>
