<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="buscar.php" method="POST">
            <input type="text" name="buscar" id="">
            <input type="submit" value="Buscar">
            <a href="nuevo.php">Nuevo</a>
        </form>
    </div>

    <div>
        <table borden="1">
            <tr>
                <td>ID</td>
                <td>Nombre Video</td>
                <td>video</td>
                <td>Comentario</td>
            </tr>
            <?php

            $buscar = $_POST['buscar'];
            $conex = mysqli_connect("localhost","root","","php_login_database_tmm_vs");
            $sql = "SELECT id, nombreVideo, urlVideo, comentario FROM videos where id like $buscar % order by id desc";
            $rta = mysqli_query($conex, $sql);
            
            while ($mostrar = mysqli_fetch_row($rta)){
                ?>
            <tr>
                <td><?php echo $mostrar['0'] ?></td>
                <td><?php echo $mostrar['1'] ?></td>
                <td><?php echo $mostrar['2'] ?></td>
                <td><?php echo $mostrar['3'] ?></td>
                <td>
                    <a href="editar.php?
                    id=<?php echo $mostrar['0'] ?> &
                    nombreVideo=<?php echo $mostrar['1'] ?> &
                    urlVideo=<?php echo $mostrar['2'] ?> &
                    comentario=<?php echo $mostrar ['3'] ?>
                    "></a>
                    ">Editar</a>
                    <a href="sp_eliminar.php?  id=<?php echo $mostrar['0'] ?>">Eliminar</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>

</body>
</html>