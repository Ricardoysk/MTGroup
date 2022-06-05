<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>




<body>



<?php

    include("database.php");

    $id = $_GET['id'];
    $consulta = "SELECT * FROM videos  WHERE id=".$id."";
    $result = mysqli_query($conex, $consulta);
    $mostrar = mysqli_fetch_array($result,MYSQLI_ASSOC);
    


?>
    <div>
        <form action="sp_editar.php" method="post">
        <table class="table table-hover table-dark">
            <tr>
                <td>Ingresar datos:</td>
                <td><input type="text" name="id" id="" style="visibility: hidden;" value="<?=$id?>"></td>
            </tr>
            <tr>
                <td>Nombre Video</td>
                <td><input type="text" name="nombreVideo" id="" value="<?=$mostrar['nombreVideo']?>"></td>
            </tr>
            <tr>
                <td>Url</td>
                <td><input type="text" name="urlVideo" id="" value="<?=$mostrar['urlVideo']?>"></td>
            </tr>
            <tr>
                <td>Comentario</td>
                <td><input type="text" name="comentario" id="" value="<?=$mostrar['comentario']?>"></td>
            </tr>
            <td><input type="submit" value="Actualizar"></td>
            <td><a href="contenido.php">Cancelar</a></td>
        </table>
        </form>
    </div>

    <footer class="footer">

<section>

   <div class="share">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-youtube"></a>
   </div>

   <div class="credit">&copy; copyright @ 2022 by <span>mr. web designer</span> | all rights reserved!</div>

</section>

</footer>
</body>
</html>
